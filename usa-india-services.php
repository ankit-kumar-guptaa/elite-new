<?php
// Start session for form messages
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title>USA-India Professional Services - Elite Corporate Solutions</title>
    <meta name="description" content="Elite Corporate Solutions connects top Indian talent with leading American companies. Professional recruitment services for USA-India business expansion, visa support, and cultural integration.">
    <meta name="keywords" content="USA-India recruitment, American jobs for Indians, H1B visa support, US IT jobs, Silicon Valley recruitment, professional services USA, Indian talent America">
    <meta name="author" content="Elite Corporate Solutions">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="USA-India Professional Services - Elite Corporate Solutions">
    <meta property="og:description" content="Bridging excellence between India & USA. Elite Corporate Solutions offers specialized recruitment, visa assistance, and professional services for American market expansion.">
    <meta property="og:image" content="https://elitecorporatesolutions.com/images/usa-india-og-image.jpg">
    <meta property="og:url" content="https://elitecorporatesolutions.com/usa-india-services">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="USA-India Professional Services - Elite Corporate Solutions">
    <meta name="twitter:description" content="Bridging excellence between India & USA. Specialized recruitment and professional services for American market expansion.">
    <meta name="twitter:image" content="https://elitecorporatesolutions.com/images/usa-india-twitter-card.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://elitecorporatesolutions.com/usa-india-services">

    <!-- Google Analytics -->
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

    <!-- Professional USA-India Theme with Unique Classes -->
    <style>
        /* Reset & Base Styles - Unique Prefix */
        .usa-india-wrapper * { margin: 0; padding: 0; box-sizing: border-box; }

        .usa-india-wrapper {
            font-family: 'Inter', 'Segoe UI', 'Roboto', sans-serif;
            background-color: #ffffff;
            color: #1f2937;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .usa-india-container { 
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 0 1.5rem; 
        }

        /* Professional Hero Section - Navy Blue & Gray Theme */
        .usa-india-hero-section {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 50%, #e2e8f0 100%);
            min-height: 65vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 45px 0;
            overflow: hidden;
        }

        .usa-india-hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(30, 58, 138, 0.04) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(71, 85, 105, 0.03) 0%, transparent 50%);
            z-index: 1;
        }

        .usa-india-hero-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="professionalPattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="0.5" fill="rgba(30,58,138,0.06)"/></pattern></defs><rect x="0" y="0" width="100%" height="100%" fill="url(%23professionalPattern)"/></svg>');
            opacity: 0.6;
            z-index: 2;
        }

        .usa-india-hero-content {
            position: relative;
            z-index: 3;
            width: 100%;
        }

        .usa-india-hero-grid {
            display: grid;
            grid-template-columns: 1fr 500px;
            gap: 3.5rem;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .usa-india-hero-text {
            animation: usaIndiaSlideInLeft 1s ease-out;
        }

        @keyframes usaIndiaSlideInLeft {
            from { opacity: 0; transform: translateX(-40px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes usaIndiaSlideInRight {
            from { opacity: 0; transform: translateX(40px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes usaIndiaFadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .usa-india-hero-title {
            font-size: 2.7rem;
            font-weight: 800;
            line-height: 1.2;
            color: #1e293b;
            margin-bottom: 1.2rem;
            letter-spacing: -0.02em;
        }

        .usa-india-title-highlight {
            background: linear-gradient(135deg, #1e3a8a, #475569);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .usa-india-hero-subtitle {
            font-size: 1.1rem;
            color: #64748b;
            margin-bottom: 1.8rem;
            line-height: 1.6;
            max-width: 95%;
        }

        .usa-india-hero-features {
            display: flex;
            flex-wrap: wrap;
            gap: 1.8rem;
            margin-bottom: 1.8rem;
        }

        .usa-india-feature-item {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            animation: usaIndiaFadeInUp 1s ease-out 0.3s both;
        }

        .usa-india-feature-item:nth-child(2) { animation-delay: 0.4s; }
        .usa-india-feature-item:nth-child(3) { animation-delay: 0.5s; }

        .usa-india-feature-icon {
            width: 22px;
            height: 22px;
            background: linear-gradient(135deg, #1e3a8a, #475569);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.75rem;
            flex-shrink: 0;
            box-shadow: 0 2px 8px rgba(30, 58, 138, 0.2);
        }

        .usa-india-feature-text {
            font-size: 0.95rem;
            font-weight: 600;
            color: #374151;
        }

        .usa-india-flag-container {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            margin-bottom: 1.5rem;
            animation: usaIndiaFadeInUp 1s ease-out 0.2s both;
        }

        .usa-india-flag-item {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            background: rgba(255, 255, 255, 0.9);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .usa-india-flag-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .usa-india-flag-icon {
            width: 20px;
            height: 14px;
            border-radius: 3px;
            object-fit: cover;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
        }

        .usa-india-flag-text {
            font-size: 0.9rem;
            font-weight: 600;
            color: #374151;
        }

        /* Professional Form Container */
        .usa-india-form-container {
            animation: usaIndiaSlideInRight 1s ease-out 0.4s both;
        }

        .usa-india-form-wrapper {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative;
        }

        .usa-india-form-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #1e3a8a, #475569);
        }

        .usa-india-tab-nav {
            display: flex;
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
            border-bottom: 1px solid #e2e8f0;
            position: relative;
        }

        .usa-india-tab-button {
            flex: 1;
            padding: 1rem;
            background: none;
            border: none;
            font-size: 0.95rem;
            font-weight: 600;
            color: #64748b;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            text-align: center;
        }

        .usa-india-tab-button.active {
            color: #1e3a8a;
            background: rgba(255, 255, 255, 0.8);
        }

        .usa-india-tab-button.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #1e3a8a, #475569);
        }

        .usa-india-tab-button:hover:not(.active) {
            color: #374151;
            background: rgba(255, 255, 255, 0.6);
        }

        .usa-india-tab-content {
            display: none;
            padding: 2rem;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(248, 250, 252, 0.9));
        }

        .usa-india-tab-content.active {
            display: block;
            animation: usaIndiaFadeInUp 0.5s ease-out;
        }

        .usa-india-form-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        .usa-india-form-subtitle {
            color: #64748b;
            text-align: center;
            margin-bottom: 1.8rem;
            font-size: 0.9rem;
        }

        .usa-india-form-group {
            margin-bottom: 1.3rem;
        }

        .usa-india-form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.3rem;
        }

        .usa-india-form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 0.9rem;
            background: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
            outline: none;
        }

        .usa-india-form-control:focus {
            border-color: #1e3a8a;
            box-shadow: 0 0 0 4px rgba(30, 58, 138, 0.1);
            transform: translateY(-1px);
            background: #ffffff;
        }

        .usa-india-form-control::placeholder {
            color: #9ca3af;
        }

        .usa-india-form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.75rem center;
            background-repeat: no-repeat;
            background-size: 1.2em 1.2em;
            padding-right: 2.5rem;
        }

        .usa-india-form-textarea {
            resize: vertical;
            min-height: 90px;
        }

        .usa-india-form-file {
            border: 2px dashed #d1d5db;
            background: linear-gradient(135deg, #f9fafb, #f3f4f6);
            padding: 1rem;
            text-align: center;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .usa-india-form-file:hover {
            border-color: #1e3a8a;
            background: linear-gradient(135deg, #eff6ff, #dbeafe);
            transform: translateY(-1px);
        }

        .usa-india-form-file input {
            display: none;
        }

        .usa-india-file-text {
            color: #64748b;
            font-size: 0.8rem;
            margin-top: 0.5rem;
        }

        .usa-india-form-submit {
            width: 100%;
            background: linear-gradient(135deg, #1e3a8a 0%, #475569 100%);
            color: white;
            border: none;
            padding: 0.9rem;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-top: 1rem;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.2);
        }

        .usa-india-form-submit:hover {
            background: linear-gradient(135deg, #1d4ed8 0%, #334155 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(30, 58, 138, 0.3);
        }

        .usa-india-form-submit:active {
            transform: translateY(0);
        }

        .usa-india-form-note {
            text-align: center;
            color: #64748b;
            font-size: 0.8rem;
            margin-top: 1rem;
            line-height: 1.4;
        }

        /* Professional Statistics Section */
        .usa-india-stats-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            color: white;
            position: relative;
        }

        .usa-india-stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="statsPattern" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.08)"/></pattern></defs><rect x="0" y="0" width="100%" height="100%" fill="url(%23statsPattern)"/></svg>');
            opacity: 0.3;
            z-index: 1;
        }

        .usa-india-stats-section .usa-india-container {
            position: relative;
            z-index: 2;
        }

        .usa-india-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .usa-india-stat-card {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .usa-india-stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            transition: left 0.5s ease;
        }

        .usa-india-stat-card:hover::before {
            left: 100%;
        }

        .usa-india-stat-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.12);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .usa-india-stat-icon {
            font-size: 2.5rem;
            color: #60a5fa;
            margin-bottom: 1rem;
            filter: drop-shadow(0 4px 8px rgba(96, 165, 250, 0.3));
        }

        .usa-india-stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 0.5rem;
        }

        .usa-india-stat-label {
            font-size: 0.9rem;
            color: #cbd5e1;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Professional Services Section */
        .usa-india-services-grid {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }

        .usa-india-theme-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .usa-india-theme-title h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 1rem;
            position: relative;
        }

        .usa-india-theme-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #1e3a8a, #475569);
            border-radius: 2px;
        }

        .usa-india-theme-title p {
            color: #64748b;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .usa-india-service-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            margin-bottom: 30px;
            height: 100%;
            border: 1px solid #f1f5f9;
            position: relative;
        }

        .usa-india-service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #1e3a8a, #475569);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .usa-india-service-card:hover::before {
            transform: scaleX(1);
        }

        .usa-india-service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }

        .usa-india-service-icon {
            width: 80px;
            height: 80px;
            margin: 30px auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1e3a8a, #475569);
            border-radius: 50%;
            color: #fff;
            font-size: 2rem;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(30, 58, 138, 0.2);
        }

        .usa-india-service-card:hover .usa-india-service-icon {
            background: linear-gradient(135deg, #3b82f6, #64748b);
            transform: rotateY(180deg);
            box-shadow: 0 12px 35px rgba(59, 130, 246, 0.3);
        }

        .usa-india-service-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #1e293b;
        }

        .usa-india-service-description {
            padding: 0 25px 25px;
            color: #64748b;
        }

        .usa-india-service-link {
            display: inline-block;
            padding: 10px 25px;
            background: linear-gradient(135deg, #1e3a8a, #475569);
            color: #fff;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.2);
        }

        .usa-india-service-link:hover {
            background: linear-gradient(135deg, #3b82f6, #64748b);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
        }

        /* Professional Benefits & Other Sections */
        .usa-india-why-section { padding: 80px 0; background: #fff; }
        .usa-india-testimonials-section { padding: 80px 0; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); }
        .usa-india-cta-section { padding: 80px 0; background: #fff; }

        .usa-india-why-image { border-radius: 16px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1); position: relative; }
        .usa-india-why-image::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, rgba(30, 58, 138, 0.05), rgba(71, 85, 105, 0.05)); opacity: 0; transition: opacity 0.3s ease; }
        .usa-india-why-image:hover::before { opacity: 1; }
        .usa-india-why-image img { width: 100%; height: auto; transition: all 0.5s ease; }
        .usa-india-why-image:hover img { transform: scale(1.05); }

        .usa-india-benefit-item { display: flex; align-items: flex-start; margin-bottom: 25px; }
        .usa-india-benefit-icon { width: 50px; height: 50px; min-width: 50px; background: linear-gradient(135deg, #1e3a8a, #475569); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 1.2rem; margin-right: 20px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(30, 58, 138, 0.2); }
        .usa-india-benefit-item:hover .usa-india-benefit-icon { background: linear-gradient(135deg, #3b82f6, #64748b); transform: rotateY(180deg); box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3); }
        .usa-india-benefit-content h4 { font-size: 1.2rem; font-weight: 700; margin-bottom: 10px; color: #1e293b; }
        .usa-india-benefit-content p { color: #64748b; line-height: 1.6; }

        .usa-india-testimonial-card { background: #fff; border-radius: 16px; padding: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin: 15px; position: relative; border: 1px solid #f1f5f9; }
        .usa-india-testimonial-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 4px; background: linear-gradient(90deg, #1e3a8a, #475569); border-radius: 16px 16px 0 0; }
        .usa-india-testimonial-card:after { content: '\201C'; font-size: 4rem; font-family: Georgia, serif; color: rgba(30, 58, 138, 0.1); position: absolute; top: 15px; left: 20px; line-height: 1; }
        .usa-india-testimonial-content { position: relative; z-index: 1; font-style: italic; color: #64748b; margin-bottom: 20px; }
        .usa-india-testimonial-rating { color: #60a5fa; font-size: 1.1rem; margin-bottom: 15px; }
        .usa-india-testimonial-author { display: flex; align-items: center; }
        .usa-india-author-image { width: 50px; height: 50px; border-radius: 50%; overflow: hidden; margin-right: 15px; border: 3px solid #1e3a8a; }
        .usa-india-author-image img { width: 100%; height: 100%; object-fit: cover; }
        .usa-india-author-info h5 { font-size: 1rem; font-weight: 700; margin-bottom: 5px; color: #1e293b; }
        .usa-india-author-info p { font-size: 0.9rem; color: #64748b; }

        .usa-india-contact-form { background: #fff; padding: 30px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border: 1px solid #f1f5f9; }
        .usa-india-contact-info { background: linear-gradient(135deg, #1e293b, #334155); padding: 30px; border-radius: 16px; color: #fff; height: 100%; position: relative; overflow: hidden; }
        .usa-india-contact-info::before { content: ''; position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: linear-gradient(45deg, #1e3a8a, #475569); border-radius: 50%; transform: translate(50%, -50%); opacity: 0.1; }
        .usa-india-contact-info h3 { font-size: 1.5rem; font-weight: 700; margin-bottom: 25px; color: #fff; position: relative; padding-bottom: 15px; }
        .usa-india-contact-info h3:after { content: ''; position: absolute; bottom: 0; left: 0; width: 50px; height: 3px; background: linear-gradient(90deg, #60a5fa, #1e3a8a); }
        .usa-india-contact-item { display: flex; align-items: flex-start; margin-bottom: 20px; position: relative; z-index: 1; }
        .usa-india-contact-icon { width: 40px; height: 40px; min-width: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #60a5fa; font-size: 1rem; margin-right: 15px; }
        .usa-india-contact-text { font-size: 0.95rem; line-height: 1.6; }
        .usa-india-social-links { margin-top: 25px; position: relative; z-index: 1; }
        .usa-india-social-links a { display: inline-flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; color: #fff; font-size: 1rem; margin-right: 10px; transition: all 0.3s ease; }
        .usa-india-social-links a:hover { background: #60a5fa; transform: translateY(-3px); }

        .usa-india-form-group { margin-bottom: 20px; }
        .usa-india-contact-form .form-control { height: 45px; border-radius: 8px; border: 2px solid #e5e7eb; padding: 10px 15px; font-size: 0.95rem; transition: all 0.3s ease; }
        .usa-india-contact-form .form-control:focus { border-color: #1e3a8a; box-shadow: 0 0 0 3px rgba(30, 58, 138, 0.1); }
        .usa-india-contact-form textarea.form-control { height: 120px; }
        .usa-india-submit-btn { background: linear-gradient(135deg, #1e3a8a, #475569); color: #fff; border: none; padding: 12px 30px; font-size: 1rem; font-weight: 700; border-radius: 8px; cursor: pointer; transition: all 0.3s ease; text-transform: uppercase; letter-spacing: 1px; }
        .usa-india-submit-btn:hover { background: linear-gradient(135deg, #3b82f6, #64748b); }

        .usa-india-captcha-container { display: flex; align-items: center; margin-bottom: 15px; }
        .usa-india-captcha-image { height: 45px; margin-right: 15px; border-radius: 5px; border: 2px solid #e5e7eb; }
        .usa-india-captcha-container .form-control { flex: 1; }

        .usa-india-alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 8px; }
        .usa-india-alert-success { color: #065f46; background-color: #d1fae5; border-color: #a7f3d0; }
        .usa-india-alert-danger { color: #991b1b; background-color: #fee2e2; border-color: #fca5a5; }

        /* Mobile Responsive */
        @media (max-width: 1024px) {
            .usa-india-hero-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
                text-align: center;
            }
            
            .usa-india-form-container {
                max-width: 500px;
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .usa-india-hero-section { min-height: 55vh; padding: 35px 0; }
            .usa-india-hero-title { font-size: 2.2rem; }
            .usa-india-hero-subtitle { font-size: 1rem; }
            .usa-india-form-row { grid-template-columns: 1fr; gap: 0; }
            .usa-india-hero-features { justify-content: center; }
            .usa-india-flag-container { justify-content: center; flex-wrap: wrap; }
            .usa-india-stats-grid { grid-template-columns: repeat(2, 1fr); }
            .usa-india-tab-content { padding: 1.5rem; }
        }

        @media (max-width: 480px) {
            .usa-india-hero-section { min-height: 50vh; padding: 30px 0; }
            .usa-india-hero-title { font-size: 1.9rem; }
            .usa-india-form-wrapper { margin: 0 0.5rem; }
            .usa-india-stats-grid { grid-template-columns: 1fr; }
            .usa-india-tab-content { padding: 1.2rem; }
        }
    </style>
</head>

<body>
     <?php include_once 'include/header.php'; ?>
    <div class="usa-india-wrapper">
       

        <!-- Professional USA-India Hero Section -->
        <section class="usa-india-hero-section">
            <div class="usa-india-hero-bg"></div>
            <div class="usa-india-hero-pattern"></div>
            
            <div class="usa-india-container">
                <div class="usa-india-hero-content">
                    <div class="usa-india-hero-grid">
                        <!-- Left Content - Professional Theme -->
                        <div class="usa-india-hero-text">
                            <h1 class="usa-india-hero-title">
                                Connect <span class="usa-india-title-highlight">Elite Talent</span> Between India & USA
                            </h1>
                            
                            <p class="usa-india-hero-subtitle">
                                Premier recruitment platform bridging top Indian professionals with leading American companies. Specialized in H1B visa support, Silicon Valley placements, and Fortune 500 corporate recruitment across all industries.
                            </p>

                            <div class="usa-india-flag-container">
                                <div class="usa-india-flag-item">
                                    <img src="https://flagcdn.com/w40/in.png" alt="India Flag" class="usa-india-flag-icon">
                                    <span class="usa-india-flag-text">India</span>
                                </div>
                                <div class="usa-india-flag-item">
                                    <img src="https://flagcdn.com/w40/us.png" alt="USA Flag" class="usa-india-flag-icon">
                                    <span class="usa-india-flag-text">USA</span>
                                </div>
                            </div>

                            <div class="usa-india-hero-features">
                                <div class="usa-india-feature-item">
                                    <div class="usa-india-feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="usa-india-feature-text">H1B Visa Support</div>
                                </div>
                                
                                <div class="usa-india-feature-item">
                                    <div class="usa-india-feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="usa-india-feature-text">Silicon Valley Jobs</div>
                                </div>
                                
                                <div class="usa-india-feature-item">
                                    <div class="usa-india-feature-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="usa-india-feature-text">Fortune 500 Companies</div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side Form Container -->
                        <div class="usa-india-form-container">
                            <div class="usa-india-form-wrapper">
                                <!-- Tab Navigation -->
                                <div class="usa-india-tab-nav">
                                    <button class="usa-india-tab-button active" data-tab="employer">
                                        <i class="fa fa-building" style="margin-right: 6px;"></i>
                                        For US Employers
                                    </button>
                                    <button class="usa-india-tab-button" data-tab="jobseeker">
                                        <i class="fa fa-user" style="margin-right: 6px;"></i>
                                        For Job Seekers
                                    </button>
                                </div>

                                <!-- US Employer Form Tab -->
                                <div class="usa-india-tab-content active" id="employer-tab">
                                    <h3 class="usa-india-form-title">Hire Top Indian Talent</h3>
                                    <p class="usa-india-form-subtitle">Post your requirements and get matched with qualified candidates</p>
                                    
                                    <form action="backend_usa_form.php" method="post">
                                        <input type="hidden" name="form_type" value="usa_employer">
                                        
                                        <div class="usa-india-form-row">
                                            <input type="text" class="usa-india-form-control" name="company" placeholder="Company Name *" required>
                                            <input type="text" class="usa-india-form-control" name="contact" placeholder="Contact Person *" required>
                                        </div>
                                        
                                        <div class="usa-india-form-row">
                                            <input type="tel" class="usa-india-form-control" name="phone" placeholder="Phone Number *" required>
                                            <input type="email" class="usa-india-form-control" name="email" placeholder="Email Address *" required>
                                        </div>
                                        
                                        <div class="usa-india-form-group">
                                            <select class="usa-india-form-control usa-india-form-select" name="industry" required>
                                                <option value="">Select Industry *</option>
                                                <option>Information Technology</option>
                                                <option>Healthcare & Pharmaceuticals</option>
                                                <option>Engineering & Manufacturing</option>
                                                <option>Financial Services</option>
                                                <option>Consulting & Business Services</option>
                                                <option>Biotechnology & Life Sciences</option>
                                                <option>Telecommunications</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        
                                        <div class="usa-india-form-group">
                                            <select class="usa-india-form-control usa-india-form-select" name="positions" required>
                                                <option value="">Number of Positions *</option>
                                                <option>1-5 Professionals</option>
                                                <option>6-15 Professionals</option>
                                                <option>16-30 Professionals</option>
                                                <option>31+ Professionals</option>
                                            </select>
                                        </div>
                                        
                                        <div class="usa-india-form-group">
                                            <select class="usa-india-form-control usa-india-form-select" name="visa_support" required>
                                                <option value="">Visa Sponsorship *</option>
                                                <option>H1B Sponsorship Available</option>
                                                <option>L1 Visa Sponsorship</option>
                                                <option>O1 Visa Sponsorship</option>
                                                <option>Green Card Sponsorship</option>
                                                <option>No Visa Sponsorship</option>
                                            </select>
                                        </div>
                                        
                                        <div class="usa-india-form-group">
                                            <textarea class="usa-india-form-control usa-india-form-textarea" name="requirements" placeholder="Job requirements, skills, and qualifications needed *" required></textarea>
                                        </div>
                                        
                                        <button type="submit" class="usa-india-form-submit">
                                            <i class="fa fa-paper-plane" style="margin-right: 6px;"></i>
                                            Get Indian Talent
                                        </button>
                                        
                                        <p class="usa-india-form-note">
                                            We'll contact you within 24 hours with suitable candidate profiles
                                        </p>
                                    </form>
                                </div>

                                <!-- Job Seeker Form Tab -->
                                <div class="usa-india-tab-content" id="jobseeker-tab">
                                    <h3 class="usa-india-form-title">Find Your American Dream Job</h3>
                                    <p class="usa-india-form-subtitle">Apply now for exciting opportunities in the United States</p>
                                    
                                    <form action="backend_usa_form.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="form_type" value="usa_jobseeker">
                                        
                                        <div class="usa-india-form-row">
                                            <input type="text" class="usa-india-form-control" name="name" placeholder="Full Name *" required>
                                            <input type="email" class="usa-india-form-control" name="email" placeholder="Email Address *" required>
                                        </div>
                                        
                                        <div class="usa-india-form-row">
                                            <input type="tel" class="usa-india-form-control" name="phone" placeholder="Phone Number *" required>
                                            <input type="text" class="usa-india-form-control" name="experience" placeholder="Years of Experience">
                                        </div>
                                        
                                        <div class="usa-india-form-group">
                                            <select class="usa-india-form-control usa-india-form-select" name="category" required>
                                                <option value="">Job Category *</option>
                                                <option>Software Engineer/Developer</option>
                                                <option>Data Scientist/Analyst</option>
                                                <option>Product Manager</option>
                                                <option>DevOps/Cloud Engineer</option>
                                                <option>Healthcare Professional</option>
                                                <option>Research Scientist</option>
                                                <option>Financial Analyst</option>
                                                <option>Business Consultant</option>
                                                <option>Academic/Professor</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        
                                        <div class="usa-india-form-group">
                                            <select class="usa-india-form-control usa-india-form-select" name="visa_status">
                                                <option value="">Current Visa Status</option>
                                                <option>H1B Holder</option>
                                                <option>L1 Visa</option>
                                                <option>F1 Student (OPT/CPT)</option>
                                                <option>Green Card Holder</option>
                                                <option>US Citizen</option>
                                                <option>Need H1B Sponsorship</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        
                                        <div class="usa-india-form-group">
                                            <textarea class="usa-india-form-control usa-india-form-textarea" name="skills" placeholder="Key skills, qualifications, and achievements"></textarea>
                                        </div>
                                        
                                        <div class="usa-india-form-group">
                                            <div class="usa-india-form-file" onclick="document.getElementById('resume').click()">
                                                <i class="fa fa-upload" style="font-size: 1.3rem; color: #1e3a8a; margin-bottom: 6px;"></i>
                                                <div>Click to upload your Resume/CV</div>
                                                <div class="usa-india-file-text">PDF, DOC, DOCX (Max 5MB)</div>
                                                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx">
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="usa-india-form-submit">
                                            <i class="fa fa-rocket" style="margin-right: 6px;"></i>
                                            Apply for USA Jobs
                                        </button>
                                        
                                        <p class="usa-india-form-note">
                                            Only shortlisted candidates will be contacted by our recruitment team
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
        <section id="services" class="usa-india-services-grid">
            <div class="usa-india-container">
                <div class="usa-india-theme-title">
                    <h2>Our USA-India Professional Services</h2>
                    <p>Comprehensive solutions for American market expansion and Indian talent acquisition</p>
                </div>
                <div class="row mt-5">
                    <!-- Service 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="usa-india-service-card text-center">
                            <div class="usa-india-service-icon">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <h3 class="usa-india-service-title">Silicon Valley IT Recruitment</h3>
                            <div class="usa-india-service-description">
                                <p>Specialized placement of Indian tech professionals in Silicon Valley and major US tech hubs. Expertise in software engineering, AI/ML, cloud computing, and emerging technologies.</p>
                                <a href="#contact" class="usa-india-service-link">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="usa-india-service-card text-center">
                            <div class="usa-india-service-icon">
                                <i class="fa fa-passport"></i>
                            </div>
                            <h3 class="usa-india-service-title">H1B Visa & Immigration Support</h3>
                            <div class="usa-india-service-description">
                                <p>Complete H1B visa processing, L1 transfers, and Green Card applications. Expert guidance through US immigration laws with high approval rates for Indian professionals.</p>
                                <a href="#contact" class="usa-india-service-link">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="usa-india-service-card text-center">
                            <div class="usa-india-service-icon">
                                <i class="fa fa-heartbeat"></i>
                            </div>
                            <h3 class="usa-india-service-title">Healthcare & Life Sciences</h3>
                            <div class="usa-india-service-description">
                                <p>Connecting Indian medical professionals, researchers, and life science experts with leading US hospitals, pharmaceutical companies, and biotech firms.</p>
                                <a href="#contact" class="usa-india-service-link">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="usa-india-service-card text-center">
                            <div class="usa-india-service-icon">
                                <i class="fa fa-chart-bar"></i>
                            </div>
                            <h3 class="usa-india-service-title">Financial Services & Consulting</h3>
                            <div class="usa-india-service-description">
                                <p>Placement services for Indian professionals in Wall Street, consulting firms, and Fortune 500 financial institutions. Investment banking, risk management, and strategy roles.</p>
                                <a href="#contact" class="usa-india-service-link">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="usa-india-service-card text-center">
                            <div class="usa-india-service-icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <h3 class="usa-india-service-title">Academic & Research Positions</h3>
                            <div class="usa-india-service-description">
                                <p>Connecting Indian academics and researchers with top US universities and research institutions. Faculty positions, post-doctoral opportunities, and research collaborations.</p>
                                <a href="#contact" class="usa-india-service-link">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="usa-india-service-card text-center">
                            <div class="usa-india-service-icon">
                                <i class="fa fa-globe-americas"></i>
                            </div>
                            <h3 class="usa-india-service-title">Cultural Integration & Relocation</h3>
                            <div class="usa-india-service-description">
                                <p>Comprehensive support for Indian professionals relocating to the USA. Cultural orientation, housing assistance, tax guidance, and professional networking.</p>
                                <a href="#contact" class="usa-india-service-link">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="usa-india-why-section">
            <div class="usa-india-container">
                <div class="usa-india-theme-title">
                    <h2>Why Choose Us for USA Opportunities</h2>
                    <p>Your trusted partner for American dream achievement and business expansion</p>
                </div>
                <div class="row mt-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="usa-india-why-image">
                            <img src="images/about-2.jpg" alt="USA-India Business Partnership" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="benefit-list">
                            <div class="usa-india-benefit-item">
                                <div class="usa-india-benefit-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="usa-india-benefit-content">
                                    <h4>Fortune 500 Network</h4>
                                    <p>Exclusive partnerships with leading American corporations including Google, Microsoft, Apple, Amazon, and top-tier consulting firms across all major US cities.</p>
                                </div>
                            </div>
                            <div class="usa-india-benefit-item">
                                <div class="usa-india-benefit-icon">
                                    <i class="fa fa-award"></i>
                                </div>
                                <div class="usa-india-benefit-content">
                                    <h4>H1B Visa Expertise</h4>
                                    <p>96% success rate in H1B visa applications with specialized immigration lawyers and consultants who understand US immigration policies and procedures.</p>
                                </div>
                            </div>
                            <div class="usa-india-benefit-item">
                                <div class="usa-india-benefit-icon">
                                    <i class="fa fa-handshake"></i>
                                </div>
                                <div class="usa-india-benefit-content">
                                    <h4>End-to-End Support</h4>
                                    <p>Complete assistance from job placement to US relocation including housing, banking, tax setup, cultural orientation, and ongoing career development support.</p>
                                </div>
                            </div>
                            <div class="usa-india-benefit-item">
                                <div class="usa-india-benefit-icon">
                                    <i class="fa fa-shield-alt"></i>
                                </div>
                                <div class="usa-india-benefit-content">
                                    <h4>Legal Compliance</h4>
                                    <p>Full adherence to US employment laws, USCIS regulations, and Department of Labor requirements ensuring compliant and legitimate job placements.</p>
                                </div>
                            </div>
                            <div class="usa-india-benefit-item">
                                <div class="usa-india-benefit-icon">
                                    <i class="fa fa-clock"></i>
                                </div>
                                <div class="usa-india-benefit-content">
                                    <h4>Fast Track Processing</h4>
                                    <p>Accelerated placement process with dedicated US-based team providing real-time updates and expedited visa processing through premium services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="usa-india-testimonials-section">
            <div class="usa-india-container">
                <div class="usa-india-theme-title">
                    <h2>Success Stories from USA</h2>
                    <p>What our American partners and placed professionals say about our services</p>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="usa-india-testimonial-card">
                            <div class="usa-india-testimonial-content">
                                <p>"Elite Corporate Solutions helped us hire exceptional Indian software engineers for our Silicon Valley office. Their understanding of both technical requirements and visa processes made everything seamless."</p>
                            </div>
                            <div class="usa-india-testimonial-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                            <div class="usa-india-testimonial-author">
                                <div class="usa-india-author-image">
                                    <img src="images/team/1.jpg" alt="Testimonial Author">
                                </div>
                                <div class="usa-india-author-info">
                                    <h5>Sarah Johnson</h5>
                                    <p>VP Engineering, TechFlow Inc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="usa-india-testimonial-card">
                            <div class="usa-india-testimonial-content">
                                <p>"They helped me get my dream job at a Fortune 500 company in New York. The H1B process was smooth and their support throughout the relocation was incredible. Highly recommended!"</p>
                            </div>
                            <div class="usa-india-testimonial-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                            <div class="usa-india-testimonial-author">
                                <div class="usa-india-author-image">
                                    <img src="images/team/2.jpg" alt="Testimonial Author">
                                </div>
                                <div class="usa-india-author-info">
                                    <h5>Priya Sharma</h5>
                                    <p>Data Scientist, Goldman Sachs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="usa-india-testimonial-card">
                            <div class="usa-india-testimonial-content">
                                <p>"Our biotech company needed specialized researchers from India. Elite Corporate delivered top-quality candidates and handled all immigration complexities professionally."</p>
                            </div>
                            <div class="usa-india-testimonial-rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i>
                            </div>
                            <div class="usa-india-testimonial-author">
                                <div class="usa-india-author-image">
                                    <img src="images/team/3.jpg" alt="Testimonial Author">
                                </div>
                                <div class="usa-india-author-info">
                                    <h5>Dr. Michael Chen</h5>
                                    <p>Research Director, BioTech Solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="usa-india-cta-section">
            <div class="usa-india-container">
                <div class="usa-india-theme-title">
                    <h2>Ready to Expand to the USA?</h2>
                    <p>Connect with us to discuss your American market expansion needs</p>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-7">
                        <div class="usa-india-contact-form">
                            <?php if(isset($_SESSION['success_message'])): ?>
                                <div class="usa-india-alert usa-india-alert-success">
                                    <?php echo $_SESSION['success_message']; ?>
                                    <?php unset($_SESSION['success_message']); ?>
                                </div>
                            <?php endif; ?>
                            <?php if(isset($_SESSION['error_message'])): ?>
                                <div class="usa-india-alert usa-india-alert-danger">
                                    <?php echo $_SESSION['error_message']; ?>
                                    <?php unset($_SESSION['error_message']); ?>
                                </div>
                            <?php endif; ?>
                            <form action="backend_form.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="usa-india-form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="usa-india-form-group">
                                            <input type="text" class="form-control" name="phone" placeholder="Your Phone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="usa-india-form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="usa-india-form-group">
                                            <input type="text" class="form-control" name="company" placeholder="Company Name (Optional)">
                                        </div>
                                    </div>
                                </div>
                                <div class="usa-india-form-group">
                                    <select class="form-control" name="service" required>
                                        <option value="" selected disabled>Select Service Interest</option>
                                        <option value="Silicon Valley IT Recruitment">Silicon Valley IT Recruitment</option>
                                        <option value="H1B Visa Support">H1B Visa & Immigration Support</option>
                                        <option value="Healthcare Recruitment">Healthcare & Life Sciences</option>
                                        <option value="Financial Services">Financial Services & Consulting</option>
                                        <option value="Academic Positions">Academic & Research Positions</option>
                                        <option value="Cultural Integration">Cultural Integration & Relocation</option>
                                    </select>
                                </div>
                                <div class="usa-india-form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Tell us about your USA expansion or job search requirements" required></textarea>
                                </div>
                                <div class="usa-india-form-group">
                                    <div class="usa-india-captcha-container">
                                        <img src="captcha.php" alt="CAPTCHA Image" class="usa-india-captcha-image">
                                        <input type="text" class="form-control" name="captcha" placeholder="Enter CAPTCHA code" required>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="usa-india-submit-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="usa-india-contact-info">
                            <h3>Get In Touch</h3>
                            <div class="usa-india-contact-item">
                                <div class="usa-india-contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="usa-india-contact-text">
                                    <p><strong>India Office:</strong><br>+91 9870364340</p>
                                    <p><strong>USA Office:</strong><br>+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="usa-india-contact-item">
                                <div class="usa-india-contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="usa-india-contact-text">
                                    <p>info@elitecorporatesolutions.com</p>
                                    <p>usa@elitecorporatesolutions.com</p>
                                </div>
                            </div>
                            <div class="usa-india-contact-item">
                                <div class="usa-india-contact-icon">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                                <div class="usa-india-contact-text">
                                    <p><strong>India Headquarters:</strong><br>A-83, Okhla Phase II<br>New Delhi – 110020, India</p>
                                    <p><strong>USA Office:</strong><br>123 Silicon Valley Blvd<br>San Francisco, CA 94105</p>
                                </div>
                            </div>
                            <div class="usa-india-social-links">
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

  

        <!-- Professional JavaScript with Unique Scope -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Tab Functionality with Unique Classes
                const usaIndiaTabButtons = document.querySelectorAll('.usa-india-tab-button');
                const usaIndiaTabContents = document.querySelectorAll('.usa-india-tab-content');

                usaIndiaTabButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const targetTab = button.getAttribute('data-tab');
                        usaIndiaTabButtons.forEach(btn => btn.classList.remove('active'));
                        usaIndiaTabContents.forEach(content => content.classList.remove('active'));
                        button.classList.add('active');
                        document.getElementById(targetTab + '-tab').classList.add('active');
                    });
                });

                // Professional Counter Animation
                function usaIndiaAnimateCounters() {
                    const counters = document.querySelectorAll('.usa-india-stat-number');
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-count'));
                        const increment = target / 60;
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

                // Intersection Observer for Stats
                const usaIndiaObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && entry.target.classList.contains('usa-india-stats-section')) {
                            usaIndiaAnimateCounters();
                            usaIndiaObserver.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.3 });

                const usaIndiaStatsSection = document.querySelector('.usa-india-stats-section');
                if (usaIndiaStatsSection) usaIndiaObserver.observe(usaIndiaStatsSection);

                // File Upload Enhancement
                const usaIndiaFileInput = document.getElementById('resume');
                if (usaIndiaFileInput) {
                    usaIndiaFileInput.addEventListener('change', function() {
                        const fileName = this.files[0]?.name;
                        const fileContainer = this.parentElement;
                        const fileText = fileContainer.querySelector('.usa-india-file-text');
                        if (fileName) {
                            fileText.textContent = `Selected: ${fileName}`;
                            fileContainer.style.borderColor = '#1e3a8a';
                            fileContainer.style.background = 'linear-gradient(135deg, #eff6ff, #dbeafe)';
                        }
                    });
                }

                // Smooth Scroll for USA-India Links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    });
                });

                // Enhanced Form Submission
                document.querySelectorAll('.usa-india-wrapper form').forEach(form => {
                    form.addEventListener('submit', function() {
                        const submitBtn = form.querySelector('button[type="submit"]');
                        if (submitBtn) {
                            const originalText = submitBtn.innerHTML;
                            submitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending...';
                            submitBtn.disabled = true;
                            setTimeout(() => {
                                submitBtn.innerHTML = originalText;
                                submitBtn.disabled = false;
                            }, 10000);
                        }
                    });
                });

                // Professional Service Cards Enhancement
                const usaIndiaServiceCards = document.querySelectorAll('.usa-india-service-card');
                usaIndiaServiceCards.forEach(card => {
                    card.addEventListener('mouseenter', function() {
                        this.style.transform = 'translateY(-10px) scale(1.02)';
                    });
                    card.addEventListener('mouseleave', function() {
                        this.style.transform = 'translateY(0) scale(1)';
                    });
                });
            });
        </script>
    </div>

          <?php include_once 'include/footer.php'; ?>
</body>

</html>
