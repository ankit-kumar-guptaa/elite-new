/**
 * Russia-India Business Services - Custom JavaScript
 * Elite Corporate Solutions
 */

(function($) {
    'use strict';

    // Document Ready Function
    $(document).ready(function() {
        
        // Initialize AOS (Animate On Scroll) if available
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
        }

        // Smooth scrolling for anchor links
        $("a[href^='#']").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 70
                }, 800);
            }
        });

        // Counter animation function
        function startCounter() {
            $('.counter-number').each(function() {
                var $this = $(this);
                var countTo = $this.attr('data-count');
                
                $({ countNum: $this.text() }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                    }
                });
            });
        }

        // Initialize counter when statistics section is in viewport
        function initCounters() {
            var counterSection = $('.statistics-section');
            if (counterSection.length === 0) return;
            
            var counterSectionTop = counterSection.offset().top;
            var windowHeight = $(window).height();
            var counterStarted = false;

            $(window).on('scroll', function() {
                var scrollPos = $(window).scrollTop();
                
                if (!counterStarted && scrollPos > counterSectionTop - windowHeight + 200) {
                    startCounter();
                    counterStarted = true;
                }
            });

            // Check on page load as well
            if ($(window).scrollTop() > counterSectionTop - windowHeight + 200) {
                startCounter();
                counterStarted = true;
            }
        }

        // Initialize testimonial slider if Slick is available
        function initTestimonialSlider() {
            if (typeof $.fn.slick !== 'undefined' && $('.testimonial-slider').length > 0) {
                $('.testimonial-slider').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            }
        }

        // Form validation
        function initFormValidation() {
            $('#russia-india-contact-form').on('submit', function(e) {
                var valid = true;
                $(this).find('[required]').each(function() {
                    if ($(this).val() === '') {
                        valid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });

                if (!valid) {
                    e.preventDefault();
                    alert('Please fill all required fields');
                }
            });

            // Real-time validation
            $('#russia-india-contact-form [required]').on('blur', function() {
                if ($(this).val() === '') {
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            // Email validation
            $('#russia-india-contact-form input[type="email"]').on('blur', function() {
                var email = $(this).val();
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                
                if (email !== '' && !emailRegex.test(email)) {
                    $(this).addClass('is-invalid');
                    if (!$(this).next('.invalid-feedback').length) {
                        $(this).after('<div class="invalid-feedback">Please enter a valid email address.</div>');
                    }
                }
            });
        }

        // Service card hover effects
        function initServiceCardEffects() {
            $('.service-card').hover(function() {
                $(this).find('.service-icon i').addClass('fa-spin');
                setTimeout(function() {
                    $(this).find('.service-icon i').removeClass('fa-spin');
                }.bind(this), 500);
            });
        }

        // Initialize all components
        initCounters();
        initTestimonialSlider();
        initFormValidation();
        initServiceCardEffects();

        // Add flag hover effect
        $('.flag-icon').hover(function() {
            $(this).css('transform', 'scale(1.2)');
        }, function() {
            $(this).css('transform', 'scale(1)');
        });

        // Add loading animation to submit button
        $('.submit-btn').on('click', function() {
            var $this = $(this);
            var originalText = $this.text();
            
            if ($('#russia-india-contact-form')[0].checkValidity()) {
                $this.html('<i class="fa fa-spinner fa-spin"></i> Sending...');
                $this.prop('disabled', true);
                
                setTimeout(function() {
                    $this.html(originalText);
                    $this.prop('disabled', false);
                }, 3000);
            }
        });
    });

    // Window Load Function
    $(window).on('load', function() {
        // Hide preloader if it exists
        if ($('.preloader').length > 0) {
            $('.preloader').fadeOut(500);
        }
    });

})(jQuery);