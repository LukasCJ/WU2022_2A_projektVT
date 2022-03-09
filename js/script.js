const nav = document.getElementById('nav')
const nav_op = document.getElementsById('nav_op')
const nav_close = document.getElementsById('nav_close')

function toggleNav() {
    nav.classList.toggle('nav-active')
}

nav_op.addEventListener('click', toggleNav)


const popular_scroll_right = document.getElementById('popular_scroll-right');
const popular_scroll_left = document.getElementById('popular_scroll-left');
const popular_list = document.getElementById('popular_list')

function popularScrollL() {
    popular_list.scrollLeft += 20;
};
function popularScrollR() {
    popular_list.scrollRight -= 20;
};

popular_scroll_left.addEventListener('click', popularScrollL)
popular_scroll_right.addEventListener('click', popularScrollR)
