<!-- <div id="theme-main-banner" class="banner-one">

  <div data-src="images/slider/1.jpg"></div>
  <div data-src="images/slider/2.jpg"></div>
  <div data-src="images/slider/3.jpg"></div>
</div> -->


<div class="slider">
  <div class="slides">
    <div class="slide active" style="background-image: url('images/slider/1.jpg');"></div>
    <div class="slide" style="background-image: url('images/slider/2.jpg');"></div>
    <div class="slide" style="background-image: url('images/slider/3.jpg');"></div>
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


          <div id="toaster" style="position: fixed; top: 20px; right: 20px; background-color: #f44336; color: white; padding: 15px; border-radius: 5px; display: none; z-index: 1000;">
    Gmail addresses are not allowed. Please use a different email address.
</div>
<form id="employerForm" action="slider_Employer_Form.php" method="POST" onsubmit="return validateEmail(event)">
    <input class="mt-3" type="text" name="name" placeholder="Name" required />
    <input class="mt-3" type="email" name="email" placeholder="Email" required />
    <input class="mt-3" type="text" name="phone" placeholder="Phone" required />
    <textarea class="mt-3" name="message" placeholder="Message" required></textarea>
    <button type="submit" name="submit">Submit</button>
</form>

            <!-- Job Seeker Form -->
            <form id="jobSeekerForm" action="slider_JobSeeker_form.php" method="POST" enctype="multipart/form-data" style="display: none;">
                <input class="mt-3" type="text" name="name" placeholder="Name" required />
                <input class="mt-3" type="email" name="email" placeholder="Email" required />
                <textarea class="mt-3" name="message" placeholder="Message" required></textarea>
                <input class="mt-3" type="file" name="cv" required />
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
        <!-- Loader -->
        <div id="loader" style="display: none;">Loading...</div>
    </div>
</div>

<style>





/* Slider Container */
.slider {
  position: relative;
  width: 100%;
  height: 100vh; /* Full viewport height */
  overflow: hidden;
  background-color: #fff; /* Fallback background color */
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
  background-size: contain; /* Ensure full image display */
  background-repeat: no-repeat;
  background-position: center;
  opacity: 0;
  transform: scale(1);
  transition: opacity 1.5s ease, transform 1.5s ease; /* Smooth animation */
}

/* Active Slide */
.slide.active {
  opacity: 1;
  transform: scale(1.05); /* Slight zoom for visual effect */
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
    gap: 15px;
    height: 100%;
    max-width: 100%;
}

form input, form textarea, form button {
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
    color: #333;
    transition: all 0.3s ease;
    width: 100%;
}

form input:focus, form textarea:focus {
    border-color: #007bff;
    outline: none;
}

form input, form textarea {
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
form input, form textarea {
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
    color: #333;
    background-color: #f9f9f9;
    width: 100%; /* Make sure it takes full width of the container */
    box-sizing: border-box; /* Ensure padding does not affect width */
}

/* Keep input fields and textareas stable even when tab is active */
.tabs button.active + form input,
.tabs button.active + form textarea {
    width: 100% !important;
    padding: 15px !important;
    font-size: 16px !important;
}

/* Keep the general state of inputs unchanged on tab click */
form input:focus, form textarea:focus {
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
    height: 82vh; /* Adjust height for small screens */
    width: 100%;
    padding-bottom: 20px; /* Add padding to ensure form fits */
  }

  #form-container {
    padding: 10px; /* Reduced padding */
    max-width: 280px; /* Reduced max-width */
    top: 6%; /* Adjust top position */
    
    margin: 0 auto; /* Center form horizontally */
  }

  .form h2 {
    font-size: 1px; /* Reduced font size */
  }

  form input, form textarea, form button {
    padding: 8px; /* Reduced padding */
    font-size: 14px; /* Reduced font size */
  }
}



/* Responsive Adjustments */
@media (max-width: 991px) {
  .slider {
    height: 80vh; /* Adjust height for medium screens */
  }
}


@media (max-width: 576px) {
  .slider {
    height: 30vh; /* Adjust height for small screens */
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