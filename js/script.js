const nav = document.getElementById('nav')
const nav_toggle = document.getElementsByClassName('toggle')

const grid = document.getElementById('grid_wrapper') //funkar inte
const grid_item = document.getElementsByClassName('grid_item-switch') //funkar inte

function toggleNav() {
    nav.classList.toggle('nav-active')
    grid_item.forEach(item => {  //funkar inte
        item.classList.toggle('grid_item-inactive')
    });
    grid.classList.toggle('grid-inactive') //funkar inte
}

nav_toggle.addEventListener('click', toggleNav)


const popular_scroll_right = document.getElementById('popular_scroll-right');
const popular_scroll_left = document.getElementById('popular_scroll-left');

popular_scroll_left.onclick = function () {
    document.querySelector('#popular .list').scrollLeft += 20;
};

popular_scroll_right.onclick = function () {
    document.querySelector('#popular .list').scrollRight -= 20;
};
