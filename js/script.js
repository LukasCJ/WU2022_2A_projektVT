const nav = document.getElementById('nav')
const nav_op = document.getElementById('nav_op')
const nav_close = document.getElementById('nav_close')

function toggleNav() {
    nav.classList.toggle('nav-active')
}

nav_op.addEventListener('click', toggleNav)
nav_close.addEventListener('click', toggleNav)