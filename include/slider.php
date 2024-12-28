<!-- <div id="theme-main-banner" class="banner-one">

  <div data-src="images/slider/1.jpg"></div>
  <div data-src="images/slider/2.jpg"></div>
  <div data-src="images/slider/3.jpg"></div>
</div> -->



<style>
    /* Glowing Happy New Year Text */
    #newYearMessage {
        animation: glowEffect 1.5s infinite alternate;
    }

    @keyframes glowEffect {
        0% {
            text-shadow: 0 0 10px gold, 0 0 20px red, 0 0 30px blue;
        }

        100% {
            text-shadow: 0 0 20px red, 0 0 40px green, 0 0 60px blue;
        }
    }

    /* Celebration Disappear Effect */
    #celebration {
        animation: fadeOut 1s ease forwards;
        animation-delay: 15s;
        /* Disappear after 15 seconds */
    }

    @keyframes fadeOut {
        to {
            opacity: 0;
            visibility: hidden;
        }
    }
</style>

<div class="slider">
    <div class="slides">
        <div class="slide active" style="background-image: url('images/slider/1.jpg');"></div>
        <div class="slide" style="background-image: url('images/slider/2.jpg');"></div>
        <div class="slide" style="background-image: url('images/slider/3.jpg');"></div>
    </div>


    <div id="celebration"
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1000; pointer-events: none; overflow: hidden;">
        <!-- Glowing Happy New Year Message -->
        <div id="newYearMessage"
            style="position: absolute; top: 30%; left: 50%; transform: translateX(-50%); text-align: center; font-size: 4rem; font-family: 'Arial', sans-serif; color: gold; font-weight: bold;">
            <!-- 🎉✨ Happy New Year ✨🎉 -->
        </div>
        <!-- Canvas for Fireworks -->
        <canvas id="fireworksCanvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></canvas>
    </div>








</div>





<!-- /#theme-main-banner -->

<!-- Form Container (Above the Slider) -->
<div id="form-container">
    <div class="form">
        <h2>Let's Connect</h2>
        <p>Building Careers. Building Organisations</p>
        <div class="tabs">
            <button id="employerTab" class="active" onclick="switchTab('employer')">Employer</button>
            <button id="jobSeekerTab" onclick="switchTab('jobseeker')">Job Seeker</button>
        </div>
        <div id="formContent">
            <!-- Employer Form -->


            <div id="toaster"
                style="position: fixed; top: 20px; right: 20px; background-color: #f44336; color: white; padding: 15px; border-radius: 5px; display: none; z-index: 1000;">
                Gmail addresses are not allowed. Please use a different email address.
            </div>
              <!-- Employer Form -->
              <form id="employerForm" action="slider_Employer_Form.php" method="POST" onsubmit="return validateEmail(event)">
                <input class="mt-1" type="text" name="name" placeholder="Name" required />
                <input class="mt-1" type="email" name="email" placeholder="Email" required />
                <input class="mt-1" type="text" name="phone" placeholder="Phone" required />
                <textarea class="mt-1" name="message" placeholder="Message" required></textarea>

                <!-- CAPTCHA Section -->
                <div class="captcha-container">
                    <img src="captcha.php" alt="CAPTCHA Image" id="captchaImageEmployer" />
                    <button type="button" id="refreshCaptchaEmployer" style="
    padding: 0;
    margin: 0;
    width: 59px;
"><i class="fa fa-solid fa-rotate-right"></i></button>
                    <input type="text" name="captcha" placeholder="Enter CAPTCHA" required />
                </div>

                <!-- Display Error/Success Messages -->
                <div id="responseMessageEmployer" class="error-message"></div>

                <!-- Submit Button -->
                <button type="submit" name="submit">Submit</button>
            </form>

            <!-- Job Seeker Form -->
            <form id="jobSeekerForm" method="POST" enctype="multipart/form-data" style="display: none;">
                <input type="text" name="name" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <textarea name="message" placeholder="Message" required></textarea>
                <input type="file" name="cv" required />

                <!-- CAPTCHA Section -->
                <div class="captcha-container">
                    <img src="captcha.php" alt="CAPTCHA Image" id="captchaImage" />
                    <button type="button" id="refreshCaptcha" style="
    padding: 0;
    margin: 0;
    width: 59px;
"><i class="fa fa-solid fa-rotate-right"></i></button>
                    <input type="text" name="captcha" placeholder="Enter CAPTCHA" required />
                </div>

                <!-- Display Error/Success Messages -->
                <div id="responseMessage" class="error-message"></div>

                <!-- Submit Button -->
                <button type="submit" id="submitButton">Submit</button>
            </form>

        </div>
        <!-- Loader -->
        <div id="loader" style="display: none;">Loading...</div>
    </div>
</div>

<style>
    .error-message {
        color: red;
        margin-top: 10px;
    }

    .success-message {
        color: green;
        margin-top: 10px;
    }

    .loading {
        display: inline-block;
        width: 16px;
        height: 16px;
        border: 2px solid transparent;
        border-top-color: #fff;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
        margin-left: 10px;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }




    /* Slider Container */
    .slider {
        position: relative;
        width: 100%;
        height: 100vh;
        /* Full viewport height */
        overflow: hidden;
        background-color: #fff;
        /* Fallback background color */
    }

    /* Slides Wrapper */
    .slides {
        position: relative;
        width: 100%;
        height: 100%;
    }

    /* Individual Slide */
    .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: contain;
        /* Ensure full image display */
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0;
        transform: scale(1);
        transition: opacity 1.5s ease, transform 1.5s ease;
        /* Smooth animation */
    }

    /* Active Slide */
    .slide.active {
        opacity: 1;
        transform: scale(1.05);
        /* Slight zoom for visual effect */
    }













    #form-container {
        position: absolute;
        right: 55px;
        top: 7%;
        transform: translateY(-50%);
        z-index: 999;
        background: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 15px;
        max-width: 450px;
        width: 100%;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
        overflow: hidden;
        height: auto;
    }

    #form-container:hover {
        transform: translateY(-50%) scale(1.05);
    }

    .form h2 {
        font-size: 28px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .form p {
        text-align: center;
        font-size: 14px;
        color: #666;
        margin-bottom: 25px;
    }

    .tabs {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px;
        border-bottom: 2px solid #ddd;
    }

    .tabs button {
        padding: 8px 15px;
        border: none;
        background-color: #f4f4f4;
        cursor: pointer;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.3s ease;
        border-radius: 25px;
    }

    .tabs button.active {
        background-color: #007bff;
        color: #fff;
        transform: scale(1.05);
    }

    .tabs button:hover {
        background-color: #007bff;
        color: #fff;
        transform: scale(1.05);
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 0;
        height: 100%;
        max-width: 100%;
    }

    form input,
    form textarea,
    form button {
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        color: #333;
        transition: all 0.3s ease;
        width: 100%;
    }

    form input:focus,
    form textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    form input,
    form textarea {
        background-color: #f9f9f9;
    }

    form button {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    form button:hover {
        background-color: #0056b3;
    }

    form button:active {
        background-color: #003d82;
    }

    /* Add responsive design */



    /* Keeping the input fields and textareas size constant */
    form input,
    form textarea {
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        color: #333;
        background-color: #f9f9f9;
        width: 100%;
        /* Make sure it takes full width of the container */
        box-sizing: border-box;
        /* Ensure padding does not affect width */
    }

    /* Keep input fields and textareas stable even when tab is active */
    .tabs button.active+form input,
    .tabs button.active+form textarea {
        width: 100% !important;
        padding: 15px !important;
        font-size: 16px !important;
    }

    /* Keep the general state of inputs unchanged on tab click */
    form input:focus,
    form textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    /* Ensure consistent styling for submit button */
    form button {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    form button:hover {
        background-color: #0056b3;
    }

    form button:active {
        background-color: #003d82;
    }

    @media (max-width: 1285px) {
        .slider {
            height: 82vh;
            /* Adjust height for small screens */
            width: 100%;
            padding-bottom: 20px;
            /* Add padding to ensure form fits */
        }

        #form-container {
            padding: 10px;
            /* Reduced padding */
            max-width: 280px;
            /* Reduced max-width */
            top: 6%;
            /* Adjust top position */

            margin: 0 auto;
            /* Center form horizontally */
        }

        .form h2 {
            font-size: 1px;
            /* Reduced font size */
        }

        form input,
        form textarea,
        form button {
            padding: 8px;
            /* Reduced padding */
            font-size: 14px;
            /* Reduced font size */
        }
    }



    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .slider {
            height: 80vh;
            /* Adjust height for medium screens */
        }
    }


    @media (max-width: 576px) {
        .slider {
            height: 30vh;
            /* Adjust height for small screens */
            width: 100%;
        }
    }


    @media (max-width: 768px) {
        #form-container {
            display: none;
        }
    }
</style>




<script>
    window.addEventListener('load', function () {
        const canvas = document.getElementById('fireworksCanvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const rockets = [];
        const explosions = [];
        const colors = ['#FFD700', '#FF4500', '#FFFFFF', '#FF69B4', '#ADFF2F'];

        // Rocket Class
        class Rocket {
            constructor(x, y, targetY) {
                this.x = x;
                this.y = y;
                this.targetY = targetY;
                this.speed = Math.random() * 3 + 4;
                this.color = colors[Math.floor(Math.random() * colors.length)];
            }

            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, 4, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.fill();
            }

            update() {
                this.y -= this.speed;
                if (this.y <= this.targetY) {
                    explosions.push(new Explosion(this.x, this.y, this.color));
                    return true; // Rocket exploded
                }
                return false;
            }
        }

        // Explosion Class
        class Explosion {
            constructor(x, y, color) {
                this.x = x;
                this.y = y;
                this.color = color;
                this.particles = [];
                this.createParticles();
            }

            createParticles() {
                const particleCount = 60;
                for (let i = 0; i < particleCount; i++) {
                    const angle = (Math.PI * 2) * (i / particleCount);
                    const speed = Math.random() * 3 + 2;
                    this.particles.push(new Particle(this.x, this.y, angle, speed, this.color));
                }
            }

            draw() {
                this.particles.forEach((particle) => particle.draw());
            }

            update() {
                this.particles.forEach((particle, index) => {
                    particle.update();
                    if (particle.alpha <= 0) {
                        this.particles.splice(index, 1);
                    }
                });
            }
        }

        // Particle Class
        class Particle {
            constructor(x, y, angle, speed, color) {
                this.x = x;
                this.y = y;
                this.speedX = Math.cos(angle) * speed;
                this.speedY = Math.sin(angle) * speed;
                this.color = color;
                this.alpha = 1;
                this.radius = Math.random() * 2 + 1;
            }

            draw() {
                ctx.save();
                ctx.globalAlpha = this.alpha;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.fill();
                ctx.restore();
            }

            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                this.alpha -= 0.02;
            }
        }

        // Create Rocket
        function createRocket() {
            const x = Math.random() * canvas.width;
            const y = canvas.height;
            const targetY = Math.random() * canvas.height * 0.5;
            rockets.push(new Rocket(x, y, targetY));
        }

        // Animation Loop
        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Update and draw rockets
            for (let i = rockets.length - 1; i >= 0; i--) {
                const rocket = rockets[i];
                if (rocket.update()) {
                    rockets.splice(i, 1);
                } else {
                    rocket.draw();
                }
            }

            // Update and draw explosions
            for (let i = explosions.length - 1; i >= 0; i--) {
                const explosion = explosions[i];
                explosion.update();
                explosion.draw();
                if (explosion.particles.length === 0) {
                    explosions.splice(i, 1);
                }
            }

            requestAnimationFrame(animate);
        }

        // Launch Rockets at Intervals
        setInterval(createRocket, 1000);

        // Start Animation
        animate();
    });

</script>

<script>

    // Select all slides
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;

    // Function to show the next slide
    function showNextSlide() {
        slides[currentIndex].classList.remove('active'); // Hide the current slide
        currentIndex = (currentIndex + 1) % slides.length; // Move to the next slide
        slides[currentIndex].classList.add('active'); // Show the next slide
    }

    // Automatically change slides every 4 seconds
    setInterval(showNextSlide, 4000);












    function switchTab(tab) {
        const employerForm = document.getElementById('employerForm');
        const jobSeekerForm = document.getElementById('jobSeekerForm');
        const employerTab = document.getElementById('employerTab');
        const jobSeekerTab = document.getElementById('jobSeekerTab');

        if (tab === 'employer') {
            employerForm.style.display = 'block';
            jobSeekerForm.style.display = 'none';
            employerTab.classList.add('active');
            jobSeekerTab.classList.remove('active');
        } else {
            employerForm.style.display = 'none';
            jobSeekerForm.style.display = 'block';
            jobSeekerTab.classList.add('active');
            employerTab.classList.remove('active');
        }
    }

    function showLoader(event) {
        event.preventDefault();
        const loader = document.getElementById('loader');
        loader.style.display = 'block';
        // Simulate form submission delay
        setTimeout(() => {
            event.target.submit();
        }, 1000);
    }





    function validateEmail(event) {
        const emailInput = document.querySelector('input[name="email"]');
        const emailValue = emailInput.value;
        const blockedDomain = 'gmail.com';
        const toaster = document.getElementById('toaster');

        const emailDomain = emailValue.split('@')[1];

        if (emailDomain === blockedDomain) {
            toaster.style.display = 'block';
            setTimeout(() => {
                toaster.style.display = 'none';
            }, 3000); // Hide after 3 seconds
            event.preventDefault(); // Stop form submission
            return false;
        }
        return true; // Allow form submission
    }






</script>


<script>
    const form = document.getElementById('jobSeekerForm');
    const responseMessage = document.getElementById('responseMessage');
    const submitButton = document.getElementById('submitButton');
    const captchaImage = document.getElementById('captchaImage');
    const refreshCaptcha = document.getElementById('refreshCaptcha');

    // Refresh CAPTCHA
    refreshCaptcha.addEventListener('click', () => {
        captchaImage.src = `captcha.php?rand=${Math.random()}`;
    });

    // Submit Form with AJAX
    form.addEventListener('submit', (e) => {
        e.preventDefault();

        // Show loader
        const loader = document.createElement('span');
        loader.classList.add('loading');
        submitButton.appendChild(loader);

        const formData = new FormData(form);

        fetch('slider_JobSeeker_form.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                loader.remove();
                if (data.status) {
                    responseMessage.classList.remove('error-message');
                    responseMessage.classList.add('success-message');
                } else {
                    responseMessage.classList.remove('success-message');
                    responseMessage.classList.add('error-message');
                }
                responseMessage.textContent = data.message;

                // Refresh CAPTCHA on success or failure
                captchaImage.src = `captcha.php?rand=${Math.random()}`;
            })
            .catch(error => {
                loader.remove();
                responseMessage.classList.add('error-message');
                responseMessage.textContent = "An error occurred. Please try again.";
            });
    });
</script>



<script>
    // Refresh CAPTCHA for Employer Form
    document.getElementById('refreshCaptchaEmployer').addEventListener('click', function () {
        document.getElementById('captchaImageEmployer').src = 'captcha.php?' + Date.now();
    });

    // Refresh CAPTCHA for Job Seeker Form
    document.getElementById('refreshCaptcha').addEventListener('click', function () {
        document.getElementById('captchaImage').src = 'captcha.php?' + Date.now();
    });
</script>
