<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title>Solutions Elite Corporate Solutions - Leading Recruitment Agency in India</title>
    <meta name="description"
        content="Learn about Elite Corporate Solutions, a premier recruitment agency in India. Discover our journey, mission, and commitment to connecting top talent with leading organizations.">
    <meta name="keywords"
        content="about elite corporate solutions, recruitment company history, top recruitment agency india, HR solutions company, manpower consultancy background">
    <meta name="author" content="Elite Corporate Solutions">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="About Elite Corporate Solutions - Leading Recruitment Agency">
    <meta property="og:description"
        content="Discover Elite Corporate Solutions' journey as India's trusted recruitment partner. Learn about our mission and expertise in talent acquisition.">
    <meta property="og:image" content="https://elitecorporatesolutions.com/images/about-og-image.jpg">
    <meta property="og:url" content="https://elitecorporatesolutions.com/about">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About Elite Corporate Solutions - Leading Recruitment Agency">
    <meta name="twitter:description"
        content="Discover Elite Corporate Solutions' journey as India's trusted recruitment partner. Learn about our mission and expertise in talent acquisition.">
    <meta name="twitter:image" content="https://elitecorporatesolutions.com/images/about-twitter-card.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://elitecorporatesolutions.com/about">

    <?php include 'include/assets.php'; ?>

    
    <style>
      

     



.form-control,
.form-select {
    border-radius: 25px;
    padding: 10px 20px;
    border: 1px solid #ced4da;
    font-size: 14px;
    width: 100%;
}

.form-control:focus,
.form-select:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.btn-primary,
.btn-success {
    border-radius: 25px;
    font-size: 16px;
    font-weight: bold;
    padding: 10px 20px;
}

.btn-primary:hover {
    background-color: #0056b3;
    border: none;
}

.btn-success:hover {
    background-color: #28a745;
}

#custom-button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 25px;
    padding: 10px 20px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#custom-button:hover {
    background-color: #0056b3;
}

#custom-text {
    font-size: 14px;
    color: #6c757d;
    margin-left: 10px;
}

.row.g-3 > .col-md-4 {
    margin-bottom: 15px;
}

button {
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.text-danger {
    font-size: 12px;
    margin-top: 5px;
}

@media (max-width: 768px) {
    .row.g-3 > .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }




}


/* Captcha Container Styling */
#captcha {
    font-size: 18px;
    font-weight: bold;
    color: #444;
    padding: 10px;
    background-color: #fff;
    border: 2px solid #28a745;
    border-radius: 8px;
    width: 100%;
    text-align: center;
    letter-spacing: 3px;
    transition: border 0.3s ease, box-shadow 0.3s ease;
}

/* Captcha Text Style */
#captcha-text {
    font-size: 22px;
    font-weight: bold;
    color: #fff;
    background: linear-gradient(90deg, #1e90ff, #00bfff);
    padding: 12px 20px;
    border-radius: 6px;
    border: 2px solid #007bff;
    transition: transform 0.3s ease;
}

/* Hover Effect on Captcha Text */
#captcha-text:hover {
    transform: scale(1.1);
    cursor: pointer;
}

/* Input Style for the User to Enter CAPTCHA */
.form-control {
    font-size: 16px;
    color: #495057;
    padding: 12px 16px;
    border: 1px solid #ccc;
    border-radius: 6px;
    margin-left: 10px;
    transition: border-color 0.3s ease;
}

/* Focus Effect for Input Field */
#captcha:focus {
    border-color: #28a745;
    outline: none;
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
}

/* Captcha Error Message */
#captcha-error {
    display: none;
    font-size: 14px;
    color: #e74c3c;
    margin-top: 8px;
}

/* Enhancing the Input Group */
.input-group {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 5px;
}

/* Button Style or Submit Button if needed */
button {
    background-color: #28a745;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #218838;
}

  

</style>

</head>

<body>
    <div class="main-page-wrapper">
        <?php include_once 'include/header.php'; ?>

        <!-- Inner Banner -->
        <div class="theme-inner-banner section-spacing">
            <div class="overlay">
                <div class="container">
                    <h2>Submit CV</h2>
                </div>
            </div>
        </div>


      


<div class="container my-5">
    <form action="process_form.php" method="POST" enctype="multipart/form-data" >
        <div class="row g-3">
            <div class="col-md-4">
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name*">
                <span id="namemsg" class="text-danger"></span>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="lastName" placeholder="Last Name*">
            </div>
            <div class="col-md-4">
                <select name="gender" class="form-select">
                    <option value="U" selected>Select Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <div class="col-md-4">
                <input class="form-control" type="text" name="dateOfBirth" onfocus="(this.type='date')" onblur="(this.type='text')" min="1940-01-01" max="2006-12-31" placeholder="DOB*" required>
            </div>
            <div class="col-md-4">
                <input type="email" class="form-control" id="cont_email" name="email" placeholder="Email ID*">
                <span id="emailmsg" class="text-danger"></span>
            </div>
            <div class="col-md-4">
                <input type="text" maxlength="10" class="form-control" id="it_mobile" name="mobile_no" placeholder="Mobile No.*">
                <span id="mobilemsg" class="text-danger"></span>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="city" id="city_name" placeholder="City Name*">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="company" placeholder="Company*">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="designation" placeholder="Designation*">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="experience" placeholder="Experience (in years)*">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="current_salary" placeholder="Current CTC (INR)* Eg. 123000 In Lacs">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="educational_qualification" placeholder="Degree*">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="institute" placeholder="Institute*">
            </div>
            <div class="col-md-4">
                <select class="form-select" name="functional_area">
                    <option value="0" style="display:none;">Function*</option>
                    <option value="Administration & Facilities">Administration & Facilities</option>
                    <option value="Aviation & Aerospace">Aviation & Aerospace</option>
                    <option value="BFSI, Investments & Trading">BFSI, Investments & Trading</option>
                    <option value="Construction & Site Engineering">Construction & Site Engineering</option>
                    <option value="Consulting">Consulting</option>
                    <option value="Content, Editorial & Journalism">Content, Editorial & Journalism</option>
                    <option value="CSR & Social Service">CSR & Social Service</option>
                    <option value="Customer Success, Service & Operations">Customer Success, Service & Operations</option>
                    <option value="Data Science & Analytics">Data Science & Analytics</option>
                    <option value="Energy & Mining">Energy & Mining</option>
                    <option value="Engineering - Hardware & Networks">Engineering - Hardware & Networks</option>
                    <option value="Engineering - Software & QA">Engineering - Software & QA</option>
                    <option value="Environment Health & Safety">Environment Health & Safety</option>
                    <option value="Finance & Accounting">Finance & Accounting</option>
                    <option value="Food, Beverage & Hospitality">Food, Beverage & Hospitality</option>
                    <option value="Healthcare & Life Sciences">Healthcare & Life Sciences</option>
                    <option value="Human Resources">Human Resources</option>
                    <option value="IT & Information Security">IT & Information Security</option>
                    <option value="IT Software - Application Programme, Maintenance">IT Software - Application Programme, Maintenance</option>
                    <option value="IT Software - Client / Server Programming">IT Software - Client / Server Programming</option>
                    <option value="IT Software - DBA, Data warehousing">IT Software - DBA, Data warehousing</option>
                    <option value="IT Software - eCommerce, Internet Technologies">IT Software - eCommerce, Internet Technologies</option>
                    <option value="IT Software - Embed, EDA, VLSI, ASIC, Chip Design">IT Software - Embed, EDA, VLSI, ASIC, Chip Design</option>
                    <option value="IT Software - ERP, CRM">IT Software - ERP, CRM</option>
                    <option value="IT Software - Mainframe">IT Software - Mainframe</option>
                    <option value="IT Software - Middleware">IT Software - Middleware</option>
                    <option value="IT Software - Mobile">IT Software - Mobile</option>
                    <option value="IT Software - Other">IT Software - Other</option>
                    <option value="IT Software - QA & Testing">IT Software - QA & Testing</option>
                    <option value="IT Software - System Programming">IT Software - System Programming</option>
                    <option value="IT Software - Systems, EDP, MIS">IT Software - Systems, EDP, MIS</option>
                    <option value="IT Software - Telecom Software">IT Software - Telecom Software</option>
                    <option value="Legal & Regulatory">Legal & Regulatory</option>
                    <option value="Marketing & Communication">Marketing & Communication</option>
                    <option value="Media Production & Entertainment">Media Production & Entertainment</option>
                    <option value="Merchandising, Retail & eCommerce">Merchandising, Retail & eCommerce</option>
                    <option value="Other">Other</option>
                    <option value="Packaging">Packaging</option>
                    <option value="Procurement & Supply Chain">Procurement & Supply Chain</option>
                    <option value="Product Management">Product Management</option>
                    <option value="Production, Manufacturing & Engineering">Production, Manufacturing & Engineering</option>
                    <option value="Project & Program Management">Project & Program Management</option>
                    <option value="Quality Assurance">Quality Assurance</option>
                    <option value="Research & Development">Research & Development</option>
                    <option value="Risk Management & Compliance">Risk Management & Compliance</option>
                    <option value="Sales & Business Development">Sales & Business Development</option>
                    <option value="Security Services">Security Services</option>
                    <option value="Shipping & Maritime">Shipping & Maritime</option>
                    <option value="Sports, Fitness & Personal Care">Sports, Fitness & Personal Care</option>
                    <option value="Strategic & Top Management">Strategic & Top Management</option>
                    <option value="Teaching & Training">Teaching & Training</option>
                    <option value="UX, Design & Architecture">UX, Design & Architecture</option>
                </select>
            </div>
            <div class="col-md-4">
                <select class="form-select" name="industry">
                    <option value="0">Industry*</option>
                    <option value="Accounting / Auditing">Accounting / Auditing</option>
                    <option value="Advertising & Marketing">Advertising & Marketing</option>
                    <option value="Agriculture / Forestry / Fishing">Agriculture / Forestry / Fishing</option>
                    <option value="Analytics / KPO / Research">Analytics / KPO / Research</option>
                    <option value="Animation & VFX">Animation & VFX</option>
                    <option value="Auto Components">Auto Components</option>
                    <option value="Automobile">Automobile</option>
                    <option value="Aviation">Aviation</option>
                    <option value="Banking">Banking</option>
                    <option value="Beauty & Personal Care">Beauty & Personal Care</option>
                    <option value="Beverage">Beverage</option>
                    <option value="Biotechnology">Biotechnology</option>
                    <option value="BPO / Call Centre">BPO / Call Centre</option>
                    <option value="Building Material">Building Material</option>
                    <option value="Chemicals">Chemicals</option>
                    <option value="Clinical Research / Contract Research">Clinical Research / Contract Research</option>
                    <option value="Consumer Electronics & Appliances">Consumer Electronics & Appliances</option>
                    <option value="Content Development / Language">Content Development / Language</option>
                    <option value="Courier / Logistics">Courier / Logistics</option>
                    <option value="Defence & Aerospace">Defence & Aerospace</option>
                    <option value="E-Learning / EdTech">E-Learning / EdTech</option>
                    <option value="Education / Training">Education / Training</option>
                    <option value="Electrical Equipment">Electrical Equipment</option>
                    <option value="Electronic Components / Semiconductors">Electronic Components / Semiconductors</option>
                    <option value="Electronics Manufacturing">Electronics Manufacturing</option>
                    <option value="Events / Live Entertainment">Events / Live Entertainment</option>
                    <option value="Facility Management Services">Facility Management Services</option>
                    <option value="Film / Music / Entertainment">Film / Music / Entertainment</option>
                    <option value="Financial Services">Financial Services</option>
                    <option value="FinTech / Payments">FinTech / Payments</option>
                    <option value="FMCG">FMCG</option>
                    <option value="Furniture & Furnishing">Furniture & Furnishing</option>
                    <option value="Gaming">Gaming</option>
                    <option value="Gems & Jewellery">Gems & Jewellery</option>
                    <option value="Government / Public Administration">Government / Public Administration</option>
                    <option value="Hardware & Networking">Hardware & Networking</option>
                    <option value="Hotels & Restaurants">Hotels & Restaurants</option>
                    <option value="Import & Export">Import & Export</option>
                    <option value="Industrial Automation">Industrial Automation</option>
                    <option value="Industrial Equipment / Machinery">Industrial Equipment / Machinery</option>
                    <option value="Internet">Internet</option>
                    <option value="IT Services & Consulting">IT Services & Consulting</option>
                    <option value="Leather">Leather</option>
                    <option value="Management Consulting">Management Consulting</option>
                    <option value="Medical Devices & Equipment">Medical Devices & Equipment</option>
                    <option value="Medical Services / Hospital">Medical Services / Hospital</option>
                    <option value="Metals & Mining">Metals & Mining</option>
                    <option value="Miscellaneous">Miscellaneous</option>
                    <option value="Pharmaceutical & Life Sciences">Pharmaceutical & Life Sciences</option>
                    <option value="Ports & Shipping">Ports & Shipping</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Software Product">Software Product</option>
                    <option value="Textile & Apparel">Textile & Apparel</option>
                    <option value="Urban Transport">Urban Transport</option>
                    <option value="Water Treatment / Waste Management">Water Treatment / Waste Management</option>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" name="skills" placeholder="Enter your skills separated by comma*">
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-center">
                    <input type="file" id="upload_cv" name="upload_cv" class="form-control d-none" accept=".doc ,.pdf, .docx">
                    <button type="button" id="custom-button" class="btn btn-primary me-2">Upload your CV</button>
                    <span id="custom-text">No file chosen, yet.</span>
                </div>
            </div>

            

            <div class="col-md-4">
    <label for="captcha-input">Enter CAPTCHA*</label>
    <div class="input-group">
        <img src="captcha.php" alt="CAPTCHA" id="captcha-image" class="img-fluid">
        <input type="text" class="form-control" id="captcha-input" name="captcha" placeholder="Enter CAPTCHA*" required>
    </div>
    <span id="captcha-error" class="text-danger"></span>
</div>



        

<button type="submit" class="btn btn-success w-100">Submit</button>
<span id="form-error" class="text-danger d-block mt-2"></span>



            <!-- <div class="col-12">
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </div> -->
        </div>


        
    </form>
</div>




<script>
    document.getElementById('captcha-image').addEventListener('click', function () {
        this.src = 'captcha.php?' + Date.now();
    });
</script>



<!-- Bootstrap JS -->

<script>
    document.getElementById('custom-button').addEventListener('click', function () {
        document.getElementById('upload_cv').click();
    });
    document.getElementById('upload_cv').addEventListener('change', function () {
        const fileName = this.files[0]?.name || "No file chosen, yet.";
        document.getElementById('custom-text').textContent = fileName;
    });
</script>


<?php include "include/footer.php"?>