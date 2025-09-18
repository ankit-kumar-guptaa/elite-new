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
    <title>Услуги бизнеса Россия-Индия - Elite Corporate Solutions</title>
    <meta name="description" content="Elite Corporate Solutions предлагает специализированные бизнес-услуги Россия-Индия, соединяя таланты и возможности между двумя странами. Изучите наши услуги по подбору персонала, визовой помощи и культурному обучению.">
    <meta name="keywords" content="бизнес Россия-Индия, международный рекрутинг, рекрутинг здравоохранения Россия, ИТ-специалисты Индия, инженерные таланты, визовая помощь, культурное обучение, бизнес-консалтинг">
    <meta name="author" content="Elite Corporate Solutions">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Услуги бизнеса Россия-Индия - Elite Corporate Solutions">
    <meta property="og:description" content="Соединяем таланты между Индией и Россией. Elite Corporate Solutions предлагает специализированные услуги по подбору персонала, визовой помощи и культурному обучению.">
    <meta property="og:image" content="https://elitecorporatesolutions.com/images/russia-india-og-image.jpg">
    <meta property="og:url" content="https://elitecorporatesolutions.com/russia-india-services">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Услуги бизнеса Россия-Индия - Elite Corporate Solutions">
    <meta name="twitter:description" content="Соединяем таланты между Индией и Россией. Elite Corporate Solutions предлагает специализированные услуги по подбору персонала, визовой помощи и культурному обучению.">
    <meta name="twitter:image" content="https://elitecorporatesolutions.com/images/russia-india-twitter-card.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://elitecorporatesolutions.com/russia-india-services">

    <!-- Google Scripts -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16878629802"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'AW-16878629802');
        gtag('config', 'AW-16878629802/hZtJCKr48J4aEKrnrfA-', {
            'phone_conversion_number': '9870364340'
        });
    </script>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2VDKKW0ZFF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-2VDKKW0ZFF');
    </script>

    <?php include 'include/assets.php'; ?>

    <!-- Compact Professional Russian Theme CSS -->
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

        /* Compact Hero Section - 60vh height */
        .ecs-hero-section {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 50%, #e2e8f0 100%);
            min-height: 60vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 40px 0;
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
            gap: 3rem;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

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
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.1;
            color: #1e293b;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .ecs-hero-title .highlight {
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .ecs-hero-subtitle {
            font-size: 1rem;
            color: #64748b;
            margin-bottom: 1.5rem;
            line-height: 1.6;
            max-width: 90%;
        }

        .ecs-hero-features {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .ecs-feature-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .ecs-feature-icon {
            width: 20px;
            height: 20px;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.7rem;
            flex-shrink: 0;
        }

        .ecs-feature-text {
            font-size: 0.9rem;
            font-weight: 600;
            color: #374151;
        }

        .ecs-flag-container {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .ecs-flag-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.9);
            padding: 0.4rem 0.8rem;
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
            width: 18px;
            height: 12px;
            border-radius: 3px;
            object-fit: cover;
        }

        .ecs-flag-text {
            font-size: 0.85rem;
            font-weight: 600;
            color: #374151;
        }

        /* Form Container */
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

        .ecs-tab-nav {
            display: flex;
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
        }

        .ecs-tab-button {
            flex: 1;
            padding: 0.8rem;
            background: none;
            border: none;
            font-size: 0.9rem;
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

        .ecs-tab-content {
            display: none;
            padding: 1.8rem;
        }

        .ecs-tab-content.active {
            display: block;
        }

        .ecs-form-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.4rem;
            text-align: center;
        }

        .ecs-form-subtitle {
            color: #64748b;
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 0.85rem;
        }

        .ecs-form-group {
            margin-bottom: 1.2rem;
        }

        .ecs-form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.8rem;
            margin-bottom: 1.2rem;
        }

        .ecs-form-control {
            width: 100%;
            padding: 0.65rem 0.8rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 0.85rem;
            background: #ffffff;
            transition: all 0.3s ease;
            outline: none;
        }

        .ecs-form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
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
            background-size: 1.2em 1.2em;
            padding-right: 2.2rem;
        }

        .ecs-form-textarea {
            resize: vertical;
            min-height: 80px;
        }

        .ecs-form-file {
            border: 2px dashed #d1d5db;
            background: #f9fafb;
            padding: 0.8rem;
            text-align: center;
            border-radius: 10px;
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
            font-size: 0.8rem;
            margin-top: 0.4rem;
        }

        .ecs-form-submit {
            width: 100%;
            background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
            color: white;
            border: none;
            padding: 0.8rem;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-top: 0.8rem;
        }

        .ecs-form-submit:hover {
            background: linear-gradient(135deg, #1d4ed8 0%, #1e3a8a 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
        }

        .ecs-form-note {
            text-align: center;
            color: #64748b;
            font-size: 0.75rem;
            margin-top: 0.8rem;
            line-height: 1.3;
        }

        /* Statistics Section */
        .ecs-stats-section {
            padding: 70px 0;
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            color: white;
        }

        .ecs-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            max-width: 900px;
            margin: 0 auto;
        }

        .ecs-stat-card {
            text-align: center;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .ecs-stat-card:hover {
            transform: translateY(-3px);
            background: rgba(255, 255, 255, 0.08);
        }

        .ecs-stat-icon {
            font-size: 2rem;
            color: #f59e0b;
            margin-bottom: 0.8rem;
        }

        .ecs-stat-number {
            font-size: 2rem;
            font-weight: 900;
            margin-bottom: 0.4rem;
        }

        .ecs-stat-label {
            font-size: 0.85rem;
            color: #cbd5e1;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Services Section */
        .services-grid {
            padding: 70px 0;
            background-color: #f8fafc;
        }

        .theme-title-one {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .theme-title-one h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 0.8rem;
        }

        .theme-title-one p {
            color: #64748b;
            font-size: 1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .service-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            margin-bottom: 25px;
            height: 100%;
            border: 1px solid #f1f5f9;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        }

        .service-icon1 {
            width: 70px;
            height: 70px;
            margin: 25px auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            border-radius: 50%;
            color: #fff;
            font-size: 1.8rem;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon1 {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            transform: rotateY(180deg);
        }

        .service-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: #1e293b;
        }

        .service-description {
            padding: 0 20px 20px;
            color: #64748b;
            font-size: 0.9rem;
        }

        .service-link {
            display: inline-block;
            padding: 8px 20px;
            background: linear-gradient(135deg, #3b82f6, #1e40af);
            color: #fff;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 10px;
            transition: all 0.3s ease;
            font-size: 0.85rem;
        }

        .service-link:hover {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: #fff;
            transform: translateY(-2px);
        }

        /* Other sections styling */
        .why-choose-section { padding: 70px 0; background: #fff; }
        .testimonials-section { padding: 70px 0; background: #f8fafc; }
        .cta-section { padding: 70px 0; background: #fff; }

        .why-choose-image { border-radius: 12px; overflow: hidden; box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
        .why-choose-image img { width: 100%; height: auto; transition: all 0.5s ease; }
        .why-choose-image:hover img { transform: scale(1.05); }

        .benefit-item { display: flex; align-items: flex-start; margin-bottom: 20px; }
        .benefit-icon { width: 45px; height: 45px; min-width: 45px; background: linear-gradient(135deg, #3b82f6, #1e40af); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 1.1rem; margin-right: 15px; transition: all 0.3s ease; }
        .benefit-item:hover .benefit-icon { background: linear-gradient(135deg, #f59e0b, #d97706); transform: rotateY(180deg); }
        .benefit-content h4 { font-size: 1.1rem; font-weight: 700; margin-bottom: 8px; color: #1e293b; }
        .benefit-content p { color: #64748b; line-height: 1.6; font-size: 0.9rem; }

        .testimonial-card { background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 8px 25px rgba(0,0,0,0.06); margin: 12px; position: relative; border: 1px solid #f1f5f9; }
        .testimonial-card:before { content: '\201C'; font-size: 3.5rem; font-family: Georgia, serif; color: rgba(59, 130, 246, 0.1); position: absolute; top: 12px; left: 15px; line-height: 1; }
        .testimonial-content { position: relative; z-index: 1; font-style: italic; color: #64748b; margin-bottom: 15px; font-size: 0.9rem; }
        .testimonial-rating { color: #f59e0b; font-size: 1rem; margin-bottom: 12px; }
        .testimonial-author { display: flex; align-items: center; }
        .author-image { width: 45px; height: 45px; border-radius: 50%; overflow: hidden; margin-right: 12px; border: 2px solid #3b82f6; }
        .author-image img { width: 100%; height: 100%; object-fit: cover; }
        .author-info h5 { font-size: 0.95rem; font-weight: 700; margin-bottom: 3px; color: #1e293b; }
        .author-info p { font-size: 0.8rem; color: #64748b; }

        .contact-form { background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.06); border: 1px solid #f1f5f9; }
        .contact-info { background: linear-gradient(135deg, #1e293b, #334155); padding: 25px; border-radius: 12px; color: #fff; height: 100%; }
        .contact-info h3 { font-size: 1.3rem; font-weight: 700; margin-bottom: 20px; color: #fff; position: relative; padding-bottom: 12px; }
        .contact-info h3:after { content: ''; position: absolute; bottom: 0; left: 0; width: 40px; height: 3px; background: #f59e0b; }
        .contact-item { display: flex; align-items: flex-start; margin-bottom: 18px; }
        .contact-icon { width: 35px; height: 35px; min-width: 35px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 0.9rem; margin-right: 12px; }
        .contact-text { font-size: 0.9rem; line-height: 1.5; }
        .social-links { margin-top: 20px; }
        .social-links a { display: inline-flex; align-items: center; justify-content: center; width: 35px; height: 35px; background: rgba(255,255,255,0.1); border-radius: 50%; color: #fff; font-size: 0.9rem; margin-right: 8px; transition: all 0.3s ease; }
        .social-links a:hover { background: #f59e0b; transform: translateY(-2px); }

        .form-group { margin-bottom: 18px; }
        .form-control { height: 40px; border-radius: 8px; border: 2px solid #e5e7eb; padding: 8px 12px; font-size: 0.9rem; transition: all 0.3s ease; }
        .form-control:focus { border-color: #3b82f6; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1); }
        textarea.form-control { height: 100px; }
        .submit-btn { background: linear-gradient(135deg, #3b82f6, #1e40af); color: #fff; border: none; padding: 10px 25px; font-size: 0.9rem; font-weight: 700; border-radius: 8px; cursor: pointer; transition: all 0.3s ease; text-transform: uppercase; letter-spacing: 1px; }
        .submit-btn:hover { background: linear-gradient(135deg, #f59e0b, #d97706); }

        .captcha-container { display: flex; align-items: center; margin-bottom: 12px; }
        .captcha-image { height: 40px; margin-right: 12px; border-radius: 5px; border: 2px solid #e5e7eb; }
        .captcha-container .form-control { flex: 1; }

        .alert { padding: 12px; margin-bottom: 15px; border: 1px solid transparent; border-radius: 8px; }
        .alert-success { color: #065f46; background-color: #d1fae5; border-color: #a7f3d0; }
        .alert-danger { color: #991b1b; background-color: #fee2e2; border-color: #fca5a5; }

        /* Mobile Responsive */
        @media (max-width: 1024px) {
            .ecs-hero-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }
            
            .ecs-form-container {
                max-width: 450px;
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .ecs-hero-section { min-height: 50vh; padding: 30px 0; }
            .ecs-hero-title { font-size: 2rem; }
            .ecs-hero-subtitle { font-size: 0.95rem; }
            .ecs-form-row { grid-template-columns: 1fr; gap: 0; }
            .ecs-hero-features { justify-content: center; }
            .ecs-flag-container { justify-content: center; flex-wrap: wrap; }
            .ecs-stats-grid { grid-template-columns: repeat(2, 1fr); }
            .ecs-tab-content { padding: 1.5rem; }
        }

        @media (max-width: 480px) {
            .ecs-hero-section { min-height: 45vh; padding: 25px 0; }
            .ecs-hero-title { font-size: 1.7rem; }
            .ecs-form-wrapper { margin: 0 0.5rem; }
            .ecs-stats-grid { grid-template-columns: 1fr; }
            .ecs-tab-content { padding: 1.2rem; }
        }
    </style>
</head>

<body>
    <div class="main-page-wrapper">
        <?php include_once 'include/header.php'; ?>

        <!-- Compact Hero Section with Russian Content -->
        <section class="ecs-hero-section">
            <div class="ecs-hero-bg"></div>
            <div class="ecs-hero-pattern"></div>
            
            <div class="container">
                <div class="ecs-hero-content">
                    <div class="ecs-hero-grid">
                        <!-- Left Content - Pure Russian -->
                        <div class="ecs-hero-text">
                            <h1 class="ecs-hero-title">
                                Связь <span class="highlight">Элитных Талантов</span> между Индией и Россией
                            </h1>
                            
                            <p class="ecs-hero-subtitle">
                                Премиальная платформа рекрутинга, соединяющая лучших индийских специалистов с ведущими российскими компаниями. Быстрые, надежные и профессионально управляемые трудоустройства во всех отраслях.
                            </p>

                            <div class="ecs-flag-container">
                                <div class="ecs-flag-item">
                                    <img src="https://flagcdn.com/w40/in.png" alt="India Flag" class="ecs-flag-icon">
                                    <span class="ecs-flag-text">Индия</span>
                                </div>
                                <div class="ecs-flag-item">
                                    <img src="https://flagcdn.com/w40/ru.png" alt="Russia Flag" class="ecs-flag-icon">
                                    <span class="ecs-flag-text">Россия</span>
                                </div>
                            </div>

                            <div class="ecs-hero-features">
                                <div class="ecs-feature-item">
                                    <div class="ecs-feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="ecs-feature-text">Визовая Поддержка</div>
                                </div>
                                
                                <div class="ecs-feature-item">
                                    <div class="ecs-feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="ecs-feature-text">Культурное Обучение</div>
                                </div>
                                
                                <div class="ecs-feature-item">
                                    <div class="ecs-feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="ecs-feature-text">Поддержка 24/7</div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side Form Container - Russian -->
                        <div class="ecs-form-container">
                            <div class="ecs-form-wrapper">
                                <!-- Tab Navigation -->
                                <div class="ecs-tab-nav">
                                    <button class="ecs-tab-button active" data-tab="employer">
                                        <i class="fa fa-building" style="margin-right: 6px;"></i>
                                        Для Работодателей
                                    </button>
                                    <button class="ecs-tab-button" data-tab="jobseeker">
                                        <i class="fa fa-user" style="margin-right: 6px;"></i>
                                        Для Соискателей
                                    </button>
                                </div>

                                <!-- Employer Form Tab - Russian -->
                                <div class="ecs-tab-content active" id="employer-tab">
                                    <h3 class="ecs-form-title">Нанять Лучших Талантов</h3>
                                    <p class="ecs-form-subtitle">Разместите свои требования и получите квалифицированных кандидатов</p>
                                    
                                    <form action="backend_russia_form.php" method="post">
                                        <input type="hidden" name="form_type" value="employer">
                                        <input type="hidden" id="g-recaptcha-response-employer" name="g-recaptcha-response">
                                        
                                        <div class="ecs-form-row">
                                            <input type="text" class="ecs-form-control" name="company" placeholder="Название Компании *" required>
                                            <input type="text" class="ecs-form-control" name="contact" placeholder="Контактное Лицо *" required>
                                        </div>
                                        
                                        <div class="ecs-form-row">
                                            <input type="tel" class="ecs-form-control" name="phone" placeholder="Номер Телефона *" required>
                                            <input type="email" class="ecs-form-control" name="email" placeholder="Email Адрес *" required>
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <select class="ecs-form-control ecs-form-select" name="industry" required>
                                                <option value="">Выберите Отрасль *</option>
                                                <option>Здравоохранение и Медицина</option>
                                                <option>Информационные Технологии</option>
                                                <option>Инженерия и Строительство</option>
                                                <option>Производство</option>
                                                <option>Энергетика и Нефтегаз</option>
                                                <option>Финансы и Банковское Дело</option>
                                                <option>Другое</option>
                                            </select>
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <select class="ecs-form-control ecs-form-select" name="positions" required>
                                                <option value="">Количество Позиций *</option>
                                                <option>1-5 Специалистов</option>
                                                <option>6-15 Специалистов</option>
                                                <option>16-30 Специалистов</option>
                                                <option>31+ Специалистов</option>
                                            </select>
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <textarea class="ecs-form-control ecs-form-textarea" name="requirements" placeholder="Требования к работе, навыки и квалификации *" required></textarea>
                                        </div>
                                        
                                        <button type="submit" class="ecs-form-submit">
                                            <i class="fa fa-paper-plane" style="margin-right: 6px;"></i>
                                            Получить Кандидатов
                                        </button>
                                        
                                        <p class="ecs-form-note">
                                            Мы свяжемся с вами в течение 24 часов с подходящими профилями кандидатов
                                        </p>
                                    </form>
                                </div>

                                <!-- Job Seeker Form Tab - Russian -->
                                <div class="ecs-tab-content" id="jobseeker-tab">
                                    <h3 class="ecs-form-title">Найдите Работу Мечты</h3>
                                    <p class="ecs-form-subtitle">Подайте заявку на интересные возможности в России</p>
                                    
                                    <form action="backend_russia_form.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="form_type" value="jobseeker">
                                        <input type="hidden" id="g-recaptcha-response-jobseeker" name="g-recaptcha-response">
                                        
                                        <div class="ecs-form-row">
                                            <input type="text" class="ecs-form-control" name="name" placeholder="Полное Имя *" required>
                                            <input type="email" class="ecs-form-control" name="email" placeholder="Email Адрес *" required>
                                        </div>
                                        
                                        <div class="ecs-form-row">
                                            <input type="tel" class="ecs-form-control" name="phone" placeholder="Номер Телефона *" required>
                                            <input type="text" class="ecs-form-control" name="experience" placeholder="Опыт (Лет)">
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <select class="ecs-form-control ecs-form-select" name="category" required>
                                                <option value="">Категория Работы *</option>
                                                <option>Врач/Медицинский Специалист</option>
                                                <option>Медсестра/Помощник Здравоохранения</option>
                                                <option>Инженер-программист/Разработчик</option>
                                                <option>Специалист по Данным/Аналитик</option>
                                                <option>Инженер-механик</option>
                                                <option>Инженер-строитель</option>
                                                <option>Бизнес/Управление</option>
                                                <option>Финансовый Специалист</option>
                                                <option>Другое</option>
                                            </select>
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <textarea class="ecs-form-control ecs-form-textarea" name="skills" placeholder="Ключевые навыки, квалификации и достижения"></textarea>
                                        </div>
                                        
                                        <div class="ecs-form-group">
                                            <div class="ecs-form-file" onclick="document.getElementById('resume').click()">
                                                <i class="fa fa-upload" style="font-size: 1.3rem; color: #3b82f6; margin-bottom: 6px;"></i>
                                                <div>Нажмите для загрузки CV/Резюме</div>
                                                <div class="ecs-file-text">PDF, DOC, DOCX (Макс 5МБ)</div>
                                                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx">
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="ecs-form-submit">
                                            <i class="fa fa-rocket" style="margin-right: 6px;"></i>
                                            Подать Заявку
                                        </button>
                                        
                                        <p class="ecs-form-note">
                                            Только отобранные кандидаты будут связаны с нашей командой рекрутинга
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
        <!-- Services Grid Section - Russian -->
        <section id="services" class="services-grid">
            <div class="container">
                <div class="theme-title-one">
                    <h2>Наши Услуги Россия-Индия</h2>
                    <p>Комплексные решения, адаптированные для трансграничного бизнес-успеха</p>
                </div>
                <div class="row mt-5">
                    <!-- Service 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon1">
                                <i class="fa fa-heartbeat"></i>
                            </div>
                            <h3 class="service-title">Рекрутинг в Здравоохранении</h3>
                            <div class="service-description">
                                <p>Соединяем квалифицированных индийских специалистов здравоохранения с российскими медицинскими учреждениями. Мы занимаемся лицензированием, аккредитацией и культурной интеграцией.</p>
                                <a href="#contact" class="service-link">Узнать Больше</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon1">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <h3 class="service-title">ИТ-Специалисты</h3>
                            <div class="service-description">
                                <p>Поиск лучших индийских ИТ-талантов для российских технологических компаний. Экспертиза в разработке программного обеспечения, кибербезопасности, науке о данных и новых технологиях.</p>
                                <a href="#contact" class="service-link">Узнать Больше</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon1">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <h3 class="service-title">Инженерные Таланты</h3>
                            <div class="service-description">
                                <p>Специализированный подбор индийских инженеров для российских инфраструктурных, производственных и энергетических проектов. Техническая экспертиза с межкультурной компетенцией.</p>
                                <a href="#contact" class="service-link">Узнать Больше</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon1">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <h3 class="service-title">Бизнес-Консалтинг</h3>
                            <div class="service-description">
                                <p>Стратегическое руководство для компаний, расширяющихся между Индией и Россией. Стратегии выхода на рынок, соблюдение нормативных требований и поддержка развития бизнеса.</p>
                                <a href="#contact" class="service-link">Узнать Больше</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon1">
                                <i class="fa fa-passport"></i>
                            </div>
                            <h3 class="service-title">Визовая Помощь</h3>
                            <div class="service-description">
                                <p>Полная обработка виз и разрешений на работу для специалистов, переезжающих между Индией и Россией. Экспертное руководство через сложные иммиграционные требования.</p>
                                <a href="#contact" class="service-link">Узнать Больше</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card text-center">
                            <div class="service-icon1">
                                <i class="fa fa-globe"></i>
                            </div>
                            <h3 class="service-title">Культурное Обучение</h3>
                            <div class="service-description">
                                <p>Комплексные программы культурной интеграции для специалистов, переезжающих между Индией и Россией. Языковое обучение, культурный этикет и практическая поддержка адаптации.</p>
                                <a href="#contact" class="service-link">Узнать Больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section - Russian -->
        <section class="why-choose-section">
            <div class="container">
                <div class="theme-title-one">
                    <h2>Почему Выбирают Нас</h2>
                    <p>Ваш надежный партнер для бизнес-успеха Россия-Индия</p>
                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="why-choose-image">
                            <img src="images/about-2.jpg" alt="Russia-India Business Meeting" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="benefit-list">
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Экспертное Знание Рынка</h4>
                                    <p>Наша команда обладает глубоким пониманием российской и индийской бизнес-среды, регулирования и культурных нюансов, влияющих на успешные трансграничные операции.</p>
                                </div>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Бесшовный Процесс</h4>
                                    <p>Мы обрабатываем каждый аспект мобильности талантов между Россией и Индией, от начального рекрутинга до переселения, документооборота и культурной интеграции.</p>
                                </div>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Культурный Мост</h4>
                                    <p>Наша бикультурная команда способствует плавной коммуникации и пониманию между российскими работодателями и индийскими талантами.</p>
                                </div>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Юридическая Поддержка</h4>
                                    <p>Мы обеспечиваем полное соблюдение российских и индийских нормативов касательно трудоустройства, иммиграции, налогообложения и профессионального лицензирования.</p>
                                </div>
                            </div>
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Связь 24/7</h4>
                                    <p>Наша специализированная команда поддержки доступна круглосуточно для решения любых вопросов как работодателей, так и кандидатов.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section - Russian -->
        <section class="testimonials-section">
            <div class="container">
                <div class="theme-title-one">
                    <h2>Отзывы Клиентов</h2>
                    <p>Что говорят наши российские партнеры о наших услугах</p>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"Elite Corporate Solutions преобразовала наш ИТ-отдел, предоставив исключительных индийских талантов. Их понимание обеих культур сделало интеграцию бесшовной."</p>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="images/team/1.jpg" alt="Testimonial Author">
                                </div>
                                <div class="author-info">
                                    <h5>Михаил Петров</h5>
                                    <p>CTO, TechRus Solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"Медицинские специалисты, нанятые Elite Corporate Solutions, значительно улучшили возможности нашей больницы. Их услуга визовой помощи была особенно ценной."</p>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="images/team/2.jpg" alt="Testimonial Author">
                                </div>
                                <div class="author-info">
                                    <h5>Д-р Елена Сорокина</h5>
                                    <p>Медицинский Директор, Московская Центральная Больница</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"Инженерные таланты, предоставленные Elite Corporate Solutions, сыграли ключевую роль в успехе нашего энергетического проекта. Их программа культурного обучения обеспечила плавную интеграцию команды."</p>
                            </div>
                            <div class="testimonial-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="images/team/3.jpg" alt="Testimonial Author">
                                </div>
                                <div class="author-info">
                                    <h5>Алексей Иванов</h5>
                                    <p>Директор Проекта, RusEnergy Group</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section - Russian -->
        <section id="contact" class="cta-section">
            <div class="container">
                <div class="theme-title-one">
                    <h2>Свяжитесь с Нами</h2>
                    <p>Свяжитесь с нами, чтобы обсудить ваши бизнес-потребности Россия-Индия</p>
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
                            <form action="backend_form.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Ваше Имя" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Ваш Телефон" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Ваш Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="web" placeholder="Ваш Веб-сайт (Дополнительно)">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="service" required>
                                        <option value="" selected disabled>Выберите Интерес к Услуге</option>
                                        <option value="Healthcare Recruitment">Рекрутинг в Здравоохранении</option>
                                        <option value="IT Professionals">ИТ-Специалисты</option>
                                        <option value="Engineering Talent">Инженерные Таланты</option>
                                        <option value="Business Consulting">Бизнес-Консалтинг</option>
                                        <option value="Visa Assistance">Визовая Помощь</option>
                                        <option value="Cultural Training">Культурное Обучение</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Ваше Сообщение" required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="captcha-container">
                                        <img src="captcha.php" alt="CAPTCHA Image" class="captcha-image">
                                        <input type="text" class="form-control" name="captcha" placeholder="Введите код CAPTCHA" required>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="submit-btn">Отправить Сообщение</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-info">
                            <h3>Связаться</h3>
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
                                    <p>A-83, Охла Фаза II, Нью-Дели – 110020, Индия</p>
                                    <p>Московский Офис: Проспект Мира 101, Москва, Россия</p>
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

        <!-- JavaScript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tabButtons = document.querySelectorAll('.ecs-tab-button');
                const tabContents = document.querySelectorAll('.ecs-tab-content');

                tabButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const targetTab = button.getAttribute('data-tab');
                        tabButtons.forEach(btn => btn.classList.remove('active'));
                        tabContents.forEach(content => content.classList.remove('active'));
                        button.classList.add('active');
                        document.getElementById(targetTab + '-tab').classList.add('active');
                    });
                });

                function animateCounters() {
                    const counters = document.querySelectorAll('.ecs-stat-number');
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-count'));
                        const increment = target / 40;
                        let current = 0;
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                counter.textContent = target.toLocaleString();
                                clearInterval(timer);
                            } else {
                                counter.textContent = Math.floor(current).toLocaleString();
                            }
                        }, 25);
                    });
                }

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && entry.target.classList.contains('ecs-stats-section')) {
                            animateCounters();
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.3 });

                const statsSection = document.querySelector('.ecs-stats-section');
                if (statsSection) observer.observe(statsSection);

                const fileInput = document.getElementById('resume');
                if (fileInput) {
                    fileInput.addEventListener('change', function() {
                        const fileName = this.files[0]?.name;
                        const fileContainer = this.parentElement;
                        const fileText = fileContainer.querySelector('.ecs-file-text');
                        if (fileName) {
                            fileText.textContent = `Выбрано: ${fileName}`;
                            fileContainer.style.borderColor = '#3b82f6';
                            fileContainer.style.background = '#eff6ff';
                        }
                    });
                }

                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    });
                });

                document.querySelectorAll('form').forEach(form => {
                    form.addEventListener('submit', function() {
                        const submitBtn = form.querySelector('button[type="submit"]');
                        if (submitBtn) {
                            const originalText = submitBtn.innerHTML;
                            submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Отправка...';
                            submitBtn.disabled = true;
                            setTimeout(() => {
                                submitBtn.innerHTML = originalText;
                                submitBtn.disabled = false;
                            }, 10000);
                        }
                    });
                });
            });
        </script>

        <!-- Google reCAPTCHA v3 -->
        <script src="https://www.google.com/recaptcha/api.js?render=6Ledy8UrAAAAAGLUn3toR4y2awVaNUkt0iyOlVLU"></script>
        <script>
            // Execute reCAPTCHA on employer form submission
            document.querySelector('#employer-tab form').addEventListener('submit', function(e) {
                e.preventDefault();
                grecaptcha.execute('6Ledy8UrAAAAAGLUn3toR4y2awVaNUkt0iyOlVLU', {action: 'employer_form'}).then(function(token) {
                    document.getElementById('g-recaptcha-response-employer').value = token;
                    e.target.submit();
                });
            });

            // Execute reCAPTCHA on jobseeker form submission
            document.querySelector('#jobseeker-tab form').addEventListener('submit', function(e) {
                e.preventDefault();
                grecaptcha.execute('6Ledy8UrAAAAAGLUn3toR4y2awVaNUkt0iyOlVLU', {action: 'jobseeker_form'}).then(function(token) {
                    document.getElementById('g-recaptcha-response-jobseeker').value = token;
                    e.target.submit();
                });
            });
        </script>
    </div>
</body>

</html>
