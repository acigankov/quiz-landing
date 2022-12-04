<?php

add_action('init', 'register_post_type_testimonials'); // Использовать функцию только внутри хука init

function register_post_type_testimonials()
{
    $labels = array(
        'name' => 'Список отзывов', // заголовок на странице открытого раздела в админке
        'singular_name' => 'Тип постов для отзывов', // Назваине типа постов в админке
        'add_new' => 'Добавить элемент',
        'add_new_item' => 'Добавить новый элемент', // заголовок тега <title>
        'edit_item' => 'Редактировать элемент',
        'new_item' => 'Новый элемент',
        'all_items' => 'Все элементы',
        'view_item' => 'Просмотр элемента на сайте',
        'search_items' => 'Искать элементы в бд',
        'not_found' => 'Элементов не найдено.',
        'not_found_in_trash' => 'В корзине нет элементов.',
        'menu_name' => 'Отзывы' // название ссылки в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => false,
        'menu_icon' => 'dashicons-testimonial', // иконка в меню
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'custom-fields',)
    );
    register_post_type('testimonials', $args);
}