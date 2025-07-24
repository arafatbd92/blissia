// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    
    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Add scrolled class for styling
        if (scrollTop > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        
        // Hide/show navbar on scroll
        if (scrollTop > lastScrollTop && scrollTop > 200) {
            navbar.style.transform = 'translateY(-100%)';
        } else {
            navbar.style.transform = 'translateY(0)';
        }
        
        lastScrollTop = scrollTop;
    });
    
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 100;
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Interactive elements hover effects
    const interactiveElements = document.querySelectorAll('.nav-link, .btn, .social-icon');
    
    interactiveElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.transform = this.style.transform + ' scale(1.05)';
        });
        
        element.addEventListener('mouseleave', function() {
            this.style.transform = this.style.transform.replace(' scale(1.05)', '');
        });
    });
    
    // Contact information click effects
    const contactItems = document.querySelectorAll('.contact-item');
    
    contactItems.forEach(item => {
        item.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
        });
    });
    
    // Login button effects
    const loginButtons = document.querySelectorAll('.btn-login');
    
    loginButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            alert('Login functionality would be implemented here');
        });
    });
    
    // Social media icon effects
    const socialIcons = document.querySelectorAll('.social-icon');
    
    socialIcons.forEach(icon => {
        icon.addEventListener('click', function(e) {
            e.preventDefault();
            
            this.style.transform = 'scale(0.9) rotate(-5deg)';
            setTimeout(() => {
                this.style.transform = '';
            }, 200);
            
            const platform = this.querySelector('i').className.includes('youtube') ? 'YouTube' :
                           this.querySelector('i').className.includes('whatsapp') ? 'WhatsApp' :
                           this.querySelector('i').className.includes('facebook') ? 'Facebook' : 'Social Media';
            
            alert(`Redirecting to ${platform} (placeholder)`);
        });
    });
    
    // Logo click effect
    const logo = document.querySelector('.navbar-brand');
    
    logo.addEventListener('click', function(e) {
        e.preventDefault();
        
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        
        this.style.transform = 'scale(0.95)';
        setTimeout(() => {
            this.style.transform = '';
        }, 150);
    });
    
    // Initialize Swiper Slider
    const swiper = new Swiper('.swiper-container', {
        // Basic settings
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        
        // Navigation
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        
        // Pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        
        // Scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
            draggable: true,
        },
        
        // Effects
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 1500,
        
        // Responsive breakpoints
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        },
        
        // Touch and mousewheel
        touchRatio: 1,
        touchAngle: 45,
        grabCursor: true,
        mousewheel: false,
        
        // Keyboard navigation
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
        
        // Accessibility
        a11y: {
            prevSlideMessage: 'Previous slide',
            nextSlideMessage: 'Next slide',
            firstSlideMessage: 'This is the first slide',
            lastSlideMessage: 'This is the last slide',
        },
        
        // Event listeners for zoom animation
        on: {
            slideChange: function () {
                // Reset and restart zoom animation on slide change
                const activeSlide = this.slides[this.activeIndex];
                const activeImage = activeSlide.querySelector('img');
                
                if (activeImage) {
                    // Reset animation
                    activeImage.style.animation = 'none';
                    activeImage.offsetHeight; // Trigger reflow
                    
                    // Restart animation
                    activeImage.style.animation = 'zoomIn 5s ease-out forwards';
                }
            }
        }
    });

    console.log('Bliss International Academy website loaded successfully!');
}); 