const hamburger = document.querySelector(".hamburger");
const navbar = document.querySelector("#menu");
const navbarNav = document.querySelector(".navbar-nav");
hamburger.onclick = () => {
    hamburger.classList.toggle("open");
    navbar.classList.toggle("slide");
}


