document.addEventListener("DOMContentLoaded", function () {
  // Handle dropdown hover on desktop
  const dropdowns = document.querySelectorAll('.navbar .dropdown');

  dropdowns.forEach(dropdown => {
    dropdown.addEventListener('mouseenter', function () {
      if (window.innerWidth > 992) { // Desktop only
        this.classList.add('show');
        const menu = this.querySelector('.dropdown-menu');
        if (menu) menu.classList.add('show');
      }
    });
    dropdown.addEventListener('mouseleave', function () {
      if (window.innerWidth > 992) {
        this.classList.remove('show');
        const menu = this.querySelector('.dropdown-menu');
        if (menu) menu.classList.remove('show');
      }
    });
  });

  // Collapse navbar after clicking a link (mobile & tablet)
  const navLinks = document.querySelectorAll('#navbarNavDropdown .nav-link');
  const navbarCollapse = document.getElementById('navbarNavDropdown');

  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth < 992) { // Below lg breakpoint
        new bootstrap.Collapse(navbarCollapse).hide();
      }
    });
  });
});

window.addEventListener('resize', () => {
  if (window.innerWidth >= 992) {
    const navbarCollapse = document.getElementById('navbarNavDropdown');
    navbarCollapse.classList.add('show');
  }
});
