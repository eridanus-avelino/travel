<?php 
$title = "Flyers Hub Dagupan";
$page = "home";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo $title; ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Mission Section -->
<!-- <section class="mission-section py-5" id="mission">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="section-title">Our Mission</h2>
                <p class="section-subtitle">We affirm our conviction that faith in God gives meaning and purpose to human life. May the Lord guide us in all our undertakings.</p>
                <hr class="divider">
                <p class="mission-text">
                    JCI DAGUPAN is dedicated to providing opportunities for young people to develop their leadership skills, 
                    social responsibility, entrepreneurship, and fellowship necessary to create positive change in their communities.
                </p>
            </div>
        </div>
    </div>
</section> -->

<!-- Vision Section -->
<!-- <section class="vision-section py-5 bg-light" id="vision">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="section-title">Our Vision</h2>
                <p class="section-subtitle">To be the leading global network of young active citizens.</p>
                <hr class="divider">
                <p class="vision-text">
                    JCI DAGUPAN envisions a world where young people unite to create sustainable impact, fostering a sense of global citizenship and community development.
                </p>
            </div>
        </div>
    </div>
</section> -->

<!-- Services -->
<section class="what-we-do-section py-5 bg-light" id="what-we-do">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Services</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-plane fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">Domestic & International Flight Ticketing</h3>
                        <p class="card-text">We offer domestic and international flight ticketing services to ensure your travel needs are met efficiently and affordably.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-passport fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">Visa Advice and Processing</h3>
                        <p class="card-text">We provide visa advice and processing services to ensure your travel documents are in order.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-id-card fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">Passport Processing</h3>
                        <p class="card-text">We assist with passport processing to ensure you have all the necessary documents for your travels.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-hotel fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">Worldwide Booking and Hotel Reservation</h3>
                        <p class="card-text">With our worldwide booking and hotel reservation services to ensure a seamless travel experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-ship fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">Ferry Tickets</h3>
                        <p class="card-text">We provide ferry ticketing services to ensure your sea travel is convenient and hassle-free.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-suitcase-rolling fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">Tour Packages and Land Arrangements</h3>
                        <p class="card-text">We offer comprehensive tour packages and land arrangements to make your travel experience enjoyable and stress-free.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-briefcase fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">Corporate Events & Educational Tours</h3>
                        <p class="card-text">We organize corporate events and educational tours to provide enriching experiences and professional growth opportunities.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-anchor fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">Cruise Ship Tours</h3>
                        <p class="card-text">Experience luxurious and unforgettable cruise ship tours with our exclusive packages.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shield-alt fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">Travel Insurance</h3>
                        <p class="card-text">We offer comprehensive travel insurance plans to protect you against unforeseen events during your travels.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-car fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">Car, Van, Bus & Coaster Rental</h3>
                        <p class="card-text">We offer rental services for cars, vans, buses, and coasters to meet your transportation needs for any occasion.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-wifi fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">International Pocket Wi-Fi</h3>
                        <p class="card-text">Stay connected wherever you go with our international pocket Wi-Fi rental service, providing reliable internet access during your travels.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-handshake fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">M.I.C.E</h3>
                        <p class="card-text">We offer Meetings, Incentives, Conferences, and Exhibitions (M.I.C.E) services to help you organize successful and impactful events.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                        </div>
                        <h3 class="card-title">International Student Assistance</h3>
                        <p class="card-text">We provide comprehensive support for international students, including visa assistance, accommodation arrangements, and orientation programs to help them settle in a new country.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Embedded Map Section -->
<section class="map-section py-5" id="location">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Location</h2>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.1234567890123!2d120.3308098!3d16.0383792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33915de6e0603e31%3A0x4e6f8e92a94124a6!2sFLYER'S%20HUB%20-%20Travel%20and%20Tours!5e0!3m2!1sen!2sph!4v1234567890123" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<!-- <section class="testimonials-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Member Stories</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="testimonial-card p-4">
                    <div class="testimonial-content">
                        <i class="fas fa-quote-left fa-2x text-primary mb-3"></i>
                        <p class="testimonial-text">
                            Being part of JCI DAGUPAN has transformed my professional life. The leadership skills I've gained
                            have opened doors I never thought possible.
                        </p>
                        <div class="testimonial-author">
                            <h5 class="mb-0">Maria Santos</h5>
                            <p class="text-muted">Member since 2019</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="testimonial-card p-4">
                    <div class="testimonial-content">
                        <i class="fas fa-quote-left fa-2x text-primary mb-3"></i>
                        <p class="testimonial-text">
                            JCI DAGUPAN provided me with the platform to create positive change in my community while
                            developing invaluable leadership and communication skills.
                        </p>
                        <div class="testimonial-author">
                            <h5 class="mb-0">Juan Dela Cruz</h5>
                            <p class="text-muted">Member since 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Join Us Section -->
<!-- <section class="join-us-section py-5 bg-primary text-white" id="join-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="section-title text-white">Join JCI DAGUPAN Today</h2>
                <p class="lead">
                    Become a member of our organization and be part of a global network of young active citizens.
                </p>
            </div>
            <div class="col-md-4 text-md-end">
                <a href="mailto:contact@jcidagupan.org" class="btn btn-light btn-lg">Contact Us</a>
            </div>
        </div>
    </div>
</section> -->

<!-- Upcoming Events -->
<!-- <section class="events-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Upcoming Events</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="event-card">
                    <div class="event-date">
                        <span class="month">SEP</span>
                        <span class="day">15</span>
                    </div>
                    <div class="event-details">
                        <h3 class="event-title">Leadership Workshop</h3>
                        <p class="event-location"><i class="fas fa-map-marker-alt"></i> JCI DAGUPAN Center</p>
                        <p class="event-description">Join us for a workshop on effective leadership strategies for young professionals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="event-card">
                    <div class="event-date">
                        <span class="month">OCT</span>
                        <span class="day">10</span>
                    </div>
                    <div class="event-details">
                        <h3 class="event-title">Community Clean-up Drive</h3>
                        <p class="event-location"><i class="fas fa-map-marker-alt"></i> Dagupan City Park</p>
                        <p class="event-description">Volunteer for our environmental initiative to clean up the city park.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="js/main.js"></script>
</body>
</html>
