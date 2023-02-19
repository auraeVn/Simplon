const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown => {
const select = dropdown.querySelector('.select');
const fleche = dropdown.querySelector('.fleche');
const menu = dropdown.querySelector('.menu');
const options = dropdown.querySelectorAll('.menu li');
const selected = dropdown.querySelector('.selected');

select.addEventListener('click', () => {
    select.classList.toggle('select-clicked');
    fleche.classList.toggle('fleche-rotate');
    menu.classList.toggle('menu-open');
});

options.forEach(option => {
    option.addEventListener('click', () => {
        select.classList.remove('select-clicked');
        fleche.classList.remove('fleche-rotate');
        menu.classList.remove('menu-open');
    });

});
});