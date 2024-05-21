document.getElementById('navbarToggle').addEventListener('click', function() {
    var navbarContent = document.querySelector('.navbar-content');
    navbarContent.style.display = (navbarContent.style.display === 'block') ? 'none' : 'block';
});