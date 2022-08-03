    // index page menu bar click events
    let menu = document.querySelector('#menu-bar');
    let navbar = document.querySelector('.navbar');
    
    menu.addEventListener('click', () =>
    {
           menu.classList.toggle('fa-xmark'); 
           navbar.classList.toggle('nav-toggle');
    });

    window.onscroll = () =>
    {
           menu.classList.remove('fa-xmark'); 
           navbar.classList.remove('nav-toggle');
    }