<?php
// Start session for form messages
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title>[translate:Бизнес-услуги Россия-Индия - Elite Corporate Solutions]</title>
    <meta name="description" content="[translate:Elite Corporate Solutions предлагает специализированные бизнес-услуги Россия-Индия, связывая таланты и возможности между обеими странами. Изучите наши услуги по рекрутингу, визовой поддержке и культурному обучению.]">
    <meta name="keywords" content="[translate:бизнес Россия-Индия, международный рекрутинг, рекрутинг медперсонала Россия, ИТ-специалисты Индия, инженерные таланты, визовая поддержка, культурное обучение, бизнес-консалтинг]">
    <meta name="author" content="Elite Corporate Solutions">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="[translate:Бизнес-услуги Россия-Индия - Elite Corporate Solutions]">
    <meta property="og:description" content="[translate:Соединяем таланты между Индией и Россией. Elite Corporate Solutions предлагает специализированный рекрутинг, визовую поддержку и услуги культурного обучения.]">
    <meta property="og:image" content="https://elitecorporatesolutions.com/images/russia-india-og-image.jpg">
    <meta property="og:url" content="https://elitecorporatesolutions.com/russia-india-services">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="[translate:Бизнес-услуги Россия-Индия - Elite Corporate Solutions]">
    <meta name="twitter:description" content="[translate:Соединяем таланты между Индией и Россией. Elite Corporate Solutions предлагает специализированный рекрутинг, визовую поддержку и услуги культурного обучения.]">
    <meta name="twitter:image" content="https://elitecorporatesolutions.com/images/russia-india-twitter-card.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://elitecorporatesolutions.com/russia-india-services">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16878629802"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
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
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-2VDKKW0ZFF');
    </script>

    <?php include 'include/assets.php'; ?>

    <!-- Professional Light Theme Hero Section CSS -->
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', 'Segoe UI', 'Roboto', sans-serif;
            background-color: #ffffff;
            color: #1f2937;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container { 
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 0 1.5rem; 
        }

        /* Modern Hero Section with Light Theme */
        .ecs-hero-section {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 50%, #e2e8f0 100%);
            min-height: 90vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 60px 0;
            overflow: hidden;
        }

        .ecs-hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(245, 158, 11, 0.05) 0%, transparent 50%);
            z-index: 1;
        }

        .ecs-hero-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="0.5" fill="rgba(59,130,246,0.08)"/></pattern></defs><rect x="0" y="0" width="100%" height="100%" fill="url(%23pattern)"/></svg>');
            opacity: 0.6;
            z-index: 2;
        }

        .ecs-hero-content {
            position: relative;
            z-index: 3;
            width: 100%;
        }

        .ecs-hero-grid {
            display: grid;
            grid-template-columns: 1fr 480px;
            gap: 4rem;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Left Content */
        .ecs-hero-text {
            animation: fadeInLeft 1s ease-out;
        }

        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .ecs-hero-title {
            font-size: 3.2rem;
            font-weight: 800;
            line-height: 1.1;
            color: #1e293b;
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
        }

        .ecs-hero-title .highlight {
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .ecs-hero-subtitle {
            font-size: 1.25rem;
            color: #64748b;
            margin-bottom: 2rem;
            line-height: 1.6;
            max-width: 90%;
        }

        .ecs-hero-features {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 2.5rem;
        }

        .ecs-feature-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .ecs-feature-icon {
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
            flex-shrink: 0;
        }

        .ecs-feature-text {
            font-size: 1rem;
            font-weight: 600;
            color: #374151;
        }

        .ecs-flag-container {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .ecs-flag-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.9);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .ecs-flag-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .ecs-flag-icon {
            width: 20px;
            height: 14px;
            border-radius: 3px;
            object-fit: cover;
        }

        .ecs-flag-text {
            font-size: 0.9rem;
            font-weight: 600;
            color: #374151;
        }

        /* Right Side Form Container */
        .ecs-form-container {
            animation: fadeInRight 1s ease-out 0.3s both;
        }

        .ecs-form-wrapper {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Tab Navigation */
        .ecs-tab-nav {
            display: flex;
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
        }

        .ecs-tab-button {
            flex: 1;
            padding: 1rem;
            background: none;
            border: none;
            font-size: 1rem;
            font-weight: 600;
            color: #64748b;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            text-align: center;
        }

        .ecs-tab-button.active {
            color: #3b82f6;
            background: white;
        }

        .ecs-tab-button.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
        }

        .ecs-tab-button:hover:not(.active) {
            color: #374151;
            background: rgba(255, 255, 255, 0.5);
        }

        /* Tab Content */
        .ecs-tab-content {
            display: none;
            padding: 2rem;
        }

        .ecs-tab-content.active {
            display: block;
        }

        .ecs-form-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        .ecs-form-subtitle {
            color: #64748b;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 0.95rem;
        }

        .ecs-form-group {
            margin-bottom: 1.5rem;
        }

        .ecs-form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .ecs-form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 0.95rem;
            background: #ffffff;
            transition: all 0.3s ease;
            outline: none;
        }

        .ecs-form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
            transform: translateY(-1px);
        }

        .ecs-form-control::placeholder {
            color: #9ca3af;
        }

        .ecs-form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.75rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }

        .ecs-form-textarea {
            resize: vertical;
            min-height: 100px;
        }

        .ecs-form-file {
            border: 2px dashed #d1d5db;
            background: #f9fafb;
            padding: 1rem;
            text-align: center;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .ecs-form-file:hover {
            border-color: #3b82f6;
            background: #eff6ff;
        }

        .ecs-form-file input {
            display: none;
        }

        .ecs-file-text {
            color: #64748b;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        .ecs-form-submit {
            width: 100%;
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-top: 1rem;
        }

        .ecs-form-submit:hover {
            background: linear-gradient(135deg, #1d4ed8 0%, #1e3a8a 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
        }

        .ecs-form-submit:active {
            transform: translateY(0);
        }

        .ecs-form-note {
            text-align: center;
            color: #64748b;
            font-size: 0.85rem;
            margin-top: 1rem;
            line-height: 1.4;
        }

        /* Statistics Section */
        .ecs-stats-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            color: white;
        }

        .ecs-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .ecs-stat-card {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .ecs-stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.1);
        }

        .ecs-stat-icon {
            font-size: 2.5rem;
            color: #f59e0b;
            margin-bottom: 1rem;
        }

        .ecs-stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 0.5rem;
        }

        .ecs-stat-label {
            font-size: 0.95rem;
            color: #cbd5e1;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Keep existing sections from attached_file:1 with minor adjustments */
        .services-grid {
            padding: 80px 0;
            background-color: #f8fafc;
        }

        .theme-title-one {
            text-align: center;
            margin-bottom: 3rem;
        }

        .theme-title-one h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 1rem;
        }

        .theme-title-one p {
            color: #64748b;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .service-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
            border: 1px solid #f1f5f9;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            margin: 30px auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            border-radius: 50%;
            color: #fff;
            font-size: 2rem;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            transform: rotateY(180deg);
        }

        .service-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #1e293b;
        }

        .service-description {
            padding: 0 25px 25px;
            color: #64748b;
        }

        .service-link {
            display: inline-block;
            padding: 10px 25px;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            color: #fff;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 15px;
            transition: all 0.3s ease;
        }

        .service-link:hover {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: #fff;
            transform: translateY(-2px);
        }

        /* Other sections - keep existing styles from attached_file:1 but update colors to match light theme */
        .why-choose-section { padding: 80px 0; background: #fff; }
        .testimonials-section { padding: 80px 0; background: #f8fafc; }
        .cta-section { padding: 80px 0; background: #fff; }

        .why-choose-image { border-radius: 15px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        .why-choose-image img { width: 100%; height: auto; transition: all 0.5s ease; }
        .why-choose-image:hover img { transform: scale(1.05); }

        .benefit-item { display: flex; align-items: flex-start; margin-bottom: 25px; }
        .benefit-icon { width: 50px; height: 50px; min-width: 50px; background: linear-gradient(135deg, #3b82f6, #1e40af); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 1.2rem; margin-right: 20px; transition: all 0.3s ease; }
        .benefit-item:hover .benefit-icon { background: linear-gradient(135deg, #f59e0b, #d97706); transform: rotateY(180deg); }
        .benefit-content h4 { font-size: 1.2rem; font-weight: 700; margin-bottom: 10px; color: #1e293b; }
        .benefit-content p { color: #64748b; line-height: 1.6; }

        .testimonial-card { background: #fff; border-radius: 15px; padding: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin: 15px; position: relative; border: 1px solid #f1f5f9; }
        .testimonial-card:before { content: '\201C'; font-size: 4rem; font-family: Georgia, serif; color: rgba(59, 130, 246, 0.1); position: absolute; top: 15px; left: 20px; line-height: 1; }
        .testimonial-content { position: relative; z-index: 1; font-style: italic; color: #64748b; margin-bottom: 20px; }
        .testimonial-rating { color: #f59e0b; font-size: 1.1rem; margin-bottom: 15px; }
        .testimonial-author { display: flex; align-items: center; }
        .author-image { width: 50px; height: 50px; border-radius: 50%; overflow: hidden; margin-right: 15px; border: 3px solid #3b82f6; }
        .author-image img { width: 100%; height: 100%; object-fit: cover; }
        .author-info h5 { font-size: 1rem; font-weight: 700; margin-bottom: 5px; color: #1e293b; }
        .author-info p { font-size: 0.9rem; color: #64748b; }

        .contact-form { background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border: 1px solid #f1f5f9; }
        .contact-info { background: linear-gradient(135deg, #1e293b, #334155); padding: 30px; border-radius: 15px; color: #fff; height: 100%; }
        .contact-info h3 { font-size: 1.5rem; font-weight: 700; margin-bottom: 25px; color: #fff; position: relative; padding-bottom: 15px; }
        .contact-info h3:after { content: ''; position: absolute; bottom: 0; left: 0; width: 50px; height: 3px; background: #f59e0b; }
        .contact-item { display: flex; align-items: flex-start; margin-bottom: 20px; }
        .contact-icon { width: 40px; height: 40px; min-width: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1rem; margin-right: 15px; }
        .contact-text { font-size: 0.95rem; line-height: 1.6; }
        .social-links { margin-top: 25px; }
        .social-links a { display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; color: #fff; font-size: 1rem; margin-right: 10px; transition: all 0.3s ease; }
        .social-links a:hover { background: #f59e0b; transform: translateY(-3px); }

        .form-group { margin-bottom: 20px; }
        .form-control { height: 45px; border-radius: 8px; border: 2px solid #e5e7eb; padding: 10px 15px; font-size: 0.95rem; transition: all 0.3s ease; }
        .form-control:focus { border-color: #3b82f6; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1); }
        textarea.form-control { height: 120px; }
        .submit-btn { background: linear-gradient(135deg, #3b82f6, #1e40af); color: #fff; border: none; padding: 12px 30px; font-size: 1rem; font-weight: 700; border-radius: 8px; cursor: pointer; transition: all 0.3s ease; text-transform: uppercase; letter-spacing: 1px; }
        .submit-btn:hover { background: linear-gradient(135deg, #f59e0b, #d97706); }

        .captcha-container { display: flex; align-items: center; margin-bottom: 15px; }
        .captcha-image { height: 45px; margin-right: 15px; border-radius: 5px; border: 2px solid #e5e7eb; }
        .captcha-container .form-control { flex: 1; }

        .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 8px; }
        .alert-success { color: #065f46; background-color: #d1fae5; border-color: #a7f3d0; }
        .alert-danger { color: #991b1b; background-color: #fee2e2; border-color: #fca5a5; }

        /* Mobile Responsive */
        @media (max-width: 1024px) {
            .ecs-hero-grid {
                grid-template-columns: 1fr;
                gap: 3rem;
                text-align: center;
            }
            
            .ecs-form-container {
                max-width: 500px;
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .ecs-hero-title { font-size: 2.5rem; }
            .ecs-hero-subtitle { font-size: 1.1rem; }
            .ecs-form-row { grid-template-columns: 1fr; gap: 0; }
            .ecs-hero-features { justify-content: center; }
            .ecs-flag-container { justify-content: center; flex-wrap: wrap; }
            .ecs-stats-grid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 480px) {
            .ecs-hero-title { font-size: 2rem; }
            .ecs-form-wrapper { margin: 0 1rem; }
            .ecs-stats-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
    <div class="main-page-wrapper">
        <?php include_once 'include/header.php'; ?>

        <!-- Professional Hero Section with Tabs Form -->
        <section class="ecs-hero-section">
            <div class="ecs-hero-bg"></div>
            <div class="ecs-hero-pattern"></div>
            
            <div class="container">
                <div class="ecs-hero-content">
                    <div class="ecs-hero-grid">
                        <!-- Left Content -->
                        <div class="ecs-hero-text">
                            <h1 class="ecs-hero-title">
                                [translate:Объединяем] <span class="highlight">[translate:элитные таланты]</span> [translate:между Индией и Россией]
                            </h1>
                            
                            <p class="ecs-hero-subtitle">
                                [translate:Премиальная платформа для рекрутинга, соединяющая лучших индийских специалистов с ведущими российскими компаниями. Быстрое, надежное и профессионально управляемое трудоустройство во всех отраслях.]
                            </p>

                            <div class="ecs-flag-container">
                                <div class="ecs-flag-item">
                                    <img src="https://flagcdn.com/w40/in.png" alt="India Flag" class="ecs-flag-icon">
                                    <span class="ecs-flag-text">[translate:Индия]</span>
                                </div>
                                <div class="ecs-flag-item">
                                    <img src="https://flagcdn.com/w40/ru.png" alt="Russia Flag" class="ecs-flag-icon">
                                    <span class="ecs-flag-text">[translate:Россия]</span>
                                </div>
                            </div>

                            <div class="ecs-hero-features">
                                <div class="ecs-feature-item">
                                    <div class="ecs-feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="ecs-feature-text">[translate:Визовая поддержка]</div>
                                </div>
                                
                                <div class="ecs-feature-item">
                                    <div class="ecs-feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="ecs-feature-text">[translate:Культурное обучение]</div>
                                </div>
                                
                                <div class="ecs-feature-item">
                                    <div class="ecs-feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="ecs-feature-text">[translate:Поддержка 24/7]</div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side Form Container -->
                        <div class="ecs-form-container">
                            <div class="ecs-form-wrapper">
                                <!-- Tab Navigation -->
                                <div class="ecs-tab-nav">
                                    <button class="ecs-tab-button active" data-tab="employer">
                                        <i class="fa fa-building" style="margin-right: 8px;"></i>
                                        [translate:Для работодателей]
                                    </button>
                                    <button class="ecs-tab-button" data-tab="jobseeker">
                                        <i class="fa fa-user" style="margin-right: 8px;"></i>
                                        [translate:Для соискателей]
                                    </button>
                                </div>

                                <!-- Employer Form Tab -->
                                <div class="ecs-tab-content active" id="employer-tab">
                                    <h3 class="ecs-form-title">[translate:Найдите лучшие таланты]</h3>
                                    <p class="ecs-form-subtitle">[translate:Разместите свои требования и получите подходящих кандидатов]</p>
                                    
                                    <form action="backend_form.php" method="post">
                                        <input type="hidden" name="form_type" value="employer">
                                        
                                        <div class="ecs-form-row">
                                            <input type="text" class="ecs-form-control" name="company" placeholder="[translate:Название компании *]" required>
                                            <input type="text" class="ecs-form-control" name="contact" placeholder="[translate:Контактное лицо *]" required>
                                        </div>
                                        
                                        <div class="ecs-form-row">
                                            <input type="tel" class="ecs-form-control" name="phone" placeholder="[translate:Номер телефона *]" required>
                                            <input type="email" class="ecs-form-control" name="email" placeholder="[translate:Email адрес *]" required>
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <select class="ecs-form-control ecs-form-select" name="industry" required>
                                                <option value="">[translate:Выберите отрасль *]</option>
                                                <option>[translate:Здравоохранение и медицина]</option>
                                                <option>[translate:Информационные технологии]</option>
                                                <option>[translate:Инженерия и строительство]</option>
                                                <option>[translate:Производство]</option>
                                                <option>[translate:Энергетика и нефтегаз]</option>
                                                <option>[translate:Финансы и банковское дело]</option>
                                                <option>[translate:Другое]</option>
                                            </select>
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <select class="ecs-form-control ecs-form-select" name="positions" required>
                                                <option value="">[translate:Количество позиций *]</option>
                                                <option>[translate:1-5 специалистов]</option>
                                                <option>[translate:6-15 специалистов]</option>
                                                <option>[translate:16-30 специалистов]</option>
                                                <option>[translate:31+ специалистов]</option>
                                            </select>
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <textarea class="ecs-form-control ecs-form-textarea" name="requirements" placeholder="[translate:Требования к работе, навыки и квалификация *]" required></textarea>
                                        </div>
                                        
                                        <button type="submit" class="ecs-form-submit">
                                            <i class="fa fa-paper-plane" style="margin-right: 8px;"></i>
                                            [translate:Получить кандидатов]
                                        </button>
                                        
                                        <p class="ecs-form-note">
                                            [translate:Мы свяжемся с вами в течение 24 часов с подходящими профилями кандидатов]
                                        </p>
                                    </form>
                                </div>

                                <!-- Job Seeker Form Tab -->
                                <div class="ecs-tab-content" id="jobseeker-tab">
                                    <h3 class="ecs-form-title">[translate:Найдите работу мечты]</h3>
                                    <p class="ecs-form-subtitle">[translate:Подайте заявку на интересные возможности в России]</p>
                                    
                                    <form action="backend_form.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="form_type" value="jobseeker">
                                        
                                        <div class="ecs-form-row">
                                            <input type="text" class="ecs-form-control" name="name" placeholder="[translate:Полное имя *]" required>
                                            <input type="email" class="ecs-form-control" name="email" placeholder="[translate:Email адрес *]" required>
                                        </div>
                                        
                                        <div class="ecs-form-row">
                                            <input type="tel" class="ecs-form-control" name="phone" placeholder="[translate:Номер телефона *]" required>
                                            <input type="text" class="ecs-form-control" name="experience" placeholder="[translate:Опыт работы (годы)]">
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <select class="ecs-form-control ecs-form-select" name="category" required>
                                                <option value="">[translate:Категория работы *]</option>
                                                <option>[translate:Врач/медицинский специалист]</option>
                                                <option>[translate:Медсестра/помощник здравоохранения]</option>
                                                <option>[translate:Инженер-программист/разработчик]</option>
                                                <option>[translate:Специалист по данным/аналитик]</option>
                                                <option>[translate:Инженер-механик]</option>
                                                <option>[translate:Инженер-строитель]</option>
                                                <option>[translate:Бизнес/менеджмент]</option>
                                                <option>[translate:Финансовый специалист]</option>
                                                <option>[translate:Другое]</option>
                                            </select>
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <textarea class="ecs-form-control ecs-form-textarea" name="skills" placeholder="[translate:Ключевые навыки, квалификация и достижения]"></textarea>
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <div class="ecs-form-file" onclick="document.getElementById('resume').click()">
                                                <i class="fa fa-upload" style="font-size: 1.5rem; color: #3b82f6; margin-bottom: 8px;"></i>
                                                <div>[translate:Нажмите, чтобы загрузить ваше CV/Резюме]</div>
                                                <div class="ecs-file-text">[translate:PDF, DOC, DOCX (Максимум 5МБ)]</div>
                                                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx">
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="ecs-form-submit">
                                            <i class="fa fa-rocket" style="margin-right: 8px;"></i>
                                            [translate:Подать заявку сейчас]
                                        </button>
                                        
                                        <p class="ecs-form-note">
                                            [translate:Только отобранные кандидаты будут связываться нашей командой по подбору персонала]
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      

        <!-- Services Grid Section -->
        <section id="services" class="services-grid">
            <div class="container">
                <div class="theme-title-one">
                    <h2>[translate:Наши услуги Россия-Индия]</h2>
                    <p>[translate:Комплексные решения, адаптированные для успешного кросс-граничного бизнеса]</p>
                </div>
                <div class="row mt-5">
                    <!-- Service 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon">
                                <i class="fa fa-heartbeat"></i>
                            </div>
                            <h3 class="service-title">[translate:Рекрутинг в здравоохранении]</h3>
                            <div class="service-description">
                                <p>[translate:Соединяем квалифицированных индийских медицинских специалистов с российскими медицинскими учреждениями. Мы занимаемся лицензированием, аккредитацией и культурной интеграцией.]</p>
                                <a href="#contact" class="service-link">[translate:Узнать больше]</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <h3 class="service-title">[translate:ИТ-специалисты]</h3>
                            <div class="service-description">
                                <p>[translate:Поиск лучших индийских ИТ-талантов для российских технологических компаний. Экспертиза в разработке программного обеспечения, кибербезопасности, науке о данных и новых технологиях.]</p>
                                <a href="#contact" class="service-link">[translate:Узнать больше]</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h3 class="service-title">[translate:Инженерные таланты]</h3>
                            <div class="service-description">
                                <p>[translate:Специализированный рекрутинг индийских инженеров для российских проектов в области инфраструктуры, производства и энергетики. Техническая экспертиза с кросс-культурной компетентностью.]</p>
                                <a href="#contact" class="service-link">[translate:Узнать больше]</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <h3 class="service-title">[translate:Бизнес-консалтинг]</h3>
                            <div class="service-description">
                                <p>[translate:Стратегическое руководство для компаний, расширяющихся между Индией и Россией. Стратегии выхода на рынок, соблюдение нормативных требований и поддержка развития бизнеса.]</p>
                                <a href="#contact" class="service-link">[translate:Узнать больше]</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon">
                                <i class="fa fa-passport"></i>
                            </div>
                            <h3 class="service-title">[translate:Визовая поддержка]</h3>
                            <div class="service-description">
                                <p>[translate:Комплексная обработка виз и рабочих разрешений для специалистов, переезжающих между Индией и Россией. Экспертное руководство через сложные иммиграционные требования.]</p>
                                <a href="#contact" class="service-link">[translate:Узнать больше]</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h3 class="service-title">[translate:Культурное обучение]</h3>
                            <div class="service-description">
                                <p>[translate:Комплексные программы культурной интеграции для специалистов, переезжающих между Индией и Россией. Языковое обучение, культурный этикет и практическая поддержка адаптации.]</p>
                                <a href="#contact" class="service-link">[translate:Узнать больше]</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="why-choose-section">
            <div class="container">
                <div class="theme-title-one">
                    <h2>[translate:Почему выбирают нас]</h2>
                    <p>[translate:Ваш надежный партнер для успешного бизнеса Россия-Индия]</p>
                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="why-choose-image">
                            <img src="images/about-2.jpg" alt="Russia-India Business Meeting" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="benefit-list">
                            <!-- Benefit 1 -->
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>[translate:Экспертное знание рынка]</h4>
                                    <p>[translate:Наша команда обладает глубоким пониманием российской и индийской бизнес-сред, нормативной базы и культурных нюансов, которые влияют на успешные трансграничные операции.]</p>
                                </div>
                            </div>
                            <!-- Benefit 2 -->
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>[translate:Бесшовный процесс]</h4>
                                    <p>[translate:Мы обрабатываем каждый аспект мобильности талантов между Россией и Индией, от первоначального рекрутинга до переезда, документооборота и культурной интеграции.]</p>
                                </div>
                            </div>
                            <!-- Benefit 3 -->
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>[translate:Культурный мост]</h4>
                                    <p>[translate:Наша бикультурная команда способствует плавной коммуникации и пониманию между российскими работодателями и индийскими талантами, минимизируя недопонимания и максимизируя продуктивность.]</p>
                                </div>
                            </div>
                            <!-- Benefit 4 -->
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>[translate:Юридическая поддержка]</h4>
                                    <p>[translate:Мы обеспечиваем полное соблюдение российского и индийского законодательства в области трудоустройства, иммиграции, налогообложения и профессионального лицензирования.]</p>
                                </div>
                            </div>
                            <!-- Benefit 5 -->
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>[translate:Круглосуточная связь]</h4>
                                    <p>[translate:Наша специализированная служба поддержки доступна круглосуточно для решения любых вопросов как от работодателей, так и от кандидатов, охватывая множественные часовые пояса.]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section">
            <div class="container">
                <div class="theme-title-one">
                    <h2>[translate:Отзывы клиентов]</h2>
                    <p>[translate:Что наши российские партнеры говорят о наших услугах]</p>
                </div>
                <div class="row mt-5">
                    <!-- Testimonial 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"[translate:Elite Corporate Solutions преобразила наш ИТ-отдел, предоставив исключительные индийские таланты. Их понимание обеих культур сделало интеграцию бесшовной.]"</p>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="images/team/1.jpg" alt="Testimonial Author">
                                </div>
                                <div class="author-info">
                                    <h5>[translate:Михаил Петров]</h5>
                                    <p>[translate:ИТ-директор, TechRus Solutions]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"[translate:Медицинские специалисты, привлеченные Elite Corporate Solutions, значительно улучшили возможности нашей больницы. Их услуги визовой поддержки были особенно ценными.]"</p>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-alt"></i>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="images/team/2.jpg" alt="Testimonial Author">
                                </div>
                                <div class="author-info">
                                    <h5>[translate:Доктор Елена Сорокина]</h5>
                                    <p>[translate:Медицинский директор, Центральная больница Москвы]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"[translate:Инженерные таланты, предоставленные Elite Corporate Solutions, сыграли ключевую роль в успехе нашего энергетического проекта. Их программа культурного обучения обеспечила плавную интеграцию команды.]"</p>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="images/team/3.jpg" alt="Testimonial Author">
                                </div>
                                <div class="author-info">
                                    <h5>[translate:Алексей Иванов]</h5>
                                    <p>[translate:Директор проекта, RusEnergy Group]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call-to-Action Footer -->
        <section id="contact" class="cta-section">
            <div class="container">
                <div class="theme-title-one">
                    <h2>[translate:Свяжитесь с нами]</h2>
                    <p>[translate:Свяжитесь с нами, чтобы обсудить ваши бизнес-потребности Россия-Индия]</p>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <?php if(isset($_SESSION['success_message'])): ?>
                                <div class="alert alert-success">
                                    <?php echo $_SESSION['success_message']; ?>
                                    <?php unset($_SESSION['success_message']); ?>
                                </div>
                            <?php endif; ?>
                            <?php if(isset($_SESSION['error_message'])): ?>
                                <div class="alert alert-danger">
                                    <?php echo $_SESSION['error_message']; ?>
                                    <?php unset($_SESSION['error_message']); ?>
                                </div>
                            <?php endif; ?>
                            <form id="russia-india-contact-form" action="backend_form.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="[translate:Ваше имя]" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="[translate:Ваш телефон]" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="[translate:Ваш Email]" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="web" placeholder="[translate:Ваш веб-сайт (по желанию)]">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="service" required>
                                        <option value="" selected disabled>[translate:Выберите интересующую услугу]</option>
                                        <option value="Healthcare Recruitment">[translate:Рекрутинг в здравоохранении]</option>
                                        <option value="IT Professionals">[translate:ИТ-специалисты]</option>
                                        <option value="Engineering Talent">[translate:Инженерные таланты]</option>
                                        <option value="Business Consulting">[translate:Бизнес-консалтинг]</option>
                                        <option value="Visa Assistance">[translate:Визовая поддержка]</option>
                                        <option value="Cultural Training">[translate:Культурное обучение]</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="[translate:Ваше сообщение]" required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="captcha-container">
                                        <img src="captcha.php" alt="CAPTCHA Image" class="captcha-image">
                                        <input type="text" class="form-control" name="captcha" placeholder="[translate:Введите код CAPTCHA]" required>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="submit-btn">[translate:Отправить сообщение]</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-info">
                            <h3>[translate:Связаться с нами]</h3>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-text">
                                    <p>+91 9870364340</p>
                                    <p>+7 (495) 123-4567</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <p>info@elitecorporatesolutions.com</p>
                                    <p>russia@elitecorporatesolutions.com</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <p>A-83, Okhla Phase II, New Delhi – 110020, [translate:Индия]</p>
                                    <p>[translate:Московский офис]: [translate:Проспект Мира 101, Москва, Россия]</p>
                                </div>
                            </div>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once 'include/footer.php'; ?>

        <!-- Professional JavaScript -->
        <script>
            // Tab Functionality
            document.addEventListener('DOMContentLoaded', function() {
                const tabButtons = document.querySelectorAll('.ecs-tab-button');
                const tabContents = document.querySelectorAll('.ecs-tab-content');

                tabButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const targetTab = button.getAttribute('data-tab');

                        // Remove active class from all buttons and contents
                        tabButtons.forEach(btn => btn.classList.remove('active'));
                        tabContents.forEach(content => content.classList.remove('active'));

                        // Add active class to clicked button and corresponding content
                        button.classList.add('active');
                        document.getElementById(targetTab + '-tab').classList.add('active');
                    });
                });

                // Counter Animation
                function animateCounters() {
                    const counters = document.querySelectorAll('.ecs-stat-number');
                    
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-count'));
                        const increment = target / 50;
                        let current = 0;
                        
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                counter.textContent = target.toLocaleString();
                                clearInterval(timer);
                            } else {
                                counter.textContent = Math.floor(current).toLocaleString();
                            }
                        }, 30);
                    });
                }

                // Intersection Observer for animations
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            if (entry.target.classList.contains('ecs-stats-section')) {
                                animateCounters();
                            }
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.3 });

                const animateElements = document.querySelectorAll('.ecs-stats-section');
                animateElements.forEach(el => observer.observe(el));

                // File Upload Interaction
                const fileInput = document.getElementById('resume');
                if (fileInput) {
                    fileInput.addEventListener('change', function() {
                        const fileName = this.files[0]?.name;
                        const fileContainer = this.parentElement;
                        const fileText = fileContainer.querySelector('.ecs-file-text');
                        
                        if (fileName) {
                            fileText.textContent = `[translate:Выбран]: ${fileName}`;
                            fileContainer.style.borderColor = '#3b82f6';
                            fileContainer.style.background = '#eff6ff';
                        }
                    });
                }

                // Smooth scroll for anchor links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    });
                });

                // Form submission loading states
                const forms = document.querySelectorAll('form');
                forms.forEach(form => {
                    form.addEventListener('submit', function() {
                        const submitBtn = form.querySelector('button[type="submit"]');
                        if (submitBtn) {
                            const originalText = submitBtn.innerHTML;
                            submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> [translate:Отправка...]';
                            submitBtn.disabled = true;
                            
                            // Re-enable after 10 seconds in case of issues
                            setTimeout(() => {
                                submitBtn.innerHTML = originalText;
                                submitBtn.disabled = false;
                            }, 10000);
                        }
                    });
                });
            });
        </script>
    </div>
</body>

</html>
