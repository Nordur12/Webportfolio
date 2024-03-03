let sun = document.getElementById('sun')
let clouds =document.getElementById('clouds')

window.addEventListener('scroll', function(){
    let value =window.scrollY;
    clouds.style.left =value *0.25 + 'px';
    sun.style.top = value * 0.25+'px';
});

        
let links = document.querySelectorAll('header ul li a');

links.forEach(function(link) {
    link.addEventListener('click', function(e) {
    e.preventDefault();
    let href = this.getAttribute('href');
    let targetElement = document.querySelector(href);
    targetElement.scrollIntoView({ behavior: 'smooth' });
    });
});
document.getElementById('home-link').addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>
{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll = () =>
{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}