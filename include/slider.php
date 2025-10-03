<div class="slider-container">
    <div class="slider">
        <div class="slides">
            <div class="slide active" style="background-image: url('images/slider/1.jpg');"></div>
            <div class="slide" style="background-image: url('images/slider/2.jpg');"></div>
            <div class="slide" style="background-image: url('images/slider/3.jpg');"></div>
        </div>
    </div>

    <!-- Compact Form Container -->
    <div class="form-box">
        <div class="form-header">
            <h2>Connect With Us</h2>
            <p>Building Careers & Organizations</p>
        </div>
        
        <div class="form-tabs">
            <button class="tab-btn active" id="employerTab">I'm Hiring</button>
            <button class="tab-btn" id="jobSeekerTab">I Need a Job</button>
        </div>
        
        <!-- Employer Form -->
        <form id="employerForm" class="active-form" action="backend_slider_form.php" method="POST">
            <input type="hidden" name="form_type" value="slider_employer">
            
            <div class="form-group">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Your Requirements" required></textarea>
            </div>
            
            <input type="hidden" id="g-recaptcha-response-employer" name="g-recaptcha-response">
            
            <!-- Button with Loading Spinner -->
            <button type="submit" name="submit_btn" class="submit-btn" id="employer-submit-btn">
                <span class="btn-text">Submit</span>
                <span class="btn-spinner" style="display: none;">
                    <i class="fas fa-spinner fa-spin"></i> Processing...
                </span>
            </button>
            <div id="employerMessage" class="message-box"></div>
        </form>
        
        <!-- Job Seeker Form -->
        <form id="jobSeekerForm" action="backend_slider_form.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="form_type" value="slider_jobseeker">
            
            <div class="form-group">
                <input type="text" name="name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Your Skills & Experience" required></textarea>
            </div>
            
            <div class="file-upload-group">
                <label for="resumeUpload">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <span>Upload Resume (PDF/DOC)</span>
                    <input type="file" id="resumeUpload" name="cv" accept=".pdf,.doc,.docx" required>
                </label>
            </div>
            
            <input type="hidden" id="g-recaptcha-response-jobseeker" name="g-recaptcha-response">
            
            <!-- Button with Loading Spinner -->
            <button type="submit" name="submit_btn" class="submit-btn" id="jobseeker-submit-btn">
                <span class="btn-text">Apply Now</span>
                <span class="btn-spinner" style="display: none;">
                    <i class="fas fa-spinner fa-spin"></i> Processing...
                </span>
            </button>
            <div id="jobseekerMessage" class="message-box"></div>
        </form>
    </div>
</div>

<!-- Loading Spinner CSS -->
<style>
.submit-btn {
    position: relative;
    transition: all 0.3s ease;
}

.submit-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

.btn-spinner i {
    margin-right: 8px;
}

.fa-spin {
    animation: fa-spin 1s infinite linear;
}

@keyframes fa-spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

<!-- Google reCAPTCHA v3 Script -->
<script src="https://www.google.com/recaptcha/api.js?render=6Ledy8UrAAAAAGLUn3toR4y2awVaNUkt0iyOlVLU"></script>

<script>
    // Simple loading functions
    function showLoading(buttonId) {
        const button = document.getElementById(buttonId);
        if (button) {
            const textSpan = button.querySelector('.btn-text');
            const spinnerSpan = button.querySelector('.btn-spinner');
            
            if (textSpan) textSpan.style.display = 'none';
            if (spinnerSpan) spinnerSpan.style.display = 'inline';
            button.disabled = true;
        }
    }
    
    function hideLoading(buttonId) {
        const button = document.getElementById(buttonId);
        if (button) {
            const textSpan = button.querySelector('.btn-text');
            const spinnerSpan = button.querySelector('.btn-spinner');
            
            if (textSpan) textSpan.style.display = 'inline';
            if (spinnerSpan) spinnerSpan.style.display = 'none';
            button.disabled = false;
        }
    }
    
    // Simple validation function - NO PARAMETERS
    function validateEmployerForm() {
        const name = document.querySelector('#employerForm input[name="name"]').value.trim();
        const email = document.querySelector('#employerForm input[name="email"]').value.trim();
        const phone = document.querySelector('#employerForm input[name="phone"]').value.trim();
        const message = document.querySelector('#employerForm textarea[name="message"]').value.trim();
        
        if (!name || !email || !phone || !message) {
            alert('Please fill in all required fields.');
            return false;
        }
        
        // Simple email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address.');
            return false;
        }
        
        return true;
    }
    
    function validateJobSeekerForm() {
        const name = document.querySelector('#jobSeekerForm input[name="name"]').value.trim();
        const email = document.querySelector('#jobSeekerForm input[name="email"]').value.trim();
        const message = document.querySelector('#jobSeekerForm textarea[name="message"]').value.trim();
        const fileInput = document.querySelector('#jobSeekerForm input[name="cv"]');
        
        if (!name || !email || !message) {
            alert('Please fill in all required fields.');
            return false;
        }
        
        // Simple email validation
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address.');
            return false;
        }
        
        // File validation
        if (!fileInput.files || !fileInput.files[0]) {
            alert('Please upload your resume.');
            return false;
        }
        
        const file = fileInput.files[0];
        const fileName = file.name.toLowerCase();
        
        // Check file extension
        if (!fileName.endsWith('.pdf') && !fileName.endsWith('.doc') && !fileName.endsWith('.docx')) {
            alert('Please upload only PDF, DOC, or DOCX files.');
            return false;
        }
        
        // Check file size (5MB)
        if (file.size > 5 * 1024 * 1024) {
            alert('File size must be less than 5MB.');
            return false;
        }
        
        return true;
    }
    
    // Wait for DOM to load
    document.addEventListener('DOMContentLoaded', function() {
        // Employer form handler
        const employerForm = document.getElementById('employerForm');
        if (employerForm) {
            employerForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                console.log('Employer form submitted');
                
                // Validate form
                if (!validateEmployerForm()) {
                    return;
                }
                
                // Show loading
                showLoading('employer-submit-btn');
                
                // Execute reCAPTCHA
                grecaptcha.ready(function() {
                    grecaptcha.execute('6Ledy8UrAAAAAGLUn3toR4y2awVaNUkt0iyOlVLU', {action: 'employer_form'})
                        .then(function(token) {
                            console.log('reCAPTCHA token received:', token ? 'Yes' : 'No');
                            
                            if (token && token.length > 0) {
                                document.getElementById('g-recaptcha-response-employer').value = token;
                                employerForm.submit();
                            } else {
                                hideLoading('employer-submit-btn');
                                alert('Security verification failed. Please try again.');
                            }
                        })
                        .catch(function(error) {
                            console.error('reCAPTCHA error:', error);
                            hideLoading('employer-submit-btn');
                            alert('Security verification failed. Please refresh and try again.');
                        });
                });
            });
        }
        
        // Job seeker form handler
        const jobSeekerForm = document.getElementById('jobSeekerForm');
        if (jobSeekerForm) {
            jobSeekerForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                console.log('Job seeker form submitted');
                
                // Validate form
                if (!validateJobSeekerForm()) {
                    return;
                }
                
                // Show loading
                showLoading('jobseeker-submit-btn');
                
                // Execute reCAPTCHA
                grecaptcha.ready(function() {
                    grecaptcha.execute('6Ledy8UrAAAAAGLUn3toR4y2awVaNUkt0iyOlVLU', {action: 'jobseeker_form'})
                        .then(function(token) {
                            console.log('reCAPTCHA token received:', token ? 'Yes' : 'No');
                            
                            if (token && token.length > 0) {
                                document.getElementById('g-recaptcha-response-jobseeker').value = token;
                                jobSeekerForm.submit();
                            } else {
                                hideLoading('jobseeker-submit-btn');
                                alert('Security verification failed. Please try again.');
                            }
                        })
                        .catch(function(error) {
                            console.error('reCAPTCHA error:', error);
                            hideLoading('jobseeker-submit-btn');
                            alert('Security verification failed. Please refresh and try again.');
                        });
                });
            });
        }
    });
    
    // Reset loading states on page visibility change
    document.addEventListener('visibilitychange', function() {
        if (document.visibilityState === 'visible') {
            hideLoading('employer-submit-btn');
            hideLoading('jobseeker-submit-btn');
        }
    });
    
    // Reset loading states on page show (back button)
    window.addEventListener('pageshow', function(event) {
        hideLoading('employer-submit-btn');
        hideLoading('jobseeker-submit-btn');
    });
</script>


<style>
    /* Base Styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Arial, sans-serif;
    }
    
    .slider-container {
        position: relative;
        width: 100%;
        height: 100vh;
        min-height: 600px;
        overflow: hidden;
    }
    
    /* Slider Styles */
    .slider {
        position: relative;
        width: 100%;
        height: 100%;
    }
    
    .slides {
        position: relative;
        width: 100%;
        height: 100%;
    }
    
    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: opacity 1s ease;
    }
    
    .slide.active {
        opacity: 1;
    }
    
    .slide-text {
        position: absolute;
        bottom: 20%;
        left: 10%;
        color: white;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }
    
    .slide-text h3 {
        font-size: 22px;
        font-weight: 400;
        margin-bottom: 8px;
    }
    
    .slide-text h2 {
        font-size: 32px;
        font-weight: 700;
    }
    
    /* Compact Form Styles */
    .form-box {
        position: absolute;
        right: 5%;
        top: 50%;
        transform: translateY(-50%);
        width: 340px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        padding: 20px;
        z-index: 10;
    }
    
    .form-header {
        text-align: center;
        margin-bottom: 15px;
    }
    
    .form-header h2 {
        font-size: 22px;
        color: #333;
        margin-bottom: 5px;
    }
    
    .form-header p {
        color: #666;
        font-size: 13px;
    }
    
    /* Tab Styles */
    .form-tabs {
        display: flex;
        background: #f5f5f5;
        border-radius: 25px;
        padding: 4px;
        margin-bottom: 15px;
    }
    
    .tab-btn {
        flex: 1;
        padding: 8px;
        border: none;
        background: transparent;
        color: #666;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        border-radius: 20px;
        transition: all 0.3s ease;
    }
    
    .tab-btn.active {
        background: white;
        color: #4361ee;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    /* Form Content */
    form {
        display: none;
    }
    
    .active-form {
        display: block;
    }
    
    .form-group {
        margin-bottom: 12px;
    }
    
    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        font-size: 13px;
    }
    
    .form-group textarea {
        min-height: 80px;
        resize: vertical;
    }
    
    /* File Upload */
    .file-upload-group {
        margin-bottom: 12px;
    }
    
    .file-upload-group label {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 15px;
        border: 2px dashed #e0e0e0;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .file-upload-group label:hover {
        border-color: #4361ee;
    }
    
    .file-upload-group i {
        font-size: 20px;
        color: #4361ee;
        margin-bottom: 8px;
    }
    
    .file-upload-group span {
        color: #555;
        font-size: 13px;
    }
    
    .file-upload-group input {
        display: none;
    }
    
    /* Improved CAPTCHA Design */
    .captcha-group {
        margin: 15px 0;
    }
    
    .captcha-box {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
    }
    
    .captcha-box img {
        height: 45px;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
        flex-grow: 1;
    }
    
    .captcha-refresh {
        background: #f5f5f5;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
        padding: 10px 12px;
        margin-left: 8px;
        cursor: pointer;
        color: #666;
        transition: all 0.3s ease;
    }
    
    .captcha-refresh:hover {
        background: #e9e9e9;
    }
    
    .captcha-input {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        font-size: 13px;
        background: #f9f9f9;
    }
    
    /* Submit Button */
    .submit-btn {
        width: 100%;
        padding: 10px;
        background: #4361ee;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 5px;
    }
    
    .submit-btn:hover {
        background: #3a56d4;
    }
    
    /* Message Box */
    .message-box {
        margin-top: 12px;
        padding: 8px;
        border-radius: 4px;
        font-size: 13px;
        text-align: center;
        display: none;
    }
    
    /* Responsive Styles */
    @media (max-width: 992px) {
        .slider-container {
            height: auto;
            min-height: auto;
        }
        
        .slider {
            height: 350px;
        }
        
        .form-box {
            position: relative;
            right: auto;
            top: auto;
            transform: none;
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            margin-top: -40px;
            margin-bottom: 30px;
        }
        
        .slide-text {
            left: 5%;
            bottom: 15%;
        }
        
        .slide-text h3 {
            font-size: 18px;
        }
        
        .slide-text h2 {
            font-size: 26px;
        }
    }
    
    @media (max-width: 576px) {
        .slider {
            height: 280px;
        }

        .slide{
            height:60%;
        }
        
        .form-box {
            padding: 15px;
        }
        
        .form-header h2 {
            font-size: 20px;
        }
    }
</style>

<script>
    // Slider Functionality
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;
    
    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[index].classList.add('active');
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    // Change slide every 5 seconds
    setInterval(nextSlide, 5000);
    
    // Tab Switching - Guaranteed Working
    const employerTab = document.getElementById('employerTab');
    const jobSeekerTab = document.getElementById('jobSeekerTab');
    const employerForm = document.getElementById('employerForm');
    const jobSeekerForm = document.getElementById('jobSeekerForm');
    
    function switchTab(tab) {
        if(tab === 'employer') {
            employerTab.classList.add('active');
            jobSeekerTab.classList.remove('active');
            employerForm.classList.add('active-form');
            jobSeekerForm.classList.remove('active-form');
        } else {
            jobSeekerTab.classList.add('active');
            employerTab.classList.remove('active');
            jobSeekerForm.classList.add('active-form');
            employerForm.classList.remove('active-form');
        }
    }
    
    employerTab.addEventListener('click', () => switchTab('employer'));
    jobSeekerTab.addEventListener('click', () => switchTab('jobseeker'));
    
    // CAPTCHA Refresh Function
    function refreshCaptcha(type) {
        const captchaImg = document.getElementById(`${type}CaptchaImg`);
        captchaImg.src = 'captcha.php?' + Date.now();
    }
    
    // Form Validation
    function validateForm(event, formType) {
        // Don't prevent default form submission
        // event.preventDefault();
        
        const form = event.target;
        const email = form.querySelector('input[type="email"]');
        const messageBox = document.getElementById(`${formType}Message`);
        
        // Reset message
        messageBox.style.display = 'none';
        
        // Optional: Check for Gmail
        // if (email.value.includes('@gmail.com')) {
        //     showMessage(messageBox, 'Please use a professional email (not Gmail)', 'error');
        //     email.focus();
        //     return false;
        // }
        
        // For job seeker form, check file
        if (formType === 'jobseeker') {
            const fileInput = document.getElementById('resumeUpload');
            if (fileInput.files.length === 0) {
                showMessage(messageBox, 'Please upload your resume', 'error');
                return false;
            }
        }
        
        // Show loading state
        const submitBtn = form.querySelector('.submit-btn');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
        
        // Allow form submission
        return true;
    }
    
    function showMessage(element, text, type) {
        element.textContent = text;
        element.style.display = 'block';
        element.style.background = type === 'error' ? '#ffeeee' : '#eeffee';
        element.style.color = type === 'error' ? '#ff4444' : '#44aa44';
    }
    
    // Initialize - Refresh CAPTCHAs on load
    window.addEventListener('load', () => {
        refreshCaptcha('employer');
        refreshCaptcha('jobseeker');
    });
</script>