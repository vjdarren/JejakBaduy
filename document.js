document.querySelectorAll('#navbar-collapse ul li a').forEach(link => {
  link.addEventListener('click', () => {
    // Remove the active class from all links
    document.querySelectorAll('#navbar-collapse ul li a').forEach(a => a.classList.remove('active-link'));
    // Add the active class to the clicked link
    link.classList.add('active-link');
  });
});