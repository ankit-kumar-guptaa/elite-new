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
/* ========== RESET & GLOBAL ========== */
.ez-page *, .ez-page *::before, .ez-page *::after {
    margin: 0; padding: 0; box-sizing: border-box;
}
.ez-page {
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    color: #1a1a2e;
    overflow-x: hidden;
}

/* ========== HERO — CLEAN WHITE PROFESSIONAL ========== */
.ez-hero {
    position: relative;
    min-height: 100vh;
    background: #ffffff;
    display: flex;
    align-items: center;
    padding: 90px 0 40px;
    overflow: hidden;
}
/* Subtle top accent line */
.ez-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #1e293b, #2563eb, #1e293b);
    z-index: 10;
}
/* Very subtle pattern bg */
.ez-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(circle at 1px 1px, rgba(0,0,0,0.02) 1px, transparent 0);
    background-size: 32px 32px;
    pointer-events: none;
}

.ez-hero-inner {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    align-items: center;
    gap: 56px;
    width: 100%;
}

/* ---- LEFT COLUMN: COPY ---- */
.ez-hero-left {
    flex: 1;
    min-width: 0;
}
.ez-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #eff6ff;
    border: 1px solid #dbeafe;
    padding: 7px 16px;
    border-radius: 50px;
    color: #2563eb;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    margin-bottom: 20px;
    animation: ez-fadeIn 0.5s ease-out;
}
.ez-hero-left h1 {
    font-size: clamp(30px, 4vw, 48px);
    font-weight: 800;
    color: #0f172a;
    line-height: 1.15;
    margin-bottom: 16px;
    animation: ez-fadeIn 0.5s ease-out 0.1s both;
}
.ez-hero-left h1 .ez-grad {
    color: #2563eb;
    -webkit-text-fill-color: #2563eb;
}
.ez-hero-left .ez-hero-desc {
    font-size: 15px;
    color: #64748b;
    line-height: 1.7;
    margin-bottom: 28px;
    max-width: 480px;
    animation: ez-fadeIn 0.5s ease-out 0.2s both;
}

/* Trust bullets */
.ez-trust-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-bottom: 32px;
    animation: ez-fadeIn 0.5s ease-out 0.3s both;
}
.ez-trust-list li {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #334155;
    font-size: 14px;
    font-weight: 500;
}
.ez-trust-list li .ez-check {
    width: 22px;
    height: 22px;
    border-radius: 6px;
    background: #ecfdf5;
    color: #059669;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    flex-shrink: 0;
}

/* Stats row */
.ez-hero-stats-row {
    display: flex;
    gap: 28px;
    flex-wrap: wrap;
    padding-top: 24px;
    border-top: 1px solid #e2e8f0;
    animation: ez-fadeIn 0.5s ease-out 0.4s both;
}
.ez-hs {
    text-align: left;
}
.ez-hs-val {
    font-size: 26px;
    font-weight: 800;
    color: #0f172a;
}
.ez-hs-val span {
    color: #2563eb;
}
.ez-hs-lbl {
    font-size: 12px;
    color: #94a3b8;
    font-weight: 500;
    letter-spacing: 0.5px;
}

@keyframes ez-fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ---- RIGHT COLUMN: FORM ---- */
.ez-hero-right {
    width: 420px;
    flex-shrink: 0;
    animation: ez-fadeIn 0.6s ease-out 0.3s both;
}

.ez-form-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 0;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0,0,0,0.04), 0 20px 50px rgba(0,0,0,0.06);
}

/* Form header */
.ez-form-header {
    padding: 20px 24px 14px;
    text-align: center;
    border-bottom: 1px solid #f1f5f9;
    background: #f8fafc;
}
.ez-form-header h3 {
    font-size: 17px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 2px;
}
.ez-form-header p {
    font-size: 12px;
    color: #94a3b8;
}

/* Form Tabs */
.ez-form-tabs {
    display: flex;
    margin: 0 16px;
    background: #f1f5f9;
    border-radius: 10px;
    padding: 3px;
    margin-top: 12px;
}
.ez-form-tab {
    flex: 1;
    padding: 10px 8px;
    border: none;
    background: transparent;
    color: #94a3b8;
    font-size: 12.5px;
    font-weight: 600;
    font-family: 'Inter', sans-serif;
    cursor: pointer;
    border-radius: 8px;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
}
.ez-form-tab.ez-tab-active {
    color: #fff;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}
.ez-form-tab i {
    font-size: 13px;
}
.ez-tab-elite.ez-tab-active {
    background: #1e293b;
}
.ez-tab-zneus.ez-tab-active {
    background: #2563eb;
}

/* Form Body */
.ez-form-body {
    padding: 18px 20px 22px;
}
.ez-form-panel {
    display: none;
}
.ez-form-panel.ez-panel-active {
    display: block;
    animation: ez-fadeIn 0.3s ease-out;
}

.ez-fg {
    margin-bottom: 11px;
}
.ez-fg input,
.ez-fg select,
.ez-fg textarea {
    width: 100%;
    padding: 11px 14px;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    color: #0f172a;
    font-size: 13px;
    font-family: 'Inter', sans-serif;
    transition: all 0.25s ease;
    outline: none;
}
.ez-fg input::placeholder,
.ez-fg textarea::placeholder {
    color: #94a3b8;
}
.ez-fg select {
    color: #64748b;
    appearance: none;
    -webkit-appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10' fill='%2394a3b8' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 01.753 1.659l-4.796 5.48a1 1 0 01-1.506 0z'/%3E%3C/svg%3E");
    background-color: #f8fafc;
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 32px;
}
.ez-fg select option {
    background: #fff;
    color: #0f172a;
}
.ez-fg input:focus,
.ez-fg select:focus,
.ez-fg textarea:focus {
    border-color: #2563eb;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(37,99,235,0.08);
}
.ez-fg textarea {
    min-height: 60px;
    resize: vertical;
}
.ez-fg-row {
    display: flex;
    gap: 10px;
}
.ez-fg-row .ez-fg {
    flex: 1;
}

/* Submit Buttons */
.ez-submit {
    width: 100%;
    padding: 13px;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 700;
    font-family: 'Inter', sans-serif;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-top: 4px;
    letter-spacing: 0.3px;
}
.ez-submit-elite {
    background: #1e293b;
    color: #fff;
}
.ez-submit-elite:hover {
    background: #0f172a;
    box-shadow: 0 6px 20px rgba(15,23,42,0.25);
    transform: translateY(-1px);
}
.ez-submit-zneus {
    background: #2563eb;
    color: #fff;
}
.ez-submit-zneus:hover {
    background: #1d4ed8;
    box-shadow: 0 6px 20px rgba(37,99,235,0.3);
    transform: translateY(-1px);
}
.ez-submit:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none !important;
    box-shadow: none !important;
}

/* Form footer trust line */
.ez-form-footer {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    margin-top: 12px;
    padding-top: 12px;
    border-top: 1px solid #f1f5f9;
}
.ez-form-footer i {
    color: #059669;
    font-size: 12px;
}
.ez-form-footer span {
    font-size: 11px;
    color: #94a3b8;
}

/* ========== SOCIAL PROOF STRIP ========== */
.ez-proof-strip {
    background: #fff;
    padding: 24px 20px;
    border-bottom: 1px solid #f0f0f0;
}
.ez-proof-inner {
    max-width: 1000px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
}
.ez-proof-item {
    display: flex;
    align-items: center;
    gap: 10px;
}
.ez-proof-item .ez-pi-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}
.ez-pi-green { background: rgba(52,211,153,0.1); color: #059669; }
.ez-pi-blue { background: rgba(59,130,246,0.1); color: #2563eb; }
.ez-pi-orange { background: rgba(245,158,11,0.1); color: #d97706; }
.ez-pi-purple { background: rgba(139,92,246,0.1); color: #7c3aed; }
.ez-proof-item .ez-pi-text strong {
    display: block;
    font-size: 18px;
    font-weight: 800;
    color: #1a1a2e;
    line-height: 1.2;
}
.ez-proof-item .ez-pi-text span {
    font-size: 12px;
    color: #94a3b8;
    font-weight: 500;
}

/* ========== FEATURES SECTIONS ========== */
.ez-section {
    padding: 72px 20px;
}
.ez-section-alt {
    background: #f8f9fc;
}
.ez-container {
    max-width: 1140px;
    margin: 0 auto;
}
.ez-sec-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 5px 14px;
    border-radius: 50px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 14px;
}
.ez-badge-r { background: rgba(195,37,40,0.07); color: #c32528; }
.ez-badge-b { background: rgba(67,97,238,0.07); color: #4361ee; }

.ez-sec-title {
    font-size: clamp(26px, 3.5vw, 38px);
    font-weight: 800;
    color: #1a1a2e;
    line-height: 1.2;
    margin-bottom: 10px;
}
.ez-sec-desc {
    font-size: 15px;
    color: #64748b;
    max-width: 560px;
    line-height: 1.65;
    margin-bottom: 40px;
}
.ez-sec-center { text-align: center; }
.ez-sec-center .ez-sec-desc { margin-left: auto; margin-right: auto; }

/* Feature Grid */
.ez-feat-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}
.ez-feat {
    background: #fff;
    border-radius: 14px;
    padding: 26px 22px;
    border: 1px solid #e8ecf1;
    transition: all 0.3s ease;
    position: relative;
}
.ez-section-alt .ez-feat {
    background: #fff;
}
.ez-feat:hover {
    border-color: transparent;
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.07);
}
.ez-feat .ez-feat-num {
    position: absolute;
    top: 14px;
    right: 18px;
    font-size: 44px;
    font-weight: 900;
    color: rgba(0,0,0,0.03);
    line-height: 1;
}
.ez-feat-ic {
    width: 44px;
    height: 44px;
    border-radius: 11px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    margin-bottom: 14px;
}
.ez-fic-r { background: rgba(195,37,40,0.08); color: #c32528; }
.ez-fic-b { background: rgba(67,97,238,0.08); color: #4361ee; }
.ez-feat h4 {
    font-size: 15px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 6px;
}
.ez-feat p {
    font-size: 13px;
    color: #64748b;
    line-height: 1.6;
}

/* ========== PRICING ========== */
.ez-pricing {
    background: linear-gradient(135deg, #0b0f1a, #141833, #1e1b4b);
    padding: 72px 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.ez-pricing::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 50% 50%, rgba(99,102,241,0.08) 0%, transparent 60%);
}
.ez-pricing-in {
    position: relative;
    z-index: 2;
}
.ez-price-big {
    font-size: clamp(36px, 6vw, 64px);
    font-weight: 900;
    color: #fff;
    margin-bottom: 6px;
}
.ez-price-big span {
    background: linear-gradient(135deg, #818cf8, #c084fc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.ez-pricing h2 {
    font-size: clamp(20px, 3vw, 30px);
    font-weight: 700;
    color: #fff;
    margin-bottom: 6px;
}
.ez-pricing .ez-price-note {
    color: rgba(255,255,255,0.4);
    font-size: 13px;
    margin-bottom: 28px;
}
.ez-price-checks {
    display: flex;
    justify-content: center;
    gap: 24px;
    flex-wrap: wrap;
    margin-bottom: 32px;
}
.ez-pc {
    display: flex;
    align-items: center;
    gap: 6px;
    color: rgba(255,255,255,0.75);
    font-size: 13px;
    font-weight: 500;
}
.ez-pc i { color: #34d399; }
.ez-cta-main {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 32px;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 700;
    text-decoration: none;
    background: linear-gradient(135deg, #4361ee, #6366f1);
    color: #fff;
    transition: all 0.3s ease;
    font-family: 'Inter', sans-serif;
}
.ez-cta-main:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(67,97,238,0.4);
    color: #fff;
    text-decoration: none;
}

/* ========== CONTACT ========== */
.ez-contact {
    padding: 72px 20px;
    background: #fff;
}
.ez-contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
    gap: 20px;
    margin-top: 40px;
}
.ez-cc {
    text-align: center;
    padding: 24px 16px;
    border-radius: 14px;
    border: 1px solid #e8ecf1;
    transition: all 0.3s ease;
}
.ez-cc:hover {
    border-color: transparent;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
    transform: translateY(-3px);
}
.ez-cc-ic {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin: 0 auto 12px;
}
.ez-cic-g { background: rgba(37,211,102,0.1); color: #25d366; }
.ez-cic-r { background: rgba(195,37,40,0.1); color: #c32528; }
.ez-cic-b { background: rgba(67,97,238,0.1); color: #4361ee; }
.ez-cic-p { background: rgba(139,92,246,0.1); color: #8b5cf6; }
.ez-cc h4 {
    font-size: 14px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 6px;
}
.ez-cc a {
    display: block;
    color: #4361ee;
    font-size: 13px;
    text-decoration: none;
    margin-bottom: 3px;
}
.ez-cc a:hover { color: #c32528; }

/* ========== FINAL CTA ========== */
.ez-final {
    background: linear-gradient(135deg, #261a6a, #1a1a4e);
    padding: 56px 20px;
    text-align: center;
}
.ez-final h2 {
    font-size: clamp(22px, 3vw, 32px);
    font-weight: 800;
    color: #fff;
    margin-bottom: 10px;
}
.ez-final p {
    color: rgba(255,255,255,0.55);
    font-size: 14px;
    margin-bottom: 24px;
}
.ez-final-btns {
    display: flex;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
}
.ez-fb {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    padding: 11px 24px;
    border-radius: 10px;
    border: 1px solid rgba(255,255,255,0.15);
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}
.ez-fb:hover { background: rgba(255,255,255,0.08); color: #fff; text-decoration: none; }
.ez-fb-wa { background: #25d366; border-color: #25d366; }
.ez-fb-wa:hover { background: #1ea952; }
.ez-fb-call { background: linear-gradient(135deg, #c32528, #e74c3c); border-color: #c32528; }

/* ========== RESPONSIVE ========== */
@media (max-width: 900px) {
    .ez-hero-inner {
        flex-direction: column;
        gap: 32px;
        text-align: center;
    }
    .ez-hero-left .ez-hero-desc { margin-left: auto; margin-right: auto; }
    .ez-trust-list { align-items: center; }
    .ez-hero-stats-row { justify-content: center; }
    .ez-hero-right { width: 100%; max-width: 420px; }
    .ez-hero { padding: 100px 0 40px; }
    .ez-hero::before { display: none; }
}
@media (max-width: 500px) {
    .ez-fg-row { flex-direction: column; gap: 0; }
    .ez-hero-right { max-width: 100%; }
    .ez-proof-inner { gap: 20px; }
    .ez-feat-grid { grid-template-columns: 1fr; }
    .ez-price-checks { flex-direction: column; align-items: center; gap: 8px; }
}

/* ========== SPINNER ========== */
.ez-btn-spinner i { margin-right: 5px; }
.fa-spin { animation: fa-spin 1s infinite linear; }
@keyframes fa-spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
</style>
</head>

<body>
<div class="main-page-wrapper">

<?php include_once 'include/header.php'; ?>

<div class="ez-page">

<!-- ==================== HERO — SPLIT LAYOUT ==================== -->
<section class="ez-hero" id="hero">

    <div class="ez-hero-inner">

        <!-- LEFT: Compelling Copy -->
        <div class="ez-hero-left">
            <div class="ez-hero-badge">⚡ Trusted by 500+ Companies since 2010</div>

            <h1>Smarter HR.<br><span class="ez-grad">Stronger Business.</span></h1>

            <p class="ez-hero-desc">
                End-to-end HR outsourcing, recruitment & AI-powered employee monitoring. 
                We handle your people operations so you can focus on growth.
            </p>

            <ul class="ez-trust-list">
                <li>
                    <span class="ez-check"><i class="fas fa-check"></i></span>
                    End-to-End Hiring & Recruitment (IT & Non-IT)
                </li>
                <li>
                    <span class="ez-check"><i class="fas fa-check"></i></span>
                    Payroll, Compliance & HR Outsourcing
                </li>
                <li>
                    <span class="ez-check"><i class="fas fa-check"></i></span>
                    Zneus AI Employee Monitoring — Boost Productivity 40%
                </li>
                <li>
                    <span class="ez-check"><i class="fas fa-check"></i></span>
                    Plans starting at just ₹999/month
                </li>
            </ul>

            <div class="ez-hero-stats-row">
                <div class="ez-hs">
                    <div class="ez-hs-val">14<span>+</span></div>
                    <div class="ez-hs-lbl">Years Experience</div>
                </div>
                <div class="ez-hs">
                    <div class="ez-hs-val">500<span>+</span></div>
                    <div class="ez-hs-lbl">Companies Served</div>
                </div>
                <div class="ez-hs">
                    <div class="ez-hs-val">15<span>+</span></div>
                    <div class="ez-hs-lbl">Industries</div>
                </div>
                <div class="ez-hs">
                    <div class="ez-hs-val">100K<span>+</span></div>
                    <div class="ez-hs-lbl">Candidates</div>
                </div>
            </div>
        </div>

        <!-- RIGHT: Tabbed Form -->
        <div class="ez-hero-right">
            <div class="ez-form-card">

                <div class="ez-form-header">
                    <h3>Get a Free Consultation</h3>
                    <p>Tell us what you need — we'll get back in 30 minutes</p>
                </div>

                <div class="ez-form-tabs">
                    <button class="ez-form-tab ez-tab-elite ez-tab-active" id="tabElite" onclick="ezSwitchTab('elite')">
                        <i class="fas fa-building"></i> HR Services
                    </button>
                    <button class="ez-form-tab ez-tab-zneus" id="tabZneus" onclick="ezSwitchTab('zneus')">
                        <i class="fas fa-desktop"></i> Zneus Software
                    </button>
                </div>

                <div class="ez-form-body">

                    <!-- ===== ELITE FORM ===== -->
                    <div class="ez-form-panel ez-panel-active" id="panelElite">
                        <form id="eliteForm" action="backend_elite_zneus.php" method="POST">
                            <input type="hidden" name="form_type" value="elite_inquiry">

                            <div class="ez-fg-row">
                                <div class="ez-fg">
                                    <input type="text" name="name" placeholder="Your Name *" required>
                                </div>
                                <div class="ez-fg">
                                    <input type="tel" name="phone" placeholder="Phone *" required>
                                </div>
                            </div>
                            <div class="ez-fg">
                                <input type="email" name="email" placeholder="Work Email *" required>
                            </div>
                            <div class="ez-fg">
                                <input type="text" name="company" placeholder="Company Name">
                            </div>
                            <div class="ez-fg">
                                <select name="service_needed" required>
                                    <option value="" disabled selected>What do you need? *</option>
                                    <option value="Recruitment / Hiring">Recruitment / Hiring</option>
                                    <option value="HR Outsourcing">HR Outsourcing</option>
                                    <option value="Payroll & Compliance">Payroll & Compliance</option>
                                    <option value="Training & Development">Training & Development</option>
                                    <option value="Exit Process / F&F">Exit Process / F&F</option>
                                    <option value="Policies & Documentation">Policies & Documentation</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="ez-fg">
                                <textarea name="message" placeholder="Briefly describe your requirement..." rows="2" required></textarea>
                            </div>

                            <input type="hidden" id="g-recaptcha-response-elite" name="g-recaptcha-response">

                            <button type="submit" class="ez-submit ez-submit-elite" id="elite-submit-btn">
                                <span class="ez-btn-text"><i class="fas fa-paper-plane"></i> Get Free Consultation</span>
                                <span class="ez-btn-spinner" style="display:none;"><i class="fas fa-spinner fa-spin"></i> Sending...</span>
                            </button>
                        </form>
                    </div>

                    <!-- ===== ZNEUS FORM ===== -->
                    <div class="ez-form-panel" id="panelZneus">
                        <form id="zneusForm" action="backend_elite_zneus.php" method="POST">
                            <input type="hidden" name="form_type" value="zneus_inquiry">

                            <div class="ez-fg-row">
                                <div class="ez-fg">
                                    <input type="text" name="name" placeholder="Your Name *" required>
                                </div>
                                <div class="ez-fg">
                                    <input type="tel" name="phone" placeholder="Phone *" required>
                                </div>
                            </div>
                            <div class="ez-fg">
                                <input type="email" name="email" placeholder="Work Email *" required>
                            </div>
                            <div class="ez-fg">
                                <input type="text" name="company" placeholder="Company Name">
                            </div>
                            <div class="ez-fg">
                                <select name="employee_count" required>
                                    <option value="" disabled selected>Team Size *</option>
                                    <option value="1-10">1 - 10 Employees</option>
                                    <option value="11-50">11 - 50 Employees</option>
                                    <option value="51-100">51 - 100 Employees</option>
                                    <option value="101-500">101 - 500 Employees</option>
                                    <option value="500+">500+ Employees</option>
                                </select>
                            </div>
                            <div class="ez-fg">
                                <textarea name="message" placeholder="What monitoring features interest you?" rows="2" required></textarea>
                            </div>

                            <input type="hidden" id="g-recaptcha-response-zneus" name="g-recaptcha-response">

                            <button type="submit" class="ez-submit ez-submit-zneus" id="zneus-submit-btn">
                                <span class="ez-btn-text"><i class="fas fa-rocket"></i> Get Free Zneus Demo</span>
                                <span class="ez-btn-spinner" style="display:none;"><i class="fas fa-spinner fa-spin"></i> Sending...</span>
                            </button>
                        </form>
                    </div>

                    <div class="ez-form-footer">
                        <i class="fas fa-lock"></i>
                        <span>Your data is secure. We never share your info.</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- ==================== SOCIAL PROOF STRIP ==================== -->
<div class="ez-proof-strip">
    <div class="ez-proof-inner">
        <div class="ez-proof-item">
            <div class="ez-pi-icon ez-pi-green"><i class="fas fa-check-double"></i></div>
            <div class="ez-pi-text">
                <strong>14+ Years</strong>
                <span>Industry Experience</span>
            </div>
        </div>
        <div class="ez-proof-item">
            <div class="ez-pi-icon ez-pi-blue"><i class="fas fa-users"></i></div>
            <div class="ez-pi-text">
                <strong>1,00,000+</strong>
                <span>Candidates Placed</span>
            </div>
        </div>
        <div class="ez-proof-item">
            <div class="ez-pi-icon ez-pi-orange"><i class="fas fa-chart-line"></i></div>
            <div class="ez-pi-text">
                <strong>40% Boost</strong>
                <span>In Productivity</span>
            </div>
        </div>
        <div class="ez-proof-item">
            <div class="ez-pi-icon ez-pi-purple"><i class="fas fa-star"></i></div>
            <div class="ez-pi-text">
                <strong>4.8/5 Rating</strong>
                <span>Client Satisfaction</span>
            </div>
        </div>
    </div>
</div>


<!-- ==================== ELITE HR FEATURES ==================== -->
<section class="ez-section" id="hr-services">
    <div class="ez-container">
        <div class="ez-sec-badge ez-badge-r">🏢 HR OUTSOURCING SERVICES</div>
        <h2 class="ez-sec-title">We Handle HR. You Grow Business.</h2>
        <p class="ez-sec-desc">Complete end-to-end HR outsourcing for companies of all sizes. From hiring to exit — everything managed professionally.</p>

        <div class="ez-feat-grid">
            <div class="ez-feat">
                <span class="ez-feat-num">01</span>
                <div class="ez-feat-ic ez-fic-r"><i class="fas fa-user-plus"></i></div>
                <h4>End-to-End Hiring</h4>
                <p>From sourcing to onboarding — we find the right talent, faster. Complete recruitment outsourcing.</p>
            </div>
            <div class="ez-feat">
                <span class="ez-feat-num">02</span>
                <div class="ez-feat-ic ez-fic-r"><i class="fas fa-file-invoice-dollar"></i></div>
                <h4>Payroll & Compliance</h4>
                <p>Accurate payroll, statutory compliance & attendance — all taken care of professionally.</p>
            </div>
            <div class="ez-feat">
                <span class="ez-feat-num">03</span>
                <div class="ez-feat-ic ez-fic-r"><i class="fas fa-sign-out-alt"></i></div>
                <h4>Exit Process</h4>
                <p>Smooth resignations, F&F settlements & relieving letters — hassle-free exit management.</p>
            </div>
            <div class="ez-feat">
                <span class="ez-feat-num">04</span>
                <div class="ez-feat-ic ez-fic-r"><i class="fas fa-chalkboard-teacher"></i></div>
                <h4>Policies & Training</h4>
                <p>Strong policies. Trained teams. Stay compliant always with our expert framework.</p>
            </div>
        </div>
    </div>
</section>


<!-- ==================== ZNEUS FEATURES ==================== -->
<section class="ez-section ez-section-alt" id="zneus-features">
    <div class="ez-container">
        <div class="ez-sec-badge ez-badge-b">💻 AI WORKFORCE PRODUCTIVITY</div>
        <h2 class="ez-sec-title">Zneus — Work Smarter. Achieve More.</h2>
        <p class="ez-sec-desc">Boost team productivity by 40% with AI-powered employee monitoring & productivity tools.</p>

        <div class="ez-feat-grid">
            <div class="ez-feat">
                <span class="ez-feat-num">01</span>
                <div class="ez-feat-ic ez-fic-b"><i class="fas fa-tv"></i></div>
                <h4>Live Screen Monitoring</h4>
                <p>Watch employee desktops in real-time with HD capture. Full visibility into work.</p>
            </div>
            <div class="ez-feat">
                <span class="ez-feat-num">02</span>
                <div class="ez-feat-ic ez-fic-b"><i class="fas fa-camera"></i></div>
                <h4>Automatic Screenshots</h4>
                <p>Configurable activity timeline for total transparency throughout the day.</p>
            </div>
            <div class="ez-feat">
                <span class="ez-feat-num">03</span>
                <div class="ez-feat-ic ez-fic-b"><i class="fas fa-chart-bar"></i></div>
                <h4>Smart App & Web Tracking</h4>
                <p>Identify time-wasting apps and track active hours automatically.</p>
            </div>
            <div class="ez-feat">
                <span class="ez-feat-num">04</span>
                <div class="ez-feat-ic ez-fic-b"><i class="fas fa-cogs"></i></div>
                <h4>Automated HR Tools</h4>
                <p>In-app attendance logging and instant digital leave approval.</p>
            </div>
        </div>
    </div>
</section>


<!-- ==================== PRICING ==================== -->
<section class="ez-pricing" id="pricing">
    <div class="ez-pricing-in">
        <div class="ez-sec-badge" style="background:rgba(255,255,255,0.06);color:#a5b4fc;">⚡ AFFORDABLE PLANS</div>
        <div class="ez-price-big">Starts at <span>₹999*</span></div>
        <h2>Better People Management. Bigger Impact.</h2>
        <p class="ez-price-note">*Per employee/month. Custom enterprise plans available.</p>

        <div class="ez-price-checks">
            <div class="ez-pc"><i class="fas fa-check-circle"></i> No Setup Charges</div>
            <div class="ez-pc"><i class="fas fa-check-circle"></i> Free Demo</div>
            <div class="ez-pc"><i class="fas fa-check-circle"></i> Cancel Anytime</div>
            <div class="ez-pc"><i class="fas fa-check-circle"></i> Dedicated Support</div>
        </div>

        <a href="#hero" class="ez-cta-main">
            <i class="fas fa-paper-plane"></i> Get Started Today
        </a>
    </div>
</section>


<!-- ==================== CONTACT ==================== -->
<section class="ez-contact ez-sec-center" id="contact">
    <div class="ez-container">
        <div class="ez-sec-badge ez-badge-b">📞 GET IN TOUCH</div>
        <h2 class="ez-sec-title">Let's Connect</h2>
        <p class="ez-sec-desc">Reach out via call, WhatsApp, or email. We respond within 30 minutes.</p>

        <div class="ez-contact-grid">
            <div class="ez-cc">
                <div class="ez-cc-ic ez-cic-g"><i class="fab fa-whatsapp"></i></div>
                <h4>WhatsApp</h4>
                <a href="https://wa.me/917669073000" target="_blank">+91 76690 73000</a>
            </div>
            <div class="ez-cc">
                <div class="ez-cc-ic ez-cic-r"><i class="fas fa-phone-alt"></i></div>
                <h4>Call Us</h4>
                <a href="tel:+917669073000">+91 76690 73000</a>
                <a href="tel:+919871916980">+91 98719 16980</a>
            </div>
            <div class="ez-cc">
                <div class="ez-cc-ic ez-cic-b"><i class="fas fa-envelope"></i></div>
                <h4>Email</h4>
                <a href="mailto:info@elitecorporatesolutions.com">info@elitecorporatesolutions.com</a>
                <a href="mailto:info@zneus.com">info@zneus.com</a>
            </div>
            <div class="ez-cc">
                <div class="ez-cc-ic ez-cic-p"><i class="fas fa-globe"></i></div>
                <h4>Websites</h4>
                <a href="https://www.elitecorporatesolutions.com" target="_blank">elitecorporatesolutions.com</a>
                <a href="https://zneus.com" target="_blank">zneus.com</a>
            </div>
        </div>
    </div>
</section>


<!-- ==================== FINAL CTA ==================== -->
<section class="ez-final">
    <h2>Let's Build a Stronger Workforce, Together! 🚀</h2>
    <p>Choose Elite for HR. Choose Zneus for Productivity. Choose Both for Growth.</p>
    <div class="ez-final-btns">
        <a href="https://www.elitecorporatesolutions.com" target="_blank" class="ez-fb">
            <i class="fas fa-globe"></i> Visit Website
        </a>
        <a href="tel:+917669073000" class="ez-fb ez-fb-call">
            <i class="fas fa-phone-alt"></i> Call Now
        </a>
        <a href="https://wa.me/917669073000" target="_blank" class="ez-fb ez-fb-wa">
            <i class="fab fa-whatsapp"></i> WhatsApp
        </a>
    </div>
</section>

</div><!-- .ez-page -->

<!-- ===== reCAPTCHA v3 ===== -->
<script src="https://www.google.com/recaptcha/api.js?render=6Ledy8UrAAAAAGLUn3toR4y2awVaNUkt0iyOlVLU"></script>

<script>
// ===== TAB SWITCHING =====
function ezSwitchTab(tab) {
    const tabElite = document.getElementById('tabElite');
    const tabZneus = document.getElementById('tabZneus');
    const panelElite = document.getElementById('panelElite');
    const panelZneus = document.getElementById('panelZneus');

    if (tab === 'elite') {
        tabElite.classList.add('ez-tab-active');
        tabZneus.classList.remove('ez-tab-active');
        panelElite.classList.add('ez-panel-active');
        panelZneus.classList.remove('ez-panel-active');
    } else {
        tabZneus.classList.add('ez-tab-active');
        tabElite.classList.remove('ez-tab-active');
        panelZneus.classList.add('ez-panel-active');
        panelElite.classList.remove('ez-panel-active');
    }
}

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
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }
    const selects = form.querySelectorAll('select[required]');
    for (let s of selects) {
        if (!s.value) { alert('Please select all required options.'); return false; }
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
                    }).catch(function() {
                        ezHideLoading('elite-submit-btn');
                        alert('Security verification failed. Please refresh.');
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
                    }).catch(function() {
                        ezHideLoading('zneus-submit-btn');
                        alert('Security verification failed. Please refresh.');
                    });
            });
        });
    }
});

// Reset on back/visibility
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

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(function(a) {
    a.addEventListener('click', function(e) {
        e.preventDefault();
        var t = document.querySelector(this.getAttribute('href'));
        if (t) t.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
</script>

<?php include 'include/footer.php'; ?>
