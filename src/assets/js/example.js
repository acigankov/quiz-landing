const button = document.getElementById('example-more');
const list = document.getElementById('example-list');

button.addEventListener('click', function(event) {
    list.classList.toggle('open');
});