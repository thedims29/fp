const navLinks = document.querySelectorAll('.nav-link');
  
    navLinks.forEach(link => {
      link.addEventListener('mouseover', () => {
        link.style.textDecoration = 'underline';
      });
      link.addEventListener('mouseout', () => {
        link.style.textDecoration = 'none';
      });
    });

    