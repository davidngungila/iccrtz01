import './bootstrap';

// Advanced Hero Slider
let currentSlide = 0;
const totalSlides = 6;
let slideInterval;

function initSlider() {
    // Start automatic slideshow
    startSlideshow();
    
    // Setup dot navigation
    const dots = document.querySelectorAll('.swiper-pagination-bullet');
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            resetSlideshow();
        });
    });
    
    // Setup keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') changeSlide(-1);
        if (e.key === 'ArrowRight') changeSlide(1);
    });
    
    // Setup touch/swipe support
    setupTouchSupport();
    
    // Initialize first slide animation
    animateSlideContent(0);
}

function startSlideshow() {
    slideInterval = setInterval(() => {
        changeSlide(1);
    }, 6000); // Change slide every 6 seconds
}

function resetSlideshow() {
    clearInterval(slideInterval);
    startSlideshow();
}

function changeSlide(direction) {
    const previousSlide = currentSlide;
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    updateSlider(previousSlide, currentSlide);
}

function goToSlide(slideIndex) {
    const previousSlide = currentSlide;
    currentSlide = slideIndex;
    updateSlider(previousSlide, currentSlide);
}

function updateSlider(previousIndex, newIndex) {
    // Hide previous slide
    const previousSlide = document.querySelector(`[data-slide="${previousIndex}"]`);
    if (previousSlide) {
        previousSlide.classList.remove('opacity-100');
        previousSlide.classList.add('opacity-0');
    }
    
    // Show new slide
    const newSlide = document.querySelector(`[data-slide="${newIndex}"]`);
    if (newSlide) {
        newSlide.classList.remove('opacity-0');
        newSlide.classList.add('opacity-100');
    }
    
    // Update dots
    const dots = document.querySelectorAll('.swiper-pagination-bullet');
    dots.forEach((dot, index) => {
        if (index === newIndex) {
            dot.classList.remove('bg-white/50');
            dot.classList.add('bg-white');
        } else {
            dot.classList.remove('bg-white');
            dot.classList.add('bg-white/50');
        }
    });
    
    // Animate content
    animateSlideContent(newIndex);
}

function animateSlideContent(slideIndex) {
    const slideContent = document.querySelector(`[data-slide="${slideIndex}"] .slide-content`);
    if (slideContent) {
        // Reset animation
        slideContent.style.transform = 'translateY(30px)';
        slideContent.style.opacity = '0';
        
        // Trigger animation
        setTimeout(() => {
            slideContent.style.transition = 'all 1s ease-out';
            slideContent.style.transform = 'translateY(0)';
            slideContent.style.opacity = '1';
        }, 100);
    }
}

function setupTouchSupport() {
    const heroSection = document.querySelector('.heroSwiper');
    let touchStartX = 0;
    let touchEndX = 0;
    
    heroSection.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    heroSection.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                changeSlide(1); // Swipe left, go to next slide
            } else {
                changeSlide(-1); // Swipe right, go to previous slide
            }
            resetSlideshow();
        }
    }
}

// Export slider functions
window.changeSlide = changeSlide;
window.goToSlide = goToSlide;

// Mobile menu toggle
function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    if (menu) {
        menu.classList.toggle('hidden');
    }
}

// Mobile submenu toggle
function toggleMobileSubmenu(menuId) {
    const submenu = document.getElementById(menuId + '-submenu');
    const arrow = document.getElementById(menuId + '-arrow');
    
    if (submenu && arrow) {
        submenu.classList.toggle('hidden');
        arrow.classList.toggle('rotate-180');
    }
}

// Smooth scrolling for anchor links
document.addEventListener('DOMContentLoaded', function() {
    // Initialize slider if on homepage
    if (document.querySelector('.slider-container')) {
        initSlider();
    }
    
    // Initialize tooltips, modals, and other interactive elements
    initializeComponents();
    
    // Setup form validations
    setupFormValidations();
    
    // Setup newsletter subscription
    setupNewsletterForm();
    
    // Setup search functionality
    setupSearch();
    
    // Setup dynamic content loading
    setupDynamicContent();
});

function initializeComponents() {
    // Add scroll effect to navigation
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('nav');
        if (nav) {
            if (window.scrollY > 50) {
                nav.classList.add('shadow-lg');
            } else {
                nav.classList.remove('shadow-lg');
            }
        }
    });
    
    // Initialize dropdown menus
    const dropdowns = document.querySelectorAll('.group');
    dropdowns.forEach(dropdown => {
        const trigger = dropdown.querySelector('button');
        const menu = dropdown.querySelector('.absolute');
        
        if (trigger && menu) {
            trigger.addEventListener('click', function(e) {
                e.stopPropagation();
                menu.classList.toggle('opacity-0');
                menu.classList.toggle('invisible');
            });
        }
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function() {
        dropdowns.forEach(dropdown => {
            const menu = dropdown.querySelector('.absolute');
            if (menu) {
                menu.classList.add('opacity-0');
                menu.classList.add('invisible');
            }
        });
    });
}

function setupFormValidations() {
    // Generic form validation
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            let isValid = true;
            const requiredFields = form.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                    
                    // Remove error after 3 seconds
                    setTimeout(() => {
                        field.classList.remove('border-red-500');
                    }, 3000);
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                showNotification('Please fill in all required fields', 'error');
            }
        });
    });
}

function setupNewsletterForm() {
    const newsletterForm = document.querySelector('form[action*="newsletter"]');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            if (email) {
                // Simulate newsletter subscription
                showNotification('Thank you for subscribing to our newsletter!', 'success');
                this.reset();
            }
        });
    }
}

function setupSearch() {
    const searchInputs = document.querySelectorAll('input[type="search"], input[placeholder*="search"]');
    searchInputs.forEach(input => {
        input.addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase();
            if (query.length > 2) {
                performSearch(query);
            }
        });
    });
}

function performSearch(query) {
    // Simulate search functionality
    console.log('Searching for:', query);
    // In a real application, this would make an API call
}

function setupDynamicContent() {
    // Load dynamic content for events, news, etc.
    loadUpcomingEvents();
    loadLatestNews();
    loadTestimonies();
}

function loadUpcomingEvents() {
    // Simulate loading upcoming events
    const eventContainers = document.querySelectorAll('[data-events]');
    eventContainers.forEach(container => {
        // In a real application, this would fetch data from an API
        container.innerHTML = `
            <div class="text-center py-8">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-900 mx-auto"></div>
                <p class="mt-4 text-gray-600">Loading events...</p>
            </div>
        `;
    });
}

function loadLatestNews() {
    // Simulate loading latest news
    const newsContainers = document.querySelectorAll('[data-news]');
    newsContainers.forEach(container => {
        // In a real application, this would fetch data from an API
        setTimeout(() => {
            container.innerHTML = `
                <div class="space-y-4">
                    <div class="card p-4">
                        <h4 class="font-semibold">Latest News Title</h4>
                        <p class="text-sm text-gray-600">News content here...</p>
                    </div>
                </div>
            `;
        }, 1000);
    });
}

function loadTestimonies() {
    // Simulate loading testimonies
    const testimonyContainers = document.querySelectorAll('[data-testimonies]');
    testimonyContainers.forEach(container => {
        // In a real application, this would fetch data from an API
        setTimeout(() => {
            container.innerHTML = `
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="card p-6">
                        <p class="italic text-gray-600">"Amazing testimony from our community..."</p>
                        <p class="mt-4 text-sm font-semibold">- Member Name</p>
                    </div>
                </div>
            `;
        }, 1500);
    });
}

// Notification system
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full`;
    
    // Set color based on type
    const colors = {
        success: 'bg-green-500 text-white',
        error: 'bg-red-500 text-white',
        warning: 'bg-yellow-500 text-black',
        info: 'bg-blue-500 text-white'
    };
    
    notification.className += ` ${colors[type] || colors.info}`;
    notification.innerHTML = `
        <div class="flex items-center justify-between">
            <span>${message}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-xl">&times;</button>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            if (notification.parentElement) {
                notification.remove();
            }
        }, 300);
    }, 5000);
}

// Utility functions
function formatDate(date) {
    return new Date(date).toLocaleDateString('en-TZ', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

function formatCurrency(amount, currency = 'TZS') {
    return new Intl.NumberFormat('en-TZ', {
        style: 'currency',
        currency: currency
    }).format(amount);
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Export functions for global use
window.toggleMobileMenu = toggleMobileMenu;
window.toggleMobileSubmenu = toggleMobileSubmenu;
window.showNotification = showNotification;
window.formatDate = formatDate;
window.formatCurrency = formatCurrency;
