//цели метрики

//отправка формы
document.addEventListener( 'wpcf7submit', function( event ) {
    yaCounter91580077.reachGoal('submitting_form');
}, false );

//telegram
const ymTelegram = document.querySelector('.ym-telegram');
ymTelegram.addEventListener( 'click', function( event ) {
    yaCounter91580077.reachGoal('telegram');
}, false );

//vk
const ymVk = document.querySelector('.ym-vk');
ymVk.addEventListener( 'click', function( event ) {
    yaCounter91580077.reachGoal('vkonakte');
}, false );
