const nav = document.getElementById('nav')
const nav_op = document.getElementById('nav_op')
const nav_close = document.getElementById('nav_close')

function toggleNav() {
    nav.classList.toggle('nav-active')
}

nav_op.addEventListener('click', toggleNav)
nav_close.addEventListener('click', toggleNav)


const popular_scroll_right = document.getElementById('popular_scroll-right');
const popular_scroll_left = document.getElementById('popular_scroll-left');

popular_scroll_left.onclick = function () {
    document.querySelector('#popular .list').scrollLeft += 20;
};
popular_scroll_right.onclick = function () {
    document.querySelector('#popular .list').scrollRight -= 20;
};
