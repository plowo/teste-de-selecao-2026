// Mobile Menu Toggle
const mobileToggle = document.getElementById('mobileToggle');
const navMenu = document.getElementById('navMenu');

mobileToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    mobileToggle.textContent = navMenu.classList.contains('active') ? '✕' : '☰';
});

// Close mobile menu when clicking on a link
const navLinks = document.querySelectorAll('.nav-menu a');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        mobileToggle.textContent = '☰';
    });
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
let slideAtual = 0;
const carrossel = document.getElementById('carrossel');
const slides = carrossel.querySelectorAll('img');
const totalSlides = slides.length;

function atualizarSlide() {
    const larguraSlide = slides[0].clientWidth;
    carrossel.style.transform = `translateX(-${slideAtual * larguraSlide}px)`;
}

function avancarSlide() {
    slideAtual = (slideAtual + 1) % totalSlides;
    atualizarSlide();
}

function voltarSlide() {
    slideAtual = (slideAtual - 1 + totalSlides) % totalSlides;
    atualizarSlide();
}

window.addEventListener('resize', atualizarSlide);