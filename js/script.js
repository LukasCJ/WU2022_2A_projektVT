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


const cat_full_vid = document.getElementById('category_full-video');
const cat_full_mu = document.getElementById('category_full-music');
const cat_full_bks = document.getElementById('category_full-books');

function openSubsVid() {
    cat_full_vid.classList.toggle('subcategory-active');
}

function openSubsMu() {
    cat_full_mu.classList.toggle('subcategory-active');
}

function openSubsBks() {
    cat_full_bks.classList.toggle('subcategory-active');
}

cat_full_vid.addEventListener('click', openSubsVid);
cat_full_mu.addEventListener('click', openSubsMu);
cat_full_bks.addEventListener('click', openSubsBks);