<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title>Website Development Services - Elite Corporate Solutions</title>
    <meta name="description"
        content="Transform your online presence with Elite Corporate Solutions' Website Development services. Custom websites designed to boost your business growth.">
    <meta name="keywords"
        content="website development, web design, custom websites, responsive design, business websites, e-commerce, Elite Corporate Solutions">
    <meta name="author" content="Elite Corporate Solutions">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Website Development Services - Elite Corporate Solutions">
    <meta property="og:description"
        content="Discover our tailored Website Development services designed to enhance your online presence and drive business growth.">
    <meta property="og:image" content="https://elitecorporatesolutions.com/images/website-development-og-image.jpg">
    <meta property="og:url" content="https://elitecorporatesolutions.com/services/website-development">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Website Development Services - Elite Corporate Solutions">
    <meta name="twitter:description"
        content="Explore our Website Development services to boost your online presence and business growth.">
    <meta name="twitter:image"
        content="https://elitecorporatesolutions.com/images/website-development-twitter-card.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://elitecorporatesolutions.com/services/website-development">

    <?php include 'include/assets.php'; ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16878629802"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-16878629802');
    </script>

    <script>
        gtag('config', 'AW-16878629802/hZtJCKr48J4aEKrnrfA-', {
            'phone_conversion_number': '9870364340'
        });
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2VDKKW0ZFF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-2VDKKW0ZFF');
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
            --dark-color: #1e293b;
            --light-color: #f8fafc;
            --gradient: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: #334155;
            line-height: 1.6;
        }
        
        .hero-section {
            background: var(--gradient);
            color: white;
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') center/cover;
            opacity: 0.2;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .section-title {
            font-weight: 800;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary-color);
            border-radius: 2px;
        }
        
        .benefit-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            background: white;
        }
        
        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .benefit-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .process-step {
            position: relative;
            padding-left: 80px;
            margin-bottom: 2rem;
        }
        
        .process-number {
            position: absolute;
            left: 0;
            top: 0;
            width: 60px;
            height: 60px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .service-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            background: white;
            border-top: 4px solid var(--primary-color);
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .tech-stack-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-radius: 8px;
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .tech-stack-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .tech-icon {
            width: 50px;
            height: 50px;
            margin-right: 1rem;
            object-fit: contain;
        }
        
        .cta-section {
            background: var(--gradient);
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjEpIj48L3JlY3Q+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI3BhdHRlcm4pIj48L3JlY3Q+PC9zdmc+');
            opacity: 0.1;
            z-index: 0;
        }
        
        .cta-content {
            position: relative;
            z-index: 1;
        }
        
        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        .btn-outline-white {
            border: 2px solid white;
            color: white;
            background: transparent;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-outline-white:hover {
            background: white;
            color: var(--primary-color);
        }
        
        .testimonial-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary-color);
        }
        
        .feature-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            background: #e0e7ff;
            color: var(--primary-color);
            border-radius: 50px;
            font-weight: 600;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }
        
        .feature-badge i {
            margin-right: 0.5rem;
        }
        
        .portfolio-card {
            transition: all 0.3s ease;
        }
        
        .portfolio-card:hover {
            transform: translateY(-5px);
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 3rem 0;
            }
            
            .process-step {
                padding-left: 60px;
            }
            
            .process-number {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-page-wrapper">
        <?php include 'include/header.php'; ?>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center hero-content">
                    <div class="col-lg-6">
                        <h1 class="display-4 fw-bold mb-4">Transform Your Digital Presence</h1>
                        <p class="lead mb-4">We craft stunning, high-performance websites that drive results and elevate your brand in the digital landscape.</p>
                        <div class="d-flex gap-3">
                            <a href="#contact" class="btn btn-primary btn-lg">Get Started</a>
                            <a href="#services" class="btn btn-outline-white btn-lg">Our Services</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Website Development" class="img-fluid rounded-3 shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-3 col-6 text-center">
                        <h3 class="fw-bold display-5 text-primary">250+</h3>
                        <p class="text-muted">Websites Delivered</p>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <h3 class="fw-bold display-5 text-primary">98%</h3>
                        <p class="text-muted">Client Satisfaction</p>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <h3 class="fw-bold display-5 text-primary">40+</h3>
                        <p class="text-muted">Industry Awards</p>
                    </div>
                    <div class="col-md-3 col-6 text-center">
                        <h3 class="fw-bold display-5 text-primary">24/7</h3>
                        <p class="text-muted">Support Available</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="py-5">
            <div class="container">
                <h2 class="section-title text-center">Why Choose Our Web Development Services</h2>
                <p class="text-center mb-5 mx-auto" style="max-width: 700px;">We combine cutting-edge technology with creative design to deliver websites that not only look amazing but also perform exceptionally well across all devices.</p>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="benefit-card p-4">
                            <div class="benefit-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h4>Mobile-First Design</h4>
                            <p>Every website we build is optimized for mobile devices first, ensuring seamless user experience across all screen sizes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="benefit-card p-4">
                            <div class="benefit-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h4>Lightning Fast Speed</h4>
                            <p>We optimize every aspect of your website for maximum performance and loading speed to reduce bounce rates.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="benefit-card p-4">
                            <div class="benefit-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <h4>SEO Optimized</h4>
                            <p>Built with SEO best practices from the ground up to help your website rank higher in search engine results.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="benefit-card p-4">
                            <div class="benefit-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Robust Security</h4>
                            <p>Enterprise-grade security measures to protect your website and your customers' data from threats.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="benefit-card p-4">
                            <div class="benefit-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4>Conversion Focused</h4>
                            <p>Strategically designed to convert visitors into customers with clear calls-to-action and intuitive navigation.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="benefit-card p-4">
                            <div class="benefit-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h4>Ongoing Support</h4>
                            <p>Comprehensive maintenance and support packages to keep your website running smoothly at all times.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Process Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center">Our Proven Development Process</h2>
                <p class="text-center mb-5 mx-auto" style="max-width: 700px;">We follow a meticulous 7-step process to ensure your website meets your business objectives and delivers exceptional user experience.</p>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="process-step">
                            <div class="process-number">1</div>
                            <h4>Discovery & Strategy</h4>
                            <p>We begin by understanding your business goals, target audience, and competitive landscape to create a comprehensive digital strategy.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="process-step">
                            <div class="process-number">2</div>
                            <h4>UX/UI Design</h4>
                            <p>Our designers create wireframes and prototypes focused on user experience, followed by stunning visual designs that reflect your brand.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="process-step">
                            <div class="process-number">3</div>
                            <h4>Development</h4>
                            <p>Our developers bring the designs to life using clean, efficient code and the latest web technologies to ensure optimal performance.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="process-step">
                            <div class="process-number">4</div>
                            <h4>Content Integration</h4>
                            <p>We carefully integrate and optimize all content, ensuring it's engaging, SEO-friendly, and perfectly aligned with your brand voice.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="process-step">
                            <div class="process-number">5</div>
                            <h4>Quality Assurance</h4>
                            <p>Rigorous testing across devices, browsers, and performance metrics to ensure flawless functionality and user experience.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="process-step">
                            <div class="process-number">6</div>
                            <h4>Launch & Deployment</h4>
                            <p>We handle all technical aspects of launching your website, including server configuration, DNS setup, and performance optimization.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mx-auto">
                        <div class="process-step">
                            <div class="process-number">7</div>
                            <h4>Ongoing Optimization</h4>
                            <p>Post-launch, we monitor performance and make data-driven improvements to continuously enhance your website's effectiveness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-5" id="services">
            <div class="container">
                <h2 class="section-title text-center">Our Comprehensive Web Solutions</h2>
                <p class="text-center mb-5 mx-auto" style="max-width: 700px;">From simple brochure websites to complex web applications, we offer a full spectrum of web development services tailored to your business needs.</p>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                                    <i class="fas fa-briefcase text-primary fs-3"></i>
                                </div>
                                <h4 class="mb-0">Corporate Websites</h4>
                            </div>
                            <p>Professional websites designed to establish your brand authority and communicate your value proposition effectively.</p>
                            <div class="mt-3">
                                <span class="feature-badge"><i class="fas fa-check"></i> Responsive Design</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> CMS Integration</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> SEO Ready</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Multi-language</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                                    <i class="fas fa-shopping-cart text-primary fs-3"></i>
                                </div>
                                <h4 class="mb-0">E-Commerce Solutions</h4>
                            </div>
                            <p>Powerful online stores with seamless shopping experiences, secure payments, and intuitive product management.</p>
                            <div class="mt-3">
                                <span class="feature-badge"><i class="fas fa-check"></i> Payment Gateways</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Inventory Management</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> User Accounts</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Checkout Optimization</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                                    <i class="fas fa-code text-primary fs-3"></i>
                                </div>
                                <h4 class="mb-0">Custom Web Apps</h4>
                            </div>
                            <p>Tailored web applications built to solve your unique business challenges and streamline operations.</p>
                            <div class="mt-3">
                                <span class="feature-badge"><i class="fas fa-check"></i> CRM Systems</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Booking Systems</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Client Portals</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> API Integrations</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                                    <i class="fas fa-pencil-ruler text-primary fs-3"></i>
                                </div>
                                <h4 class="mb-0">UI/UX Design</h4>
                            </div>
                            <p>Beautiful, intuitive interfaces designed to engage users and guide them seamlessly through your digital experience.</p>
                            <div class="mt-3">
                                <span class="feature-badge"><i class="fas fa-check"></i> Wireframing</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Prototyping</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> User Testing</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Design Systems</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                                    <i class="fas fa-search-dollar text-primary fs-3"></i>
                                </div>
                                <h4 class="mb-0">SEO Optimization</h4>
                            </div>
                            <p>Comprehensive on-page and technical SEO services to improve your search visibility and organic traffic.</p>
                            <div class="mt-3">
                                <span class="feature-badge"><i class="fas fa-check"></i> Keyword Research</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Content Optimization</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Technical SEO</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Performance Audit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                                    <i class="fas fa-tools text-primary fs-3"></i>
                                </div>
                                <h4 class="mb-0">Maintenance & Support</h4>
                            </div>
                            <p>Reliable ongoing support to keep your website secure, up-to-date, and performing at its best.</p>
                            <div class="mt-3">
                                <span class="feature-badge"><i class="fas fa-check"></i> Security Updates</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Content Updates</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> Performance Tuning</span>
                                <span class="feature-badge"><i class="fas fa-check"></i> 24/7 Monitoring</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center">Our Technology Stack</h2>
                <p class="text-center mb-5 mx-auto" style="max-width: 700px;">We leverage cutting-edge technologies and frameworks to build fast, secure, and scalable web solutions tailored to your requirements.</p>
                
                <div class="row g-4">
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="tech-icon">
                            <span>React</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue" class="tech-icon">
                            <span>Vue.js</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg" alt="Angular" class="tech-icon">
                            <span>Angular</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="tech-icon">
                            <span>Node.js</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="Laravel" class="tech-icon">
                            <span>Laravel</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" alt="WordPress" class="tech-icon">
                            <span>WordPress</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/shopify/shopify-original.svg" alt="Shopify" class="tech-icon">
                            <span>Shopify</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/magento/magento-original.svg" alt="Magento" class="tech-icon">
                            <span>Magento</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="MongoDB" class="tech-icon">
                            <span>MongoDB</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="tech-icon">
                            <span>MySQL</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original.svg" alt="AWS" class="tech-icon">
                            <span>AWS</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="tech-stack-item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker" class="tech-icon">
                            <span>Docker</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Showcase -->
        <section class="py-5">
            <div class="container">
                <h2 class="section-title text-center">Our Recent Web Projects</h2>
                <p class="text-center mb-5 mx-auto" style="max-width: 700px;">Explore some of our successful website development projects that have helped businesses achieve their digital goals.</p>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="E-Commerce Website" class="img-fluid rounded-3 mb-3">
                            <h4>Luxury Fashion E-Commerce</h4>
                            <p>A high-end fashion retailer with advanced product customization and AR try-on features.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Case Study</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card">
                            <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Corporate Website" class="img-fluid rounded-3 mb-3">
                            <h4>Global Corporate Website</h4>
                            <p>Multilingual corporate portal for a Fortune 500 company with investor relations section.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Case Study</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-card">
                            <img src="https://images.unsplash.com/photo-1581093450021-4a7360e9a3c1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Web Application" class="img-fluid rounded-3 mb-3">
                            <h4>Healthcare Management System</h4>
                            <p>Custom web application for patient records management and appointment scheduling.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">View Case Study</a>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="portfolio.html" class="btn btn-primary">View All Projects</a>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="section-title text-center">What Our Clients Say</h2>
                <p class="text-center mb-5 mx-auto" style="max-width: 700px;">Don't just take our word for it - hear from businesses that have transformed their online presence with our web development services.</p>
                
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Client" class="testimonial-avatar me-3">
                                <div>
                                    <h5 class="mb-0">Sarah Johnson</h5>
                                    <p class="text-muted mb-0">CEO, TechSolutions Inc.</p>
                                </div>
                            </div>
                            <div class="mb-3 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>"Elite Corporate Solutions completely transformed our online presence. Our new website has increased leads by 150% and significantly improved user engagement metrics."</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="testimonial-avatar me-3">
                                <div>
                                    <h5 class="mb-0">Michael Chen</h5>
                                    <p class="text-muted mb-0">Marketing Director, GlobalRetail</p>
                                </div>
                            </div>
                            <div class="mb-3 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>"The e-commerce platform they built for us has been game-changing. Conversion rates are up 80% and the backend management system saves us countless hours."</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-card">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Client" class="testimonial-avatar me-3">
                                <div>
                                    <h5 class="mb-0">David Rodriguez</h5>
                                    <p class="text-muted mb-0">Founder, HealthPlus</p>
                                </div>
                            </div>
                            <div class="mb-3 text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>"Their attention to detail and understanding of our complex requirements was impressive. The custom web application they developed has streamlined our operations dramatically."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-5">
            <div class="container">
                <h2 class="section-title text-center">Frequently Asked Questions</h2>
                <p class="text-center mb-5 mx-auto" style="max-width: 700px;">Get answers to common questions about our website development services and process.</p>
                
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How long does it take to develop a website?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The timeline depends on the complexity and features of your website. A basic brochure website typically takes 4-6 weeks, while more complex e-commerce sites or web applications can take 8-12 weeks or more. We'll provide a detailed timeline after our initial consultation.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What's included in your website development package?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our standard package includes custom design, responsive development, content integration, basic SEO setup, CMS integration, and training. Additional services like advanced SEO, copywriting, photography, and ongoing maintenance can be added as needed.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do you provide website hosting?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer premium hosting solutions optimized for performance and security. We can also help migrate your existing website to our servers or assist you in choosing and setting up third-party hosting if preferred.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can you redesign my existing website?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely! We specialize in website redesigns that modernize your look while improving functionality and user experience. We'll analyze your current site and recommend improvements that align with your business goals.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 rounded-3 overflow-hidden shadow-sm">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How do you ensure my website is secure?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We implement multiple security measures including SSL certificates, regular software updates, secure coding practices, firewall protection, and malware scanning. For e-commerce sites, we ensure PCI compliance and use tokenization for payment processing.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section" id="contact">
            <div class="container">
                <div class="row align-items-center cta-content">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h2 class="text-white mb-3">Ready to Build Your Dream Website?</h2>
                        <p class="text-white mb-4">Let's discuss how we can create a powerful digital presence for your business. Schedule a free consultation with our web development experts today.</p>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <a href="contact.html" class="btn btn-light btn-lg me-3">Get Free Quote</a>
                        <a href="tel:9870364340" class="btn btn-outline-white btn-lg">Call Now</a>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'include/footer.php'; ?>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>