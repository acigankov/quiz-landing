const items = document.querySelectorAll('.structure-item');
const stickers = document.querySelectorAll('.sticker-image');

items.forEach(function(item)  {
    item.addEventListener('click' , function(event) {

        if(event.target.className != 'sticker-image__image' && !event.target.closest('sticker-image')) {
            items.forEach(function(item)  {
                item.classList.remove('active');
            });
            this.classList.toggle('active');
        }
    });
});

stickers.forEach(function(item)  {
    item.addEventListener('click', function(event) {
        stickers.forEach(function(item)  {
            item.classList.remove('open');
        });

        this.classList.toggle('open');
        const title = this.querySelector('.sticker-image__image').dataset.title;
        const descriptionEl = this.querySelector('.sticker-image__description');
        
        descriptionEl.textContent = title;

    });
});


window.addEventListener('click', function(event) {
    if(event.target.className != 'sticker-image__image') {
        stickers.forEach(function(item)  {
            item.classList.remove('open');
        });
    }
});
