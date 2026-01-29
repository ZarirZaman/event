<?php
session_start();
require_once '../Model/db.php';

// Get form data
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$password = $_POST['password'] ?? '';


$errors = [];

if (empty($fullname)) {
    $errors[] = "Full name is required";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Valid email is required";
}

if (empty($phone)) {
    $errors[] = "Phone number is required";
}

if (strlen($password) < 6) {
    $errors[] = "Password must be at least 6 characters";
}

// Check if email exists
if (empty($errors)) {
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $errors[] = "Email already exists";
    }
    $stmt->close();
}

// If no errors, register user
if (empty($errors)) {
    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert user using prepared statement
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullname, $email, $phone, $hashed_password);
    
    if ($stmt->execute()) {
        
        $_SESSION['user_id'] = $stmt->insert_id;
        $_SESSION['user_name'] = $fullname;
        $_SESSION['user_email'] = $email;
        $_SESSION['logged_in'] = true;
        
        $stmt->close();
        $conn->close();
        
        
        header("Location: ../../Public/index.php");
        exit();
    } else {
        $errors[] = "Registration failed: " . $conn->error;
    }
}

// Close connection
$conn->close();

// If errors, go back
if (!empty($errors)) {
    $error_string = implode("|", $errors);
    header("Location: ../../View/html/register.php?error=" . urlencode($error_string));
    exit();
}
?>