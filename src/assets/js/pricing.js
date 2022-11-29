const togglers = document.querySelectorAll('.pricing-more');

togglers.forEach(function(item)  {
    item.addEventListener('click' , function(event) {
        const targetData = item.getAttribute('data-toggler');
        const textBlock = document.querySelector('.description-list[data-togglerText="' + targetData + '"]');
        
        console.log (textBlock);

        textBlock.classList.toggle('open');
    });
});