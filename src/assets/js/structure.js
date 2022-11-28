const items = document.querySelectorAll('.structure-item');

items.forEach(function(item)  {
    item.addEventListener('click' , function() {
        items.forEach(function(item)  {
            item.classList.remove('active');
        });
        this.classList.toggle('active');
    });
});