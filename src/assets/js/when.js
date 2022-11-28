const items = document.querySelectorAll('.when-list__item');
const imageSrc = document.querySelector('.when-description__image');
const description = document.querySelector('.when-description__text');


//пробегаемся по каждому элемену циклом forEach()
items.forEach(function (item) {
    //на каждый элемент вешаем слушатель событий на клик
    item.addEventListener('click',function(event) {
        //только если клик был по названию
        if(event.target.tagName == 'SPAN') {
            //внутри кликнутного элемента находим путь к иконе
            const targetImage = this.querySelector('.when-list__image').getAttribute('src');
            //внутри кликнутого элемента находим текст в атрибуте дата
            const targetText = this.dataset.description;

            //Устанавливаем в новую картинку. Т.е. меням путь
            imageSrc.setAttribute('src', targetImage);
            //Заменяем текст
            description.textContent = targetText;

            //Удаялем у всех элемнтов списка класс active
            items.forEach(function (item) { item.classList.remove('active') });
            //Делаем текущий элемент активным. Устанавливаем класс active
            this.classList.add('active')
       }
    });
});