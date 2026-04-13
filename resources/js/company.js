const navLinks = document.querySelectorAll('[data-nav-link]');
const mobileNav = document.querySelector('#mobile-nav');
const navToggle = document.querySelector('[data-nav-toggle]');

if (navLinks.length > 0) {
    const activeClasses = ['bg-amber-200/70', 'text-amber-900'];

    const setActiveLink = (targetId) => {
        navLinks.forEach((link) => {
            const isActive = link.getAttribute('href') === `#${targetId}`;
            link.classList.toggle(activeClasses[0], isActive);
            link.classList.toggle(activeClasses[1], isActive);
        });
    };

    navLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const target = document.querySelector(link.getAttribute('href'));

            if (!target) return;

            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            setActiveLink(target.id);

            if (mobileNav && navToggle) {
                mobileNav.classList.add('hidden');
                navToggle.setAttribute('aria-expanded', 'false');
            }
        });
    });
}

if (mobileNav && navToggle) {
    navToggle.addEventListener('click', () => {
        mobileNav.classList.toggle('hidden');
        const isOpen = !mobileNav.classList.contains('hidden');
        navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
}
