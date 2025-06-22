<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title>Franchise Opportunity | Elite Corporate Solutions</title>
    <meta name="description"
        content="Start your own recruitment franchise with Elite Corporate Solutions. Low investment, high returns, and complete support. Join our global network today.">
    <meta name="keywords"
        content="recruitment franchise, business opportunity, HR franchise, low investment business, executive search franchise">
    <meta name="author" content="Elite Corporate Solutions">

    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="Franchise Opportunity | Elite Corporate Solutions">
    <meta property="og:description"
        content="Join our global recruitment franchise network with proven business model and high ROI potential.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">
    <meta property="og:url" content="https://elitecorporatesolutions.com/franchise">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Franchise Opportunity | Elite Corporate Solutions">
    <meta name="twitter:description"
        content="Start your own recruitment franchise with our proven business model and support system.">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">

    <!-- Favicon -->
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3710/3710304.png" type="image/png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include "include/assets.php"?>

    <!-- Main CSS -->
    <style>
        :root {
            --primary: #001f3f;  /* Navy blue */
            --secondary: #2ECC71; /* Emerald green */
            --accent: #FF851B;    /* Orange */
            --light: #F8F9FA;
            --dark: #212529;
            --gray: #6C757D;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: white;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 31, 63, 0.85), rgba(0, 31, 63, 0.9)), 
                        url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        .btn-primary {
            background-color: var(--secondary);
            border-color: var(--secondary);
            padding: 12px 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #25a25a;
            border-color: #25a25a;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .btn-outline-light:hover {
            color: var(--primary);
        }

        .section-title {
            position: relative;
            margin-bottom: 3rem;
            color: var(--primary);
        }

        .section-title:after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -15px;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--secondary);
            border-radius: 2px;
        }

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            margin-bottom: 30px;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .card-icon {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
        }

        .feature-card {
            border-left: 4px solid var(--secondary);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            border-left: 4px solid var(--accent);
        }

        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            padding: 100px 0;
            color: white;
        }

        .parallax-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 31, 63, 0.85);
        }

        .parallax-content {
            position: relative;
            z-index: 2;
        }

        .stats-item {
            text-align: center;
            padding: 30px 15px;
        }

        .stats-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary);
            margin-bottom: 10px;
        }

        .stats-label {
            font-size: 1.1rem;
            color: black;
            opacity: 0.9;
        }

        .testimonial-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            position: relative;
            margin-top: 40px;
        }

        .testimonial-card:before {
            content: '\201C';
            font-family: Georgia, serif;
            font-size: 5rem;
            color: var(--secondary);
            opacity: 0.2;
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }

        .form-control, .form-select {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 0.25rem rgba(46, 204, 113, 0.25);
        }

        .footer {
            background-color: var(--primary);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-links h5 {
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h5:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background: var(--secondary);
        }

        .footer-links ul {
            list-style: none;
            padding-left: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: rgba(255,255,255,0.7);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            margin-right: 10px;
            color: white;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 1;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            background: var(--secondary);
            top: -100px;
            right: -100px;
        }

        .shape-2 {
            width: 200px;
            height: 200px;
            background: var(--accent);
            bottom: -50px;
            left: -50px;
        }

        .shape-3 {
            width: 150px;
            height: 150px;
            background: white;
            top: 50%;
            left: 30%;
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline:after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--secondary);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 3px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item:after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -12px;
            background-color: white;
            border: 4px solid var(--secondary);
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .left:before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }

        .right:before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        .right:after {
            left: -12px;
        }

        .timeline-content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        @media screen and (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .timeline:after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item:before {
                left: 60px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }
            
            .left:after, .right:after {
                left: 18px;
            }
            
            .right {
                left: 0%;
            }
        }

        /* Animation classes */
        .animate-pop-in {
            animation: popIn 0.6s cubic-bezier(0, 0.9, 0.3, 1.2) forwards;
            opacity: 0;
        }

        @keyframes popIn {
            0% {
                opacity: 0;
                transform: translateY(20px) scale(0.9);
            }
            100% {
                opacity: 1;
                transform: none;
            }
        }

        .delay-1 {
            animation-delay: 0.3s;
        }

        .delay-2 {
            animation-delay: 0.6s;
        }

        .delay-3 {
            animation-delay: 0.9s;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--secondary);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #25a25a;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
   <?php include "include/header.php"?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="hero-title animate-pop-in">Build Your Own Recruitment Empire</h1>
                    <p class="hero-subtitle animate-pop-in delay-1">Join our global franchise network and start your journey as an entrepreneur with our proven business model</p>
                    <div class="animate-pop-in delay-2">
                        <a href="#contact" class="btn btn-primary btn-lg me-3">Get Started</a>
                        <a href="#about" class="btn btn-outline-light btn-lg">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block animate-pop-in delay-3">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Business meeting" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stats-item">
                        <div class="stats-number" data-count="10">0</div>
                        <div class="stats-label">Years Experience</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stats-item">
                        <div class="stats-number" data-count="500">0</div>
                        <div class="stats-label">Successful Placements</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <div class="stats-number" data-count="10">0</div>
                        <div class="stats-label">Global Franchises</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stats-item">
                        <div class="stats-number" data-count="70">0</div>
                        <div class="stats-label">% Franchisee Share</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">About Our Franchise Opportunity</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Team meeting" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h3 class="mb-4">The Ascension of the Recruitment Profession</h3>
                    <p>Elite Corporate Solutions is a leading recruitment consultancy and a multi-functional, multi-faculty, cross-industry Global Executive Search firm based in Mumbai (India). We specialize in placement consultancy services such as Executive Search, CXO Hiring, Turnkey Recruitment, Interim Management, and HR Consulting.</p>
                    <p>We have successfully launched our Franchise concept and quickly expanded to undertake international recruitment. We have over 10 leading overseas franchises and have successfully recruited over 500+ individuals worldwide through them.</p>
                    <div class="mt-4">
                        <a href="#opportunity" class="btn btn-primary">Explore Opportunity</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax Section 1 -->
    <section class="parallax" style="background-image: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
        <div class="parallax-overlay"></div>
        <div class="container parallax-content">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Why the Recruitment Industry is Booming</h2>
                    <p class="lead mb-5">According to Gartner Inc. study, <strong>80% of firms outsource at least one HR activity</strong>, and the number is rapidly increasing. A growing number of businesses are turning to specialist services to help with different elements of human resource management.</p>
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="feature-card p-4 h-100 bg-white text-dark rounded">
                                <i class="fas fa-chart-line fa-2x mb-3 text-primary"></i>
                                <h4>Cost Reduction</h4>
                                <p>Companies outsource to contain/reduce costs associated with normal transactional and administrative labor.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="feature-card p-4 h-100 bg-white text-dark rounded">
                                <i class="fas fa-bullseye fa-2x mb-3 text-primary"></i>
                                <h4>Focus on Core</h4>
                                <p>Corporations outsource all non-mission critical elements of operations to focus on core competencies.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-card p-4 h-100 bg-white text-dark rounded">
                                <i class="fas fa-globe fa-2x mb-3 text-primary"></i>
                                <h4>Global Trend</h4>
                                <p>Leading overseas MNCs outsource operations with a purpose to reduce cost and increase quality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Opportunity Section -->
    <section id="opportunity" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">The Elite Corporate Advantage</h2>
            <p class="text-center mb-5 lead">Why our franchise model stands out in the recruitment industry</p>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h4 class="card-title">Proven Business Model</h4>
                            <p class="card-text">Leverage our decade of expertise and successful franchise network to build your own profitable business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <h4 class="card-title">Global Network</h4>
                            <p class="card-text">Access international clients and opportunities through our established global presence and partnerships.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h4 class="card-title">Comprehensive Training</h4>
                            <p class="card-text">Receive complete training and ongoing support to ensure your franchise's success from day one.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <h4 class="card-title">Low Risk Model</h4>
                            <p class="card-text">Start with minimal investment and enjoy high returns through our optimized business framework.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="card-title">Client Access</h4>
                            <p class="card-text">Service existing and new clients acquired by our Head Office with immediate revenue potential.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <h4 class="card-title">Branded Network</h4>
                            <p class="card-text">Join an established branded network with reputation and credibility in the recruitment industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Benefits for Franchise Partners</h2>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="mb-4">Financial Benefits</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Service</th>
                                            <th>Franchisee Share</th>
                                            <th>Franchisor Share</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Executive Search</td>
                                            <td>70%</td>
                                            <td>30%</td>
                                        </tr>
                                        <tr>
                                            <td>CXO Hiring</td>
                                            <td>75%</td>
                                            <td>25%</td>
                                        </tr>
                                        <tr>
                                            <td>Turnkey Recruitment</td>
                                            <td>60%</td>
                                            <td>40%</td>
                                        </tr>
                                        <tr>
                                            <td>Interim Management</td>
                                            <td>75%</td>
                                            <td>25%</td>
                                        </tr>
                                        <tr>
                                            <td>HR Consulting</td>
                                            <td>50%</td>
                                            <td>50%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="mb-4">Operational Benefits</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Access to our proprietary recruitment technology and databases</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Marketing support and brand collateral</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Ongoing training and professional development</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Dedicated account manager for support</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Regular business performance reviews</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Access to our network of industry contacts</span>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Participation in national conferences and events</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Investment Details</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        <div class="col-md-6" data-aos="fade-up">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center p-5">
                                    <h3 class="text-primary mb-4">Metropolitan Cities</h3>
                                    <h4 class="display-4 fw-bold text-dark mb-4">₹2 Lakhs</h4>
                                    <p class="mb-4">Non-refundable deposit for operational purposes</p>
                                    <ul class="list-unstyled text-start">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Job Portal access included</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Technology setup</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Initial marketing support</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Comprehensive training program</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body text-center p-5">
                                    <h3 class="text-primary mb-4">Non-Metropolitan Areas</h3>
                                    <h4 class="display-4 fw-bold text-dark mb-4">₹1 Lakh</h4>
                                    <p class="mb-4">Non-refundable deposit plus Job Portal and Technology costs</p>
                                    <ul class="list-unstyled text-start">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Same benefits as metro cities</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Local market support</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Flexible infrastructure options</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Customized growth plans</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Our Franchise Process</h2>
            <p class="text-center mb-5">Simple steps to start your recruitment franchise business</p>
            
            <div class="timeline">
                <div class="timeline-item left" data-aos="fade-right">
                    <div class="timeline-content">
                        <h4>Initial Inquiry</h4>
                        <p>Submit your application through our website or contact our franchise team directly to express your interest.</p>
                    </div>
                </div>
                <div class="timeline-item right" data-aos="fade-left">
                    <div class="timeline-content">
                        <h4>Discovery Call</h4>
                        <p>Our franchise manager will contact you to discuss the opportunity, your background, and answer initial questions.</p>
                    </div>
                </div>
                <div class="timeline-item left" data-aos="fade-right">
                    <div class="timeline-content">
                        <h4>Franchise Disclosure</h4>
                        <p>We'll provide detailed information about the franchise model, investment requirements, and support structure.</p>
                    </div>
                </div>
                <div class="timeline-item right" data-aos="fade-left">
                    <div class="timeline-content">
                        <h4>Market Evaluation</h4>
                        <p>Together we'll assess your local market potential and territory availability.</p>
                    </div>
                </div>
                <div class="timeline-item left" data-aos="fade-right">
                    <div class="timeline-content">
                        <h4>Agreement Signing</h4>
                        <p>Once approved, you'll sign the franchise agreement and make your initial investment.</p>
                    </div>
                </div>
                <div class="timeline-item right" data-aos="fade-left">
                    <div class="timeline-content">
                        <h4>Training & Launch</h4>
                        <p>Complete our comprehensive training program and launch your franchise business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">What Our Franchise Partners Say</h2>
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0" data-aos="zoom-in">
                    <div class="testimonial-card h-100">
                        <p>"Joining Elite Corporate Solutions as a franchise partner was the best business decision I've made. The training and ongoing support have been exceptional, and I was profitable within the first six months."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Rajesh Mehta">
                            <div>
                                <h5 class="mb-0">Rajesh Mehta</h5>
                                <small class="text-muted">Delhi Franchise</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="testimonial-card h-100">
                        <p>"The recruitment industry is booming, and with Elite's brand reputation and systems, I've been able to build a sustainable business that gives me both financial freedom and professional satisfaction."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Priya Sharma">
                            <div>
                                <h5 class="mb-0">Priya Sharma</h5>
                                <small class="text-muted">Bangalore Franchise</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="testimonial-card h-100">
                        <p>"What impressed me most was the transparency in operations and the fair revenue sharing model. The corporate team truly treats franchisees as partners, not just another number."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Amit Patel">
                            <div>
                                <h5 class="mb-0">Amit Patel</h5>
                                <small class="text-muted">Hyderabad Franchise</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Frequently Asked Questions</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What is the typical timeline from inquiry to franchise launch?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The entire process typically takes 4-6 weeks from initial inquiry to launch. This includes the discovery process, agreement signing, initial training, and setting up your operations. We work efficiently to get you started as quickly as possible while ensuring you're fully prepared for success.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up" data-aos-delay="50">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do I need prior recruitment experience to become a franchisee?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    While prior experience in recruitment or HR is beneficial, it's not mandatory. Our comprehensive training program covers all aspects of the business, and many of our most successful franchise partners came from different industries. What's more important is your entrepreneurial spirit, people skills, and willingness to learn.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What ongoing fees or royalties are involved?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our model is transparent with no hidden fees. After your initial investment, we operate on a revenue-sharing basis as outlined in our agreement (typically 70-75% for franchisees on most services). There are no additional royalty fees or mandatory monthly payments beyond this structure.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-3 shadow-sm" data-aos="fade-up" data-aos-delay="150">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What kind of marketing support do you provide?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We provide comprehensive marketing support including branded collateral, digital marketing templates, access to our CRM system, and guidance on local marketing strategies. Our corporate marketing team also runs national campaigns that generate leads for all franchise partners. Additionally, we offer training on effective recruitment marketing techniques.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What is the typical ROI timeframe for this investment?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    While results vary based on individual effort and market conditions, most of our franchise partners recover their initial investment within 6-12 months. After that, the business typically generates strong ongoing profits. Our most successful franchisees often see a return of 3-5x their initial investment within the first 2-3 years.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax Section 2 -->
    <section class="parallax" style="background-image: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
        <div class="parallax-overlay"></div>
        <div class="container parallax-content">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4">Ready to Start Your Entrepreneurial Journey?</h2>
                    <p class="lead mb-5">Join our network of successful franchise partners and build a business that gives you both financial rewards and professional fulfillment.</p>
                    <a href="#contact" class="btn btn-primary btn-lg px-5">Apply Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Start Your Franchise Journey Today</h2>
            <p class="text-center mb-5">Fill out the form below and our franchise team will contact you within 24 hours</p>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <form id="franchiseForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Full Name*</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email Address*</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone Number*</label>
                                        <input type="tel" class="form-control" id="phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">City*</label>
                                        <input type="text" class="form-control" id="city" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="experience" class="form-label">Briefly describe your background/experience</label>
                                        <textarea class="form-control" id="experience" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="investment" class="form-label">Investment Capacity*</label>
                                        <select class="form-select" id="investment" required>
                                            <option value="" selected disabled>Select investment range</option>
                                            <option value="1-2L">₹1-2 Lakhs</option>
                                            <option value="2-5L">₹2-5 Lakhs</option>
                                            <option value="5L+">Above ₹5 Lakhs</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="timeline" class="form-label">Expected Start Timeline*</label>
                                        <select class="form-select" id="timeline" required>
                                            <option value="" selected disabled>Select timeline</option>
                                            <option value="1month">Within 1 month</option>
                                            <option value="3months">1-3 months</option>
                                            <option value="6months">3-6 months</option>
                                            <option value="6months+">6+ months</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="agree" required>
                                            <label class="form-check-label" for="agree">
                                                I agree to receive information and updates about Elite Corporate Solutions franchise opportunities
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg px-5">Submit Application</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="p-4 bg-white rounded shadow-sm">
                        <i class="fas fa-phone-alt fa-2x text-primary mb-3"></i>
                        <h4 class="h5">Call Us</h4>
                        <p class="mb-0"><a href="tel:+919870364340" class="text-dark">+91 98703 64340</a></p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="p-4 bg-white rounded shadow-sm">
                        <i class="fas fa-envelope fa-2x text-primary mb-3"></i>
                        <h4 class="h5">Email Us</h4>
                        <p class="mb-0"><a href="mailto:franchise@elitecorporatesolutions.com" class="text-dark">franchise@elitecorporatesolutions.com</a></p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="p-4 bg-white rounded shadow-sm">
                        <i class="fas fa-map-marker-alt fa-2x text-primary mb-3"></i>
                        <h4 class="h5">Visit Us</h4>
                        <p class="mb-0">Mumbai, India</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <?php include "include/footer.php"?>



    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Initialize AOS animation library
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Back to top button
        window.addEventListener('scroll', function() {
            var backToTop = document.querySelector('.back-to-top');
            if (window.pageYOffset > 300) {
                backToTop.style.display = 'block';
            } else {
                backToTop.style.display = 'none';
            }
        });
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Animate stats counter
        function animateStats() {
            const counters = document.querySelectorAll('.stats-number');
            const speed = 200;
            
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;
                const increment = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(animateStats, 1);
                } else {
                    counter.innerText = target;
                }
            });
        }
        
        // Trigger stats animation when section is in view
        const statsSection = document.querySelector('.bg-light');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateStats();
                    observer.unobserve(entry.target);
                }
            });
        }, {threshold: 0.5});
        
        observer.observe(statsSection);
        
        // Form submission
        document.getElementById('franchiseForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Here you would typically send the form data to your server
            // For demo purposes, we'll just show an alert
            alert('Thank you for your application! Our franchise team will contact you within 24 hours.');
            this.reset();
        });
    </script>
</body>

</html>