<?php 
$title = "About JCI DAGUPAN | Our History & Mission";
$page = "about";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn about JCI DAGUPAN's history, mission, and our impact on youth leadership development and community service in Dagupan.">
    <meta name="keywords" content="JCI, DAGUPAN, about, history, mission, leadership, youth, non-profit">
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

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="about-image">
                    <div class="jci-logo-large">
                        <i class="fas fa-handshake fa-10x text-primary"></i>
                        <div class="jci-text mt-3 text-center">
                            <h3>JCI DAGUPAN</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Who We Are</h2>
                <p class="lead">JCI DAGUPAN is a local chapter of Junior Chamber International (JCI), a global network of young active citizens.</p>
                <p>
                    Founded in 1951, JCI DAGUPAN has been empowering young people in Dagupan City and surrounding areas
                    for over three decades. We provide development opportunities that empower young active citizens to create
                    positive change in their communities.
                </p>
                <p>
                    Our members are young professionals, entrepreneurs, and leaders aged 18-40 who are committed to personal growth
                    and community development. Through projects, trainings, and networking events, we create opportunities for young
                    people to develop their leadership skills and social responsibility.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="values-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Values</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="value-card text-center">
                    <div class="value-icon mb-3">
                        <i class="fas fa-heart fa-3x text-primary"></i>
                    </div>
                    <h3>Faith</h3>
                    <p>We believe in the power of faith in God, in the worthiness of our purpose, and in ourselves.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="value-card text-center">
                    <div class="value-icon mb-3">
                        <i class="fas fa-hands-helping fa-3x text-primary"></i>
                    </div>
                    <h3>Service</h3>
                    <p>We are committed to serving our communities and creating positive impact through our actions.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="value-card text-center">
                    <div class="value-icon mb-3">
                        <i class="fas fa-lightbulb fa-3x text-primary"></i>
                    </div>
                    <h3>Leadership</h3>
                    <p>We develop leaders who serve as catalysts for positive change in their communities.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="value-card text-center">
                    <div class="value-icon mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h3>Fellowship</h3>
                    <p>We foster meaningful connections and camaraderie among our members and communities.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JCI Creed Section -->
<section class="creed-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="creed-card p-4 text-center">
                    <h2 class="mb-4">The JCI Creed</h2>
                    <p class="creed-text">
                        We believe:
                    </p>
                    <p class="creed-text">
                        That faith in God gives meaning and purpose to human life;
                    </p>
                    <p class="creed-text">
                        That the brotherhood of man transcends the sovereignty of nations;
                    </p>
                    <p class="creed-text">
                        That economic justice can best be won by free men through free enterprise;
                    </p>
                    <p class="creed-text">
                        That government should be of laws rather than of men;
                    </p>
                    <p class="creed-text">
                        That earth's great treasure lies in human personality;
                    </p>
                    <p class="creed-text">
                        And that service to humanity is the best work of life.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our History -->
<section class="history-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our History</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3 class="year">1951</h3>
                    <h4>Foundation of JCI DAGUPAN</h4>
                    <p>JCI DAGUPAN was founded.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3 class="year">1986</h3>
                    <h4>National Recognition</h4>
                    <p>JCI Dagupan Bangus was recognized with a national award, highlighting its impactful contributions to the community.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3 class="year">1988</h3>
                    <h4>National awardee</h4>
                    <p>The chapter received another national award, further cementing its reputation for excellence in service</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3 class="year">2002</h3>
                    <h4>Celebration</h4>
                    <p>In celebration of Dagupan City's status as the "Milkfish Capital of the Philippines," JCI Dagupan Bangus played a pivotal role in launching the annual Bangus Festival. This event honors the city's rich heritage and promotes its thriving milkfish industry. </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3 class="year">2025</h3>
                    <h4>Turnover and Induction</h4>
                    <p>The chapter marked its 74th turnover and induction ceremony on March 5, 2025. The event was celebrated with enthusiasm, reflecting the organization's enduring commitment to community development and leadership.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="leadership-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Leadership Team</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-9x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Ricky Avelino</h3>
                    <p class="team-position">2025 President</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Maria Karla Lacro</h3>
                    <p class="team-position">Immediate Past President</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Orlando Navarro Jr.</h3>
                    <p class="team-position">Executive President</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Kevin Gabrillo</h3>
                    <p class="team-position">VP International</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Chrisca Dimayuga</h3>
                    <p class="team-position">VP Business</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Madelene Lyka Siapno</h3>
                    <p class="team-position">VP Community</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Jazmine Andre Cayabyab</h3>
                    <p class="team-position">VP Individual</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Ivy Paras</h3>
                    <p class="team-position">Secretary</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Kevin Rey Dela Cruz</h3>
                    <p class="team-position">Treasurer</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Maria Theresa Cachola</h3>
                    <p class="team-position">Deputy Treasurer</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Janrico Avelino</h3>
                    <p class="team-position">Auditor</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Glysa Agoscruz</h3>
                    <p class="team-position">PRO</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Marcrogie Claveria</h3>
                    <p class="team-position">LSDD</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Ryan De Guzman</h3>
                    <p class="team-position">Director For JCI Week</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Joan Horlock</h3>
                    <p class="team-position">Director For Health Program</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Mark Bryan Sumalbag</h3>
                    <p class="team-position">Director For Membership</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Emanuel Soy</h3>
                    <p class="team-position">National Relations</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Lantis Ramirez</h3>
                    <p class="team-position">Director For Sports</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <div class="team-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="team-name">Mary Kayle Ambeguia</h3>
                    <p class="team-position">Director For Women Empowerment</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Past Presidents Section -->
<section class="past-presidents-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Past Presidents</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Ricky Avelino</h3>
                    <p class="past-president-year">Current President</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Mari Karla Lacro</h3>
                    <p class="past-president-year">2024</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Francis Perez</h3>
                    <p class="past-president-year">2023</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Teng Sison</h3>
                    <p class="past-president-year">2022</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Karen Mapanao</h3>
                    <p class="past-president-year">2021</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Katrina Viray</h3>
                    <p class="past-president-year">2020</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Fritzie M. Cayabyab</h3>
                    <p class="past-president-year">2019</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Juan Caras</h3>
                    <p class="past-president-year">2018</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Vijay Vasandari</h3>
                    <p class="past-president-year">2017</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Richard Paras</h3>
                    <p class="past-president-year">2016</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="past-president-card text-center">
                    <div class="past-president-image mb-3">
                        <i class="fas fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <h3 class="past-president-name">Jtee Aquino</h3>
                    <p class="past-president-year">2015</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <h2 class="text-white">Ready to Make a Difference?</h2>
                <p class="lead mb-0">Join JCI DAGUPAN today and be part of a global movement of young active citizens.</p>
            </div>
            <div class="col-md-3 text-md-end mt-3 mt-md-0">
                <a href="mailto:dagupanbangus.jci@gmail.com" class="btn btn-light btn-lg">Join Now</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Frequently Asked Questions</h2>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Who can join JCI DAGUPAN?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Young adults between 18 and 40 years of age who are committed to personal growth and community development can join JCI DAGUPAN.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How often does JCI DAGUPAN meet?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We typically hold general membership meetings once a month, with additional project committee meetings as needed. We also organize regular social and networking events.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What are the membership fees?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Membership fees vary annually. Please contact our membership committee for current rates. The fees cover local, national, and international dues, as well as administrative costs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How can I get involved in projects?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Members can join existing project committees or propose new initiatives. We encourage active participation based on your interests, skills, and availability.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="js/main.js"></script>
</body>
</html>
