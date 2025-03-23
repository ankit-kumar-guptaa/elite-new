<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions - Elite Corporate Solutions</title>

    <?php include 'include/assets.php'; ?>
    <style>
        .terms-container {
            max-width: 1240px;
            margin: 60px auto;
            padding: 0 30px;
            font-family: 'Roboto', Arial, sans-serif;
            background: #f9fafc;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }
        .terms-header {
            background: linear-gradient(90deg, #2c3e50, #3498db);
            color: white;
            padding: 40px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .terms-header h1 {
            font-size: 42px;
            margin: 0;
            font-weight: 700;
        }
        .terms-content {
            padding: 40px;
        }
        .terms-section {
            margin-bottom: 40px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        .terms-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        .terms-section h2 {
            color: #2c3e50;
            font-size: 26px;
            margin-bottom: 15px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .terms-section p {
            color: #555;
            font-size: 16px;
            line-height: 1.9;
            margin: 10px 0;
        }
        .terms-list {
            margin: 15px 0 0 30px;
            list-style-type: none;
        }
        .terms-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 12px;
            color: #666;
        }
        .terms-list li:before {
            content: "✓";
            color: #3498db;
            position: absolute;
            left: 0;
            font-weight: bold;
        }
        .last-updated {
            text-align: center;
            color: #888;
            font-style: italic;
            font-size: 14px;
            padding: 20px 0;
            border-top: 1px solid #eee;
        }
        @media (max-width: 768px) {
            .terms-header h1 {
                font-size: 32px;
            }
            .terms-section h2 {
                font-size: 22px;
            }
            .terms-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="main-page-wrapper">
        <?php include_once 'include/header.php'; ?>

        <div class="terms-container">
            <div class="terms-header">
                <h1>Terms and Conditions</h1>
            </div>

            <div class="terms-content">
                <div class="terms-section">
                    <h2>1. Introduction</h2>
                    <p>Welcome to Elite Corporate Solutions, your trusted partner in staffing and business solutions. These Terms and Conditions ("Terms") govern your access to and use of our website (www.elitecorporatesolutions.com), as well as our services including temporary staffing, permanent placement, payroll management, and employee solutions. By engaging with us, you agree to these legally binding terms.</p>
                    <p>Our mission is to streamline your workforce needs, and these Terms ensure a fair and transparent relationship between Elite Corporate Solutions and our valued clients.</p>
                </div>

                <div class="terms-section">
                    <h2>2. Our Services</h2>
                    <p>We specialize in providing:</p>
                    <ul class="terms-list">
                        <li>Temporary staffing for short-term business needs</li>
                        <li>Permanent placement for long-term workforce solutions</li>
                        <li>Payroll services to simplify employee compensation</li>
                        <li>Employee management and HR support</li>
                    </ul>
                    <p>To utilize these services, you must provide accurate information, comply with our agreements, and adhere to applicable labor laws.</p>
                </div>

                <div class="terms-section">
                    <h2>3. User Obligations</h2>
                    <p>As a user or client, you are responsible for:</p>
                    <ul class="terms-list">
                        <li>Using our website and services ethically and legally</li>
                        <li>Ensuring all data provided (e.g., employee details, business requirements) is accurate and current</li>
                        <li>Not using our platform to solicit employees or clients directly, bypassing our services</li>
                        <li>Respecting the confidentiality of any proprietary information shared during our engagement</li>
                        <li>Not attempting to hack, disrupt, or misuse our website or systems</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h2>4. Intellectual Property Rights</h2>
                    <p>All content on our website – including text, designs, logos, recruitment tools, and service descriptions – is owned by Elite Corporate Solutions or our licensed partners. You may not:</p>
                    <ul class="terms-list">
                        <li>Reproduce or distribute our materials without explicit written permission</li>
                        <li>Use our branding or trademarks for your own marketing purposes</li>
                        <li>Create derivative works based on our proprietary content</li>
                    </ul>
                    <p>Limited use is permitted solely for engaging with our services as intended.</p>
                </div>

                <div class="terms-section">
                    <h2>5. Fees and Payment Terms</h2>
                    <p>Our services are subject to the following payment conditions:</p>
                    <ul class="terms-list">
                        <li>Invoices must be paid within [Insert Payment Term, e.g., 30 days] of issuance</li>
                        <li>Late payments may incur a penalty of [Insert Penalty, e.g., 1.5% per month]</li>
                        <li>Fees for staffing services are based on agreed rates per employee or project</li>
                        <li>Refunds are not provided unless explicitly stated in a signed service contract</li>
                        <li>All payments must be made via approved methods (e.g., bank transfer, credit card)</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h2>6. Confidentiality</h2>
                    <p>We value your privacy and business secrets. We commit to:</p>
                    <ul class="terms-list">
                        <li>Protecting sensitive information shared during staffing or payroll processes</li>
                        <li>Not disclosing your data to third parties except as required by law or service delivery</li>
                    </ul>
                    <p>You, in turn, agree not to disclose our proprietary methods or pricing structures to competitors.</p>
                </div>

                <div class="terms-section">
                    <h2>7. Limitation of Liability</h2>
                    <p>Elite Corporate Solutions is not responsible for:</p>
                    <ul class="terms-list">
                        <li>Losses due to employee performance once placed</li>
                        <li>Damages from third-party actions (e.g., payment processors, job boards)</li>
                        <li>Business interruptions caused by factors beyond our control (e.g., natural disasters)</li>
                    </ul>
                    <p>Our liability is capped at the total fees paid by you for the specific service in question.</p>
                </div>

                <div class="terms-section">
                    <h2>8. Termination of Services</h2>
                    <p>We may suspend or terminate your access if:</p>
                    <ul class="terms-list">
                        <li>You violate these Terms or any service agreement</li>
                        <li>Payments remain unpaid beyond the grace period</li>
                        <li>We detect misuse of our staffing resources or website</li>
                    </ul>
                    <p>You may terminate our services by providing 30 Days written notice.</p>
                </div>

                <div class="terms-section">
                    <h2>9. Dispute Resolution</h2>
                    <p>Any disputes arising from these Terms will be governed by the laws of [Insert State/Country, e.g., California, USA]. Resolution will proceed through:</p>
                    <ul class="terms-list">
                        <li>Initial negotiation between parties</li>
                        <li>Mediation if negotiation fails</li>
                        <li>Binding arbitration or court proceedings in [Insert Jurisdiction]</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h2>10. Amendments</h2>
                    <p>We reserve the right to update these Terms at our discretion. Updates will be posted here, and significant changes will be communicated via email to active clients. Continued use post-amendment signifies your acceptance.</p>
                </div>

                <div class="terms-section">
                    <h2>11. Contact Us</h2>
                    <p>For inquiries or clarifications, reach us at:</p>
                    <ul class="terms-list">
                        <li>Email: info@elitecorporatesolutions.com</li>
                        <li>Phone: +91 9870364340</li>
                        <li>Address: A-83, Okhla Phase II, New Delhi – 110020, India</li>
                    </ul>
                </div>

                <p class="last-updated">Last Updated: March 23, 2025</p>
            </div>
        </div>

        <?php include "include/footer.php"; ?>
    </div>
</body>
</html>