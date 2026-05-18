document.addEventListener('DOMContentLoaded', () => {

    // =============================================
    // HAMBURGER MENU
    // =============================================
    const toggle = document.getElementById('nav-toggle');
    const nav    = document.getElementById('main-nav');

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const isOpen = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', isOpen);
        });

        // Chiudi cliccando fuori
        document.addEventListener('click', (e) => {
            if (!nav.contains(e.target) && !toggle.contains(e.target)) {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', false);
            }
        });
    }

    // =============================================
    // ACTIVE LINK su scroll
    // =============================================
    const currentPath = window.location.pathname;
    document.querySelectorAll('.main-nav a').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });

    // =============================================
    // HEADER shadow on scroll
    // =============================================
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.style.boxShadow = window.scrollY > 20
                ? '0 2px 20px rgba(0,0,0,0.12)'
                : '0 2px 10px rgba(0,0,0,0.08)';
        }, { passive: true });
    }

});
