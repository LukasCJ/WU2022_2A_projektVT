const nav = document.getElementsByTagName('nav')[0];
const nav_op = document.getElementById('nav_op');
const nav_close = document.getElementById('nav_close');

function openNav() {
    nav.classList.add('nav-active');
}
function closeNav() {
    nav.classList.remove('nav-active');
}

nav_op.addEventListener('click', openNav);
nav_close.addEventListener('click', closeNav);