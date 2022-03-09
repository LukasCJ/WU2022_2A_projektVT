const nav = document.getElementsByTagName('nav')[0];
const nav_op = document.getElementById('nav_op');
const nav_close = document.getElementById('nav_close');

const all = document.getElementsByTagName('body')[0];

function openNav() {
    nav.classList.add('nav-active');
    all.style['overflow-y'] = 'hidden';
}

function closeNav() {
    nav.classList.remove('nav-active');
    all.style['overflow-y'] = 'scroll';
}

nav_op.addEventListener('click', openNav);
nav_close.addEventListener('click', closeNav);