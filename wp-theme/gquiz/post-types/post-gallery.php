<?php

add_action('init', 'register_post_type_gallery'); // Использовать функцию только внутри хука init

function register_post_type_gallery()
{
    $labels = array(
        'name' => 'Галерея фотографий', // заголовок открытого в менюшке
        'singular_name' => 'Посты для галереи слайдера', // админ панель Добавить->Услугу
        'add_new' => 'Добавить элемент',
        'add_new_item' => 'Добавить новый элемент', // заголовок тега <title>
        'edit_item' => 'Редактировать элемент',
        'new_item' => 'Новый элемент',
        'all_items' => 'Все элементы',
        'view_item' => 'Просмотр элемента на сайте',
        'search_items' => 'Искать элементы в бд',
        'not_found' => 'Элементов не найдено.',
        'not_found_in_trash' => 'В корзине нет элементов.',
        'menu_name' => 'Галерея' // название ссылки в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => false,
        'menu_icon' => 'dashicons-format-gallery', // иконка в меню
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'custom-fields',)
    );
    register_post_type('gallery', $args);
}