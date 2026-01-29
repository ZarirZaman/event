<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management Platform</title>
    
    <!-- CSS Links -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container nav__container">
            <a href="index.php" class="nav__logo">Event Management</a>
            <ul class="nav__items">
                <li><a href="index.php">Home</a></li>
                <li><a href="guide.php">Guide</a></li>
                <li><a href="booking.php">Book</a></li>                                          
                <li><a href="signin.php">Sign In</a></li>
                <li><a href="signup.php">Sign Up</a></li> 
            </ul>
            <button id="open__nav-btn"><i class="uis uis-bars"></i></button>
            <button id="close__nav-btn"><i class="uis uis-times"></i></button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero__container">
            <div class="hero__image">
                <img src="./image/welcome.webp" alt="Welcome to Event Management">
            </div>
            <div class="hero__content">
                <span class="category-tag">Event Management</span>
                <h1 class="hero__title">Welcome </h1>
                <p class="hero__description">We create unforgettable events with seamless planning and flawless execution. From concept to completion, we turn your vision into a memorable experience.</p>
            </div>
        </div>
    </section>

    <!-- Events Grid -->
    <section class="events-section">
        <div class="container events-container">
            <h2 class="section-title">Featured Events</h2>
            <p class="section-subtitle">Discover amazing events happening around you</p>
            
            <div class="events-grid">
                <!-- Event Cards -->
                <article class="event-card">
                    <div class="event-image">
                        <img src="./image/music.jpeg" alt="Live Concert">
                        <span class="event-category">Music</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Summer Music Festival 2024</h3>
                        <div class="event-details">
                            <span class="event-date"><i class="fas fa-calendar"></i> June 15, 2024</span>
                            <span class="event-location"><i class="fas fa-map-marker-alt"></i> Central Park</span>
                        </div>
                        <p class="event-description">Join us for the biggest music festival of the year featuring top artists.</p>
                        <a href="booking.php" class="event-button">Book Now</a>
                    </div>
                </article>

                <article class="event-card">
                    <div class="event-image">
                        <img src="./image/business.jpeg" alt="Creative Workshop">
                        <span class="event-category">Workshop</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Digital Marketing Masterclass</h3>
                        <div class="event-details">
                            <span class="event-date"><i class="fas fa-calendar"></i> June 20, 2024</span>
                            <span class="event-location"><i class="fas fa-map-marker-alt"></i> Business Center</span>
                        </div>
                        <p class="event-description">Learn from industry experts about the latest digital marketing strategies.</p>
                        <a href="booking.php" class="event-button">Book Now</a>
                    </div>
                </article>

                <article class="event-card">
                    <div class="event-image">
                        <img src="./image/sports.jpg" alt="Sports Event">
                        <span class="event-category">Sports</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">City Marathon 2024</h3>
                        <div class="event-details">
                            <span class="event-date"><i class="fas fa-calendar"></i> July 5, 2024</span>
                            <span class="event-location"><i class="fas fa-map-marker-alt"></i> City Stadium</span>
                        </div>
                        <p class="event-description">Participate or cheer for runners in the annual city marathon.</p>
                        <a href="booking.php" class="event-button">Book Now</a>
                    </div>
                </article>

                <article class="event-card">
                    <div class="event-image">
                        <img src="./image/photography.jpg" alt="Art Exhibition">
                        <span class="event-category">Art</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Modern Art Exhibition</h3>
                        <div class="event-details">
                            <span class="event-date"><i class="fas fa-calendar"></i> June 25, 2024</span>
                            <span class="event-location"><i class="fas fa-map-marker-alt"></i> Art Gallery</span>
                        </div>
                        <p class="event-description">Experience contemporary art from talented local and international artists.</p>
                        <a href="booking.php" class="event-button">Book Now</a>
                    </div>
                </article>

                <article class="event-card">
                    <div class="event-image">
                        <img src="./image/foodfestival.jpg" alt="Food Festival">
                        <span class="event-category">Food</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">International Food Festival</h3>
                        <div class="event-details">
                            <span class="event-date"><i class="fas fa-calendar"></i> July 10, 2024</span>
                            <span class="event-location"><i class="fas fa-map-marker-alt"></i> Riverside Park</span>
                        </div>
                        <p class="event-description">Taste cuisines from around the world in this delicious food festival.</p>
                        <a href="booking.php" class="event-button">Book Now</a>
                    </div>
                </article>

                <article class="event-card">
                    <div class="event-image">
                        <img src="./image/tech.jpg" alt="Tech Conference">
                        <span class="event-category">Technology</span>
                    </div>
                    <div class="event-content">
                        <h3 class="event-title">Tech Innovators Conference</h3>
                        <div class="event-details">
                            <span class="event-date"><i class="fas fa-calendar"></i> August 1, 2024</span>
                            <span class="event-location"><i class="fas fa-map-marker-alt"></i> Convention Center</span>
                        </div>
                        <p class="event-description">Explore the latest in technology and innovation with industry leaders.</p>
                        <a href="booking.php" class="event-button">Book Now</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="categories-section">
        <div class="container categories-container">
            <h2 class="section-title">Browse by Category</h2>
            <p class="section-subtitle">Find events that match your interests</p>
            
            <div class="categories-grid">
                <a href="#" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Art & Exhibitions</h3>
                    <p>Gallery shows, art fairs</p>
                </a>
                
                <a href="#" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3>Music & Concerts</h3>
                    <p>Live performances, festivals</p>
                </a>
                
                <a href="#" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-futbol"></i>
                    </div>
                    <h3>Sports</h3>
                    <p>Games, tournaments, races</p>
                </a>
                
                <a href="#" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Business</h3>
                    <p>Conferences, networking</p>
                </a>
                
                <a href="#" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-theater-masks"></i>
                    </div>
                    <h3>Cultural</h3>
                    <p>Traditional, heritage events</p>
                </a>
            </div>
        </div>
    </section>
</body>
</html>