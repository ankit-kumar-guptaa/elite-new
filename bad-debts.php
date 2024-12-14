<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Corporate Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Arial', sans-serif;
        }

        .section-header {
            background: linear-gradient(to right, #6bb6ff, #92cfff);
            color: white;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .solutions-box {
            background-color: #eaf4ff;
            color: #333;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .solutions-box ul {
            list-style-type: none;
            padding: 0;
        }

        .solutions-box ul li {
            margin: 5px 0;
        }

        .contact-card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
            background-color: #f7fcff;
        }

        .btn-primary {
            background-color: #6bb6ff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #92cfff;
        }

        .text-highlight {
            color: #007bff;
        }

        /* Mission, Values, and Differentiators Styling */
        .mvd-section {
            background-color: #f7fcff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .mvd-section h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        .mvd-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .mvd-card {
            flex: 1;
            min-width: 250px;
            margin: 10px;
            padding: 20px;
            background: #eaf4ff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        .mvd-card h4 {
            color: #007bff;
            margin-bottom: 15px;
        }

        .mvd-card:after {
            content: '';
            position: absolute;
            top: 50%;
            right: -20px;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            background-color: #eaf4ff;
            clip-path: polygon(0 50%, 100% 0, 100% 100%);
        }

        .mvd-card:last-child:after {
            display: none;
        }

        .mvd-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mvd-card ul li {
            margin: 5px 0;
        }

        /* Impact Section Styling */
        .impact-section {
            background-color: #f7fcff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .impact-section h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        .impact-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .impact-list li {
            margin: 10px;
            flex: 1 1 calc(45% - 20px);
            display: flex;
            align-items: center;
            background: #eaf4ff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .impact-list li img {
            width: 40px;
            height: 40px;
            margin-right: 15px;
        }

        .impact-list li span {
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="bg-light text-center py-5">
        <h1 class="text-highlight">Elite Corporate Solutions</h1>
        <p class="lead">Helping You to Recover Doubtful & Bad Debts</p>
    </header>

    <!-- Importance Section -->
    <section class="container my-5">
        <div class="section-header">
            <h2>Importance of Collecting – Doubtful & Bad Debts</h2>
        </div>
        <p class="mt-3">Business-to-Business (B2B) collections are vital to any company as collecting old & bad dues will help you to optimize the organization’s working capital position, lower DSO, write-offs, and improve cash flow along with profits.</p>
    </section>

    <!-- About Us Section -->
    <section class="container my-5">
        <div class="section-header">
            <h2>About Us</h2>
        </div>
        <div class="row mt-4">
            <div class="col-md-8">
                <p><strong class="text-highlight">Elite Corporate Solutions (ECS)</strong> has been serving since 2011 as a multi-discipline business-to-business provider of efficient solutions to Intelligent Indian corporates. Our services have helped progressive organizations focus on their core business competencies and outsource the non-core and transactional activities. Through our network of 8 offices in 6 major cities, we provide an India-wide service network for our client’s varied business requirements.</p>
                <p><strong class="text-highlight">ECS</strong> understands the challenges to the organization and their needs well and provides efficient Integrated Solutions under one roof with the expertise of our team members from multi-disciplinary approaches comprising Finance, Legal, Management, and Business Development. Our robust delivery model and infrastructure ensure a high level of customer satisfaction to each client.</p>
            </div>
            <div class="col-md-4">
                <div class="solutions-box">
                    <h4 class="text-center text-highlight">Our Solutions</h4>
                    <ul>
                        <li>Bad Debts Collection</li>
                        <li>Accounts Receivable Outsourcing</li>
                        <li>Recruitment & HR Solution</li>
                        <li>Corporate Leasing</li>
                        <li>Startup Support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center text-highlight">Our Solutions</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <h4>Bad Debts Collection</h4>
                </div>
                <div class="col-md-4">
                    <h4>Accounts Receivable Outsourcing</h4>
                </div>
                <div class="col-md-4">
                    <h4>Recruitment & HR Solution</h4>
                </div>
                <div class="col-md-4">
                    <h4>Corporate Leasing</h4>
                </div>
                <div class="col-md-4">
                    <h4>Startup Support</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission, Values, and Differentiators Section -->
    <section class="container my-5 mvd-section">
        <h2>Mission, Values, and Differentiators</h2>
        <div class="mvd-row">
            <div class="mvd-card">
                <h4>Mission</h4>
                <p>We live our mission by consistently exceeding our customers’ expectations for high quality, fast and on-time delivery, low pricing, and outstanding customer service – thereby becoming strategic partners and an extension of their operations.</p>
            </div>
            <div class="mvd-card">
                <h4>Values</h4>
                <ul>
                    <li>Excellent Customer Service and Responsiveness</li>
                    <li>Ethics and Integrity</li>
                    <li>Confidentiality of Client Information</li>
                    <li>Continuous Improvement and Innovation</li>
                    <li>Transparency and Fun as a Way of Life</li>
                </ul>
            </div>
            <div class="mvd-card">
                <h4>Our Key Differentiators</h4>
                <ul>
                    <li>A Robust Operations Excellence Model</li>
                    <li>A Young Company with Enthusiastic Personnel</li>
                    <li>Quick, Flexible, and Easy to Do Business Company</li>
                    <li>Guaranteed Results</li>
                    <li>Partner-Based Approach</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact-section">
        <div class="container">
            <h2>Impact of Recovery on Your Business</h2>
            <ul class="impact-list">
                <li>
                    <img src="https://img.icons8.com/fluency/48/increase-profit.png" alt="Increase Profit">
                    <span>Increase Profit by reducing Provision for Doubtful Debts</span>
                </li>
                <li>
                    <img src="https://img.icons8.com/fluency/48/cash-flow.png" alt="Improve Cash Flow">
                    <span>Improve Cash Flow</span>
                </li>
                <li>
                    <img src="https://img.icons8.com/fluency/48/money-box.png" alt="Working Capital">
                    <span>Enhance Your Working Capital Base</span>
                </li>
                <li>
                    <img src="https://img.icons8.com/fluency/48/no-bad-debt.png" alt="Avoid Bad Debts">
                    <span>Avoid Written Off Receivable as Bad Debts</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- USP Section -->
    <section class="container my-5">
        <h2 class="text-center text-highlight">Our Unique Selling Points</h2>
        <ul>
            <li>High Success Rates</li>
            <li>No Collection – No Fee Policy</li>
            <li>Amicable Settlements</li>
            <li>Wide Reach (Local and Global)</li>
            <li>Expert Team with Legal and Financial Expertise</li>
        </ul>
    </section>

    <!-- Contact Section -->
    <footer class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card contact-card p-3">
                        <h4>Contact Us</h4>
                        <p><strong>Elite Corporate Solutions Private Limited</strong></p>
                        <p>A-83 (1st Floor) Okhla Phase – II, New Delhi -110019 India</p>
                        <p>Phone: +91 9870364340</p>
                        <p>Email: <a href="mailto:info@elitecorporatesolutions.com">info@elitecorporatesolutions.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <h4>Visit Our Website</h4>
                    <a href="http://www.elitecorporatesolutions.com" class="btn btn-primary mt-3">www.elitecorporatesolutions.com</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
