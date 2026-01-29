<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: ../Public/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Event Management</title>
    
    <link rel="stylesheet" href="/event/Public/css/auth-style.css">
    <script src="/event/Public/js/auth.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1>Create Account</h1>
                <p>Join our event platform</p>
            </div>
            
            <?php if(isset($_GET['error'])): ?>
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <?php 
                    $errors = explode('|', $_GET['error']);
                    echo htmlspecialchars($errors[0]);
                    ?>
                </div>
            <?php endif; ?>
            
            <!-- FIXED FORM ACTION PATH: from View/html/ to Controller/ -->
            <form id="registerForm" class="auth-form" action="../../Controller/register.php" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="fullname" placeholder="Full Name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <i class="fas fa-phone"></i>
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password (min 6 characters)" required>
                        <button type="button" class="toggle-password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                
                <button type="submit" class="auth-btn">Create Account</button>
                
                <div class="auth-footer">
                    <p>Already have an account? <a href="login.php" class="link">Log In</a></p>
                </div>
            </form>
            
        </div>
        
        <div class="auth-image">
            <div class="image-overlay">
                <h2>Join Our Community</h2>
                <p>Discover amazing events and create unforgettable memories</p>
                <div class="benefits">
                    <div class="benefit">
                        <i class="fas fa-calendar-check"></i>
                        <span>Easy Event Booking</span>
                    </div>
                    <div class="benefit">
                        <i class="fas fa-ticket-alt"></i>
                        <span>Exclusive Offers</span>
                    </div>
                    <div class="benefit">
                        <i class="fas fa-bell"></i>
                        <span>Personalized Notifications</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>