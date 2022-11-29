const toggler = document.querySelector('.mechanic-text__more');
const el = document.getElementById('mechanic-list');

toggler.addEventListener('click', function(event) {
    el.classList.toggle('open');
});

