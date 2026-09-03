<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#061948">
    <meta name="msapplication-navbutton-color" content="#061948">
    <meta name="apple-mobile-web-app-status-bar-style" content="#061948">
    <title>Elite Corporate Solutions & Zneus - HR Outsourcing & Employee Monitoring Software</title>
    <meta name="description" content="Smarter HR. Stronger Business. End-to-end HR outsourcing, recruitment & Zneus AI-powered employee monitoring software. Save time, cut costs, scale faster.">
    
    <?php include 'include/assets.php'; ?>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2VDKKW0ZFF"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-2VDKKW0ZFF');
    </script>

<style>
/* ========== GLOBAL ========== */
.ez-page * {
    margin: 0; padding: 0; box-sizing: border-box;
}
.ez-page {
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    color: #1a1a2e;
    overflow-x: hidden;
}

/* ========== HERO SECTION ========== */
.ez-hero {
    position: relative;
    min-height: 100vh;
    background: linear-gradient(135deg, #0a0e27 0%, #1a1a4e 25%, #2d1b69 50%, #1e3a5f 75%, #0a2540 100%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 120px 20px 60px;
    overflow: hidden;
}

.ez-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle at 30% 50%, rgba(99, 102, 241, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(236, 72, 153, 0.06) 0%, transparent 50%),
                radial-gradient(circle at 50% 20%, rgba(59, 130, 246, 0.06) 0%, transparent 50%);
    animation: ez-float 20s ease-in-out infinite;
    pointer-events: none;
}

@keyframes ez-float {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(30px, -30px) rotate(2deg); }
    66% { transform: translate(-20px, 20px) rotate(-1deg); }
}

/* Floating particles */
.ez-particles {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    overflow: hidden;
    pointer-events: none;
}
.ez-particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: rgba(255,255,255,0.15);
    border-radius: 50%;
    animation: ez-particle-float linear infinite;
}
@keyframes ez-particle-float {
    0% { transform: translateY(100vh) scale(0); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(-100px) scale(1); opacity: 0; }
}

.ez-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    margin-bottom: 50px;
}

.ez-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.12);
    padding: 8px 20px;
    border-radius: 50px;
    color: #a5b4fc;
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 24px;
    animation: ez-fadeUp 0.6s ease-out;
}

.ez-hero h1 {
    font-size: clamp(32px, 5vw, 56px);
    font-weight: 800;
    color: #fff;
    line-height: 1.15;
    margin-bottom: 16px;
    animation: ez-fadeUp 0.6s ease-out 0.1s both;
}
.ez-hero h1 span.ez-gradient-text {
    background: linear-gradient(135deg, #818cf8, #c084fc, #f472b6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.ez-hero-sub {
    font-size: clamp(16px, 2vw, 20px);
    color: rgba(255,255,255,0.7);
    max-width: 700px;
    margin: 0 auto 20px;
    line-height: 1.6;
    animation: ez-fadeUp 0.6s ease-out 0.2s both;
}
.ez-hero-stats {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
    animation: ez-fadeUp 0.6s ease-out 0.3s both;
}
.ez-hero-stat {
    text-align: center;
}
.ez-hero-stat .ez-stat-icon {
    font-size: 24px;
    margin-bottom: 4px;
}
.ez-hero-stat .ez-stat-val {
    font-size: 14px;
    font-weight: 600;
    color: #a5b4fc;
}
.ez-hero-stat .ez-stat-lbl {
    font-size: 12px;
    color: rgba(255,255,255,0.5);
}

@keyframes ez-fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ========== FORM CARDS ========== */
.ez-forms-wrapper {
    position: relative;
    z-index: 2;
    display: flex;
    gap: 30px;
    max-width: 900px;
    width: 100%;
    animation: ez-fadeUp 0.6s ease-out 0.4s both;
}

.ez-form-card {
    flex: 1;
    background: rgba(255,255,255,0.06);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 20px;
    padding: 32px 28px;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}
.ez-form-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    border-radius: 20px 20px 0 0;
}
.ez-form-card.ez-elite-card::before {
    background: linear-gradient(90deg, #c32528, #e74c3c, #ff6b6b);
}
.ez-form-card.ez-zneus-card::before {
    background: linear-gradient(90deg, #4361ee, #6366f1, #818cf8);
}

.ez-form-card:hover {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.2);
    transform: translateY(-4px);
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
}

.ez-form-icon {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin-bottom: 16px;
}
.ez-elite-card .ez-form-icon {
    background: linear-gradient(135deg, rgba(195,37,40,0.2), rgba(231,76,60,0.15));
    color: #ff6b6b;
}
.ez-zneus-card .ez-form-icon {
    background: linear-gradient(135deg, rgba(67,97,238,0.2), rgba(99,102,241,0.15));
    color: #818cf8;
}

.ez-form-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 4px;
}
.ez-form-card .ez-form-tagline {
    font-size: 13px;
    color: rgba(255,255,255,0.5);
    margin-bottom: 20px;
}

.ez-form-group {
    margin-bottom: 14px;
}
.ez-form-group input,
.ez-form-group select,
.ez-form-group textarea {
    width: 100%;
    padding: 11px 14px;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 10px;
    color: #fff;
    font-size: 13px;
    font-family: 'Inter', sans-serif;
    transition: all 0.3s ease;
    outline: none;
}
.ez-form-group input::placeholder,
.ez-form-group textarea::placeholder {
    color: rgba(255,255,255,0.4);
}
.ez-form-group select {
    color: rgba(255,255,255,0.4);
    appearance: none;
    -webkit-appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='rgba(255,255,255,0.5)' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 01.753 1.659l-4.796 5.48a1 1 0 01-1.506 0z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 36px;
}
.ez-form-group select option {
    background: #1a1a2e;
    color: #fff;
}
.ez-form-group input:focus,
.ez-form-group select:focus,
.ez-form-group textarea:focus {
    border-color: rgba(255,255,255,0.3);
    background: rgba(255,255,255,0.1);
    box-shadow: 0 0 0 3px rgba(99,102,241,0.15);
}
.ez-form-group textarea {
    min-height: 70px;
    resize: vertical;
}

.ez-form-row {
    display: flex;
    gap: 10px;
}
.ez-form-row .ez-form-group {
    flex: 1;
}

.ez-submit-btn {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Inter', sans-serif;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-top: 6px;
    position: relative;
    overflow: hidden;
}
.ez-elite-card .ez-submit-btn {
    background: linear-gradient(135deg, #c32528, #e74c3c);
    color: #fff;
}
.ez-elite-card .ez-submit-btn:hover {
    background: linear-gradient(135deg, #a01f22, #c0392b);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(195,37,40,0.4);
}
.ez-zneus-card .ez-submit-btn {
    background: linear-gradient(135deg, #4361ee, #6366f1);
    color: #fff;
}
.ez-zneus-card .ez-submit-btn:hover {
    background: linear-gradient(135deg, #3451de, #5558e0);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(67,97,238,0.4);
}
.ez-submit-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none !important;
}

/* ========== FEATURES SECTIONS ========== */
.ez-section {
    padding: 80px 20px;
}
.ez-section-dark {
    background: #f8f9fc;
}
.ez-container {
    max-width: 1140px;
    margin: 0 auto;
}
.ez-section-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 16px;
}
.ez-badge-red {
    background: rgba(195,37,40,0.08);
    color: #c32528;
}
.ez-badge-blue {
    background: rgba(67,97,238,0.08);
    color: #4361ee;
}
.ez-section-title {
    font-size: clamp(28px, 3.5vw, 42px);
    font-weight: 800;
    color: #1a1a2e;
    line-height: 1.2;
    margin-bottom: 12px;
}
.ez-section-sub {
    font-size: 16px;
    color: #64748b;
    max-width: 600px;
    line-height: 1.6;
    margin-bottom: 48px;
}
.ez-section-center {
    text-align: center;
}
.ez-section-center .ez-section-sub {
    margin-left: auto;
    margin-right: auto;
}

/* Feature Cards */
.ez-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 24px;
}
.ez-feature-card {
    background: #fff;
    border-radius: 16px;
    padding: 28px 24px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}
.ez-feature-card:hover {
    border-color: transparent;
    transform: translateY(-6px);
    box-shadow: 0 16px 48px rgba(0,0,0,0.08);
}
.ez-feature-card .ez-fc-num {
    position: absolute;
    top: 16px;
    right: 20px;
    font-size: 48px;
    font-weight: 900;
    color: rgba(0,0,0,0.04);
    line-height: 1;
}
.ez-feature-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-bottom: 16px;
}
.ez-fi-red {
    background: linear-gradient(135deg, rgba(195,37,40,0.1), rgba(231,76,60,0.08));
    color: #c32528;
}
.ez-fi-blue {
    background: linear-gradient(135deg, rgba(67,97,238,0.1), rgba(99,102,241,0.08));
    color: #4361ee;
}
.ez-feature-card h4 {
    font-size: 16px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 8px;
}
.ez-feature-card p {
    font-size: 13.5px;
    color: #64748b;
    line-height: 1.6;
}

/* ========== PRICING TEASER ========== */
.ez-pricing {
    background: linear-gradient(135deg, #0a0e27, #1a1a4e, #2d1b69);
    padding: 80px 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.ez-pricing::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: radial-gradient(circle at 50% 50%, rgba(99,102,241,0.1) 0%, transparent 60%);
}
.ez-pricing-content {
    position: relative;
    z-index: 2;
}
.ez-price-tag {
    font-size: clamp(40px, 6vw, 72px);
    font-weight: 900;
    color: #fff;
    margin-bottom: 8px;
}
.ez-price-tag span {
    background: linear-gradient(135deg, #818cf8, #c084fc, #f472b6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.ez-pricing h2 {
    font-size: clamp(24px, 3vw, 36px);
    font-weight: 700;
    color: #fff;
    margin-bottom: 8px;
}
.ez-pricing .ez-price-sub {
    color: rgba(255,255,255,0.5);
    font-size: 14px;
    margin-bottom: 32px;
}
.ez-pricing-features {
    display: flex;
    justify-content: center;
    gap: 32px;
    flex-wrap: wrap;
    margin-bottom: 40px;
}
.ez-pf-item {
    display: flex;
    align-items: center;
    gap: 8px;
    color: rgba(255,255,255,0.8);
    font-size: 14px;
}
.ez-pf-item i {
    color: #34d399;
    font-size: 16px;
}
.ez-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 36px;
    border-radius: 12px;
    font-size: 15px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    font-family: 'Inter', sans-serif;
}
.ez-cta-btn-primary {
    background: linear-gradient(135deg, #4361ee, #6366f1);
    color: #fff;
}
.ez-cta-btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(67,97,238,0.4);
    color: #fff;
    text-decoration: none;
}

/* ========== CTA / CONTACT ========== */
.ez-contact {
    padding: 80px 20px;
    background: #fff;
}
.ez-contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 24px;
    margin-top: 48px;
}
.ez-contact-card {
    text-align: center;
    padding: 28px 20px;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
}
.ez-contact-card:hover {
    border-color: transparent;
    box-shadow: 0 12px 36px rgba(0,0,0,0.06);
    transform: translateY(-4px);
}
.ez-contact-card .ez-cc-icon {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    margin: 0 auto 14px;
}
.ez-cc-green {
    background: rgba(37,211,102,0.1);
    color: #25d366;
}
.ez-cc-blue {
    background: rgba(67,97,238,0.1);
    color: #4361ee;
}
.ez-cc-red {
    background: rgba(195,37,40,0.1);
    color: #c32528;
}
.ez-cc-purple {
    background: rgba(139,92,246,0.1);
    color: #8b5cf6;
}
.ez-contact-card h4 {
    font-size: 15px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 8px;
}
.ez-contact-card a {
    display: block;
    color: #4361ee;
    font-size: 13.5px;
    text-decoration: none;
    margin-bottom: 4px;
    transition: color 0.3s ease;
}
.ez-contact-card a:hover {
    color: #c32528;
}

/* ========== FINAL CTA BANNER ========== */
.ez-final-cta {
    background: linear-gradient(135deg, #261a6a, #1a1a4e);
    padding: 60px 20px;
    text-align: center;
}
.ez-final-cta h2 {
    font-size: clamp(24px, 3vw, 36px);
    font-weight: 800;
    color: #fff;
    margin-bottom: 12px;
}
.ez-final-cta p {
    color: rgba(255,255,255,0.6);
    font-size: 15px;
    margin-bottom: 28px;
}
.ez-final-btns {
    display: flex;
    justify-content: center;
    gap: 16px;
    flex-wrap: wrap;
}
.ez-btn-outline {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.2);
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
}
.ez-btn-outline:hover {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.4);
    color: #fff;
    text-decoration: none;
}
.ez-btn-wa {
    background: #25d366;
    border-color: #25d366;
}
.ez-btn-wa:hover {
    background: #1ea952;
    border-color: #1ea952;
}
.ez-btn-call {
    background: linear-gradient(135deg, #c32528, #e74c3c);
    border-color: #c32528;
}
.ez-btn-call:hover {
    background: linear-gradient(135deg, #a01f22, #c0392b);
}

/* ========== RESPONSIVE ========== */
@media (max-width: 768px) {
    .ez-hero {
        padding: 100px 16px 40px;
    }
    .ez-forms-wrapper {
        flex-direction: column;
        gap: 20px;
    }
    .ez-form-row {
        flex-direction: column;
        gap: 0;
    }
    .ez-hero-stats {
        gap: 24px;
    }
    .ez-features-grid {
        grid-template-columns: 1fr;
    }
    .ez-pricing-features {
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }
}

/* ========== MESSAGE BOX ========== */
.ez-msg-box {
    margin-top: 10px;
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 12px;
    text-align: center;
    display: none;
}

/* ========== SPINNER ========== */
.ez-btn-spinner i {
    margin-right: 6px;
}
.fa-spin {
    animation: fa-spin 1s infinite linear;
}
@keyframes fa-spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
</head>

<body>
<div class="main-page-wrapper">

<?php include_once 'include/header.php'; ?>

<div class="ez-page">

<!-- ==================== HERO SECTION ==================== -->
<section class="ez-hero" id="hero">
    <!-- Floating Particles -->
    <div class="ez-particles" id="ez-particles"></div>

    <div class="ez-hero-content">
        <div class="ez-hero-badge">
            ⚡ SMARTER HR. STRONGER BUSINESS.
        </div>
        <h1>End-to-End <span class="ez-gradient-text">HR Solutions</span><br>& Employee Monitoring</h1>
        <p class="ez-hero-sub">Save Time. Cut Costs. Scale Faster. From HR outsourcing to AI-powered workforce productivity — we've got you covered.</p>
        <div class="ez-hero-stats">
            <div class="ez-hero-stat">
                <div class="ez-stat-icon">🚀</div>
                <div class="ez-stat-val">Save Time</div>
                <div class="ez-stat-lbl">Automate HR</div>
            </div>
            <div class="ez-hero-stat">
                <div class="ez-stat-icon">📈</div>
                <div class="ez-stat-val">Cut Costs</div>
                <div class="ez-stat-lbl">Up to 40%</div>
            </div>
            <div class="ez-hero-stat">
                <div class="ez-stat-icon">👥</div>
                <div class="ez-stat-val">Scale Faster</div>
                <div class="ez-stat-lbl">Grow Rapid</div>
            </div>
        </div>
    </div>

    <!-- ======= TWO FORMS SIDE BY SIDE ======= -->
    <div class="ez-forms-wrapper">

        <!-- ELITE CORPORATE SOLUTIONS FORM -->
        <div class="ez-form-card ez-elite-card">
            <div class="ez-form-icon"><i class="fas fa-building"></i></div>
            <h3>Elite Corporate Solutions</h3>
            <p class="ez-form-tagline">HR Outsourcing & Recruitment Services</p>

            <form id="eliteForm" action="backend_elite_zneus.php" method="POST">
                <input type="hidden" name="form_type" value="elite_inquiry">

                <div class="ez-form-row">
                    <div class="ez-form-group">
                        <input type="text" name="name" placeholder="Your Name *" required>
                    </div>
                    <div class="ez-form-group">
                        <input type="tel" name="phone" placeholder="Phone Number *" required>
                    </div>
                </div>

                <div class="ez-form-group">
                    <input type="email" name="email" placeholder="Email Address *" required>
                </div>

                <div class="ez-form-group">
                    <input type="text" name="company" placeholder="Company Name">
                </div>

                <div class="ez-form-group">
                    <select name="service_needed" required>
                        <option value="" disabled selected>Select Service Needed *</option>
                        <option value="Recruitment / Hiring">Recruitment / Hiring</option>
                        <option value="HR Outsourcing">HR Outsourcing</option>
                        <option value="Payroll & Compliance">Payroll & Compliance</option>
                        <option value="Training & Development">Training & Development</option>
                        <option value="Exit Process / F&F">Exit Process / F&F</option>
                        <option value="Policies & Documentation">Policies & Documentation</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="ez-form-group">
                    <textarea name="message" placeholder="Tell us your requirements..." rows="3" required></textarea>
                </div>

                <input type="hidden" id="g-recaptcha-response-elite" name="g-recaptcha-response">

                <button type="submit" class="ez-submit-btn" id="elite-submit-btn">
                    <span class="ez-btn-text"><i class="fas fa-paper-plane"></i> Get HR Solutions</span>
                    <span class="ez-btn-spinner" style="display:none;"><i class="fas fa-spinner fa-spin"></i> Sending...</span>
                </button>
                <div id="eliteMessage" class="ez-msg-box"></div>
            </form>
        </div>

        <!-- ZNEUS SOFTWARE FORM -->
        <div class="ez-form-card ez-zneus-card">
            <div class="ez-form-icon"><i class="fas fa-desktop"></i></div>
            <h3>Zneus Software</h3>
            <p class="ez-form-tagline">AI Employee Monitoring & Productivity</p>

            <form id="zneusForm" action="backend_elite_zneus.php" method="POST">
                <input type="hidden" name="form_type" value="zneus_inquiry">

                <div class="ez-form-row">
                    <div class="ez-form-group">
                        <input type="text" name="name" placeholder="Your Name *" required>
                    </div>
                    <div class="ez-form-group">
                        <input type="tel" name="phone" placeholder="Phone Number *" required>
                    </div>
                </div>

                <div class="ez-form-group">
                    <input type="email" name="email" placeholder="Email Address *" required>
                </div>

                <div class="ez-form-group">
                    <input type="text" name="company" placeholder="Company Name">
                </div>

                <div class="ez-form-group">
                    <select name="employee_count" required>
                        <option value="" disabled selected>Number of Employees *</option>
                        <option value="1-10">1 - 10 Employees</option>
                        <option value="11-50">11 - 50 Employees</option>
                        <option value="51-100">51 - 100 Employees</option>
                        <option value="101-500">101 - 500 Employees</option>
                        <option value="500+">500+ Employees</option>
                    </select>
                </div>

                <div class="ez-form-group">
                    <textarea name="message" placeholder="Tell us your monitoring needs..." rows="3" required></textarea>
                </div>

                <input type="hidden" id="g-recaptcha-response-zneus" name="g-recaptcha-response">

                <button type="submit" class="ez-submit-btn" id="zneus-submit-btn">
                    <span class="ez-btn-text"><i class="fas fa-rocket"></i> Get Zneus Demo</span>
                    <span class="ez-btn-spinner" style="display:none;"><i class="fas fa-spinner fa-spin"></i> Sending...</span>
                </button>
                <div id="zneusMessage" class="ez-msg-box"></div>
            </form>
        </div>

    </div>
</section>


<!-- ==================== ELITE HR FEATURES ==================== -->
<section class="ez-section" id="hr-services">
    <div class="ez-container">
        <div class="ez-section-badge ez-badge-red">🏢 HR OUTSOURCING SERVICES</div>
        <h2 class="ez-section-title">Expert HR. Zero Headaches.</h2>
        <p class="ez-section-sub">We Handle HR. You Grow Your Business. Complete end-to-end HR outsourcing for companies of all sizes.</p>

        <div class="ez-features-grid">
            <div class="ez-feature-card">
                <span class="ez-fc-num">01</span>
                <div class="ez-feature-icon ez-fi-red"><i class="fas fa-user-plus"></i></div>
                <h4>End-to-End Hiring</h4>
                <p>From sourcing to onboarding — we find the right talent, faster. Complete recruitment process outsourcing.</p>
            </div>
            <div class="ez-feature-card">
                <span class="ez-fc-num">02</span>
                <div class="ez-feature-icon ez-fi-red"><i class="fas fa-file-invoice-dollar"></i></div>
                <h4>Payroll & Compliance</h4>
                <p>Accurate payroll, statutory compliance & attendance management — all taken care of professionally.</p>
            </div>
            <div class="ez-feature-card">
                <span class="ez-fc-num">03</span>
                <div class="ez-feature-icon ez-fi-red"><i class="fas fa-sign-out-alt"></i></div>
                <h4>Exit Process</h4>
                <p>Smooth resignations, F&F settlements & relieving letters — completely hassle-free exit management.</p>
            </div>
            <div class="ez-feature-card">
                <span class="ez-fc-num">04</span>
                <div class="ez-feature-icon ez-fi-red"><i class="fas fa-chalkboard-teacher"></i></div>
                <h4>Policies & Training</h4>
                <p>Strong HR policies. Trained teams. Stay compliant always with our expert policy framework.</p>
            </div>
        </div>
    </div>
</section>


<!-- ==================== ZNEUS FEATURES ==================== -->
<section class="ez-section ez-section-dark" id="zneus-features">
    <div class="ez-container">
        <div class="ez-section-badge ez-badge-blue">💻 AI WORKFORCE PRODUCTIVITY</div>
        <h2 class="ez-section-title">Work Smarter. Achieve More.</h2>
        <p class="ez-section-sub">Boost team productivity by 40% with Zneus — the AI-powered employee monitoring & productivity platform.</p>

        <div class="ez-features-grid">
            <div class="ez-feature-card">
                <span class="ez-fc-num">01</span>
                <div class="ez-feature-icon ez-fi-blue"><i class="fas fa-tv"></i></div>
                <h4>Live Screen Monitoring</h4>
                <p>Watch employee desktops in real-time with HD capture. Full visibility into daily work activities.</p>
            </div>
            <div class="ez-feature-card">
                <span class="ez-fc-num">02</span>
                <div class="ez-feature-icon ez-fi-blue"><i class="fas fa-camera"></i></div>
                <h4>Automatic Screenshots</h4>
                <p>Configurable activity timeline for total transparency. Track work progress throughout the day.</p>
            </div>
            <div class="ez-feature-card">
                <span class="ez-fc-num">03</span>
                <div class="ez-feature-icon ez-fi-blue"><i class="fas fa-chart-bar"></i></div>
                <h4>Smart App & Web Tracking</h4>
                <p>Identify time-wasting apps and track active hours. Understand where your team's time goes.</p>
            </div>
            <div class="ez-feature-card">
                <span class="ez-fc-num">04</span>
                <div class="ez-feature-icon ez-fi-blue"><i class="fas fa-cogs"></i></div>
                <h4>Automated HR Tools</h4>
                <p>In-app attendance logging and instant digital leave approval. Streamline all HR operations.</p>
            </div>
        </div>
    </div>
</section>


<!-- ==================== PRICING TEASER ==================== -->
<section class="ez-pricing" id="pricing">
    <div class="ez-pricing-content">
        <div class="ez-section-badge" style="background:rgba(255,255,255,0.08);color:#a5b4fc;">⚡ TECH-POWERED. PEOPLE-FOCUSED.</div>
        <div class="ez-price-tag">Starts at <span>₹999*</span></div>
        <h2>Better People Management.<br>Bigger Business Impact.</h2>
        <p class="ez-price-sub">*Per employee per month. Custom plans available for enterprises.</p>
        
        <div class="ez-pricing-features">
            <div class="ez-pf-item"><i class="fas fa-check-circle"></i> No Setup Charges</div>
            <div class="ez-pf-item"><i class="fas fa-check-circle"></i> Free Demo Available</div>
            <div class="ez-pf-item"><i class="fas fa-check-circle"></i> Cancel Anytime</div>
            <div class="ez-pf-item"><i class="fas fa-check-circle"></i> Dedicated Support</div>
        </div>
        
        <a href="#hero" class="ez-cta-btn ez-cta-btn-primary">
            <i class="fas fa-paper-plane"></i> Get Started Today
        </a>
    </div>
</section>


<!-- ==================== CONTACT ==================== -->
<section class="ez-contact ez-section-center" id="contact">
    <div class="ez-container">
        <div class="ez-section-badge ez-badge-blue">📞 GET IN TOUCH</div>
        <h2 class="ez-section-title">Let's Connect</h2>
        <p class="ez-section-sub">Reach out via call, WhatsApp, or email. We'd love to help you build a stronger workforce.</p>
        
        <div class="ez-contact-grid">
            <div class="ez-contact-card">
                <div class="ez-cc-icon ez-cc-green"><i class="fab fa-whatsapp"></i></div>
                <h4>WhatsApp</h4>
                <a href="https://wa.me/917669073000" target="_blank">+91 76690 73000</a>
            </div>
            <div class="ez-contact-card">
                <div class="ez-cc-icon ez-cc-red"><i class="fas fa-phone-alt"></i></div>
                <h4>Call Us</h4>
                <a href="tel:+917669073000">+91 76690 73000</a>
                <a href="tel:+919871916980">+91 98719 16980</a>
            </div>
            <div class="ez-contact-card">
                <div class="ez-cc-icon ez-cc-blue"><i class="fas fa-envelope"></i></div>
                <h4>Email</h4>
                <a href="mailto:info@elitecorporatesolutions.com">info@elitecorporatesolutions.com</a>
                <a href="mailto:info@zneus.com">info@zneus.com</a>
            </div>
            <div class="ez-contact-card">
                <div class="ez-cc-icon ez-cc-purple"><i class="fas fa-globe"></i></div>
                <h4>Websites</h4>
                <a href="https://www.elitecorporatesolutions.com" target="_blank">elitecorporatesolutions.com</a>
                <a href="https://zneus.com" target="_blank">zneus.com</a>
            </div>
        </div>
    </div>
</section>


<!-- ==================== FINAL CTA ==================== -->
<section class="ez-final-cta">
    <h2>Let's Build a Stronger Workforce, Together! 🚀</h2>
    <p>Choose Elite for HR. Choose Zneus for Productivity. Choose Both for Growth.</p>
    <div class="ez-final-btns">
        <a href="https://www.elitecorporatesolutions.com" target="_blank" class="ez-btn-outline">
            <i class="fas fa-globe"></i> Visit Website
        </a>
        <a href="tel:+917669073000" class="ez-btn-outline ez-btn-call">
            <i class="fas fa-phone-alt"></i> Call Now
        </a>
        <a href="https://wa.me/917669073000" target="_blank" class="ez-btn-outline ez-btn-wa">
            <i class="fab fa-whatsapp"></i> WhatsApp
        </a>
    </div>
</section>

</div><!-- .ez-page -->

<!-- ===== Google reCAPTCHA v3 ===== -->
<script src="https://www.google.com/recaptcha/api.js?render=6Ledy8UrAAAAAGLUn3toR4y2awVaNUkt0iyOlVLU"></script>

<script>
// ===== PARTICLES =====
(function() {
    const container = document.getElementById('ez-particles');
    if (!container) return;
    for (let i = 0; i < 30; i++) {
        const p = document.createElement('div');
        p.className = 'ez-particle';
        p.style.left = Math.random() * 100 + '%';
        p.style.animationDuration = (Math.random() * 15 + 10) + 's';
        p.style.animationDelay = (Math.random() * 10) + 's';
        p.style.width = p.style.height = (Math.random() * 3 + 2) + 'px';
        container.appendChild(p);
    }
})();

// ===== FORM HELPERS =====
function ezShowLoading(btnId) {
    const btn = document.getElementById(btnId);
    if (!btn) return;
    btn.querySelector('.ez-btn-text').style.display = 'none';
    btn.querySelector('.ez-btn-spinner').style.display = 'inline-flex';
    btn.disabled = true;
}
function ezHideLoading(btnId) {
    const btn = document.getElementById(btnId);
    if (!btn) return;
    btn.querySelector('.ez-btn-text').style.display = 'inline-flex';
    btn.querySelector('.ez-btn-spinner').style.display = 'none';
    btn.disabled = false;
}

function ezValidateForm(formId) {
    const form = document.getElementById(formId);
    const name = form.querySelector('input[name="name"]').value.trim();
    const phone = form.querySelector('input[name="phone"]').value.trim();
    const email = form.querySelector('input[name="email"]').value.trim();
    const message = form.querySelector('textarea[name="message"]').value.trim();

    if (!name || !phone || !email || !message) {
        alert('Please fill in all required fields.');
        return false;
    }
    const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRx.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }
    
    // Check select fields
    const selects = form.querySelectorAll('select[required]');
    for (let s of selects) {
        if (!s.value) {
            alert('Please select all required options.');
            return false;
        }
    }
    return true;
}

// ===== FORM SUBMISSIONS =====
document.addEventListener('DOMContentLoaded', function() {

    // Elite Form
    const eliteForm = document.getElementById('eliteForm');
    if (eliteForm) {
        eliteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            if (!ezValidateForm('eliteForm')) return;
            ezShowLoading('elite-submit-btn');

            grecaptcha.ready(function() {
                grecaptcha.execute('6Ledy8UrAAAAAGLUn3toR4y2awVaNUkt0iyOlVLU', {action: 'elite_inquiry'})
                    .then(function(token) {
                        if (token && token.length > 0) {
                            document.getElementById('g-recaptcha-response-elite').value = token;
                            eliteForm.submit();
                        } else {
                            ezHideLoading('elite-submit-btn');
                            alert('Security verification failed. Please try again.');
                        }
                    })
                    .catch(function(err) {
                        console.error('reCAPTCHA error:', err);
                        ezHideLoading('elite-submit-btn');
                        alert('Security verification failed. Please refresh and try again.');
                    });
            });
        });
    }

    // Zneus Form
    const zneusForm = document.getElementById('zneusForm');
    if (zneusForm) {
        zneusForm.addEventListener('submit', function(e) {
            e.preventDefault();
            if (!ezValidateForm('zneusForm')) return;
            ezShowLoading('zneus-submit-btn');

            grecaptcha.ready(function() {
                grecaptcha.execute('6Ledy8UrAAAAAGLUn3toR4y2awVaNUkt0iyOlVLU', {action: 'zneus_inquiry'})
                    .then(function(token) {
                        if (token && token.length > 0) {
                            document.getElementById('g-recaptcha-response-zneus').value = token;
                            zneusForm.submit();
                        } else {
                            ezHideLoading('zneus-submit-btn');
                            alert('Security verification failed. Please try again.');
                        }
                    })
                    .catch(function(err) {
                        console.error('reCAPTCHA error:', err);
                        ezHideLoading('zneus-submit-btn');
                        alert('Security verification failed. Please refresh and try again.');
                    });
            });
        });
    }
});

// Reset loading on back button
window.addEventListener('pageshow', function() {
    ezHideLoading('elite-submit-btn');
    ezHideLoading('zneus-submit-btn');
});
document.addEventListener('visibilitychange', function() {
    if (document.visibilityState === 'visible') {
        ezHideLoading('elite-submit-btn');
        ezHideLoading('zneus-submit-btn');
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
</script>

<?php include 'include/footer.php'; ?>
