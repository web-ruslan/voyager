<?php

return [
    'data_rows'  => [
        'author'           => 'Автор',
        'avatar'           => 'Аватар',
        'body'             => 'Вміст',
        'category'         => 'Категорія',
        'created_at'       => 'Дата створення',
        'display_name'     => 'Назва для відображення',
        'email'            => 'Email',
        'excerpt'          => 'Уривок',
        'featured'         => 'Рекомендовано',
        'id'               => 'ID',
        'meta_description' => 'Опис (meta)',
        'meta_keywords'    => 'Ключові слова (meta)',
        'name'             => 'Назва',
        'order'            => 'Сортування',
        'page_image'       => 'Зображення сторінки',
        'parent'           => 'Батько',
        'password'         => 'Пароль',
        'post_image'       => 'Зображення статті',
        'remember_token'   => 'Токен відновлення',
        'roles'            => 'Ролі',
        'seo_title'        => 'SEO Назва',
        'slug'             => 'URL Slug',
        'status'           => 'Статус',
        'title'            => 'Назва',
        'updated_at'       => 'Дата оновлення',
    ],
    'data_types' => [
        'category' => [
            'singular' => 'Категорія',
            'plural'   => 'Категорії',
        ],
        'menu'     => [
            'singular' => 'Меню',
            'plural'   => 'Меню',
        ],
        'page'     => [
            'singular' => 'Сторінка',
            'plural'   => 'Сторінки',
        ],
        'post'     => [
            'singular' => 'Стаття',
            'plural'   => 'Статті',
        ],
        'role'     => [
            'singular' => 'Роль',
            'plural'   => 'Ролі',
        ],
        'user'     => [
            'singular' => 'Користувач',
            'plural'   => 'Користувачі',
        ],
    ],
    'menu_items' => [
        'bread'        => 'BREAD',
        'categories'   => 'Категорії',
        'compass'      => 'Compass',
        'dashboard'    => 'Панель управління',
        'database'     => 'База даних',
        'media'        => 'Медіа',
        'menu_builder' => 'Конструктор Меню',
        'pages'        => 'Сторінки',
        'posts'        => 'Статті',
        'roles'        => 'Ролі',
        'settings'     => 'Налаштування',
        'tools'        => 'Інструменти',
        'users'        => 'Користувачі',
    ],
    'roles'      => [
        'admin' => 'Адміністратор',
        'user'  => 'Звичайний користувач',
    ],
    'settings'   => [
        'admin' => [
            'background_image'           => 'Фонове зображення для адмінки',
            'description'                => 'Опис адмінки',
            'description_value'          => 'Ласкаво просимо в Voyager. Адмінку для Laravel, яка зникла',
            'google_analytics_client_id' => 'Google Analytics Client ID (використовується для панелі адміністратора)',
            'icon_image'                 => 'Іконка адмінки',
            'loader'                     => 'Завантажувач адмінки',
            'title'                      => 'Назва адмінки',
        ],
        'site'  => [
            'description'                  => 'Опис сайту',
            'google_analytics_tracking_id' => 'Google Analytics Tracking ID',
            'logo'                         => 'Логотип сайту',
            'title'                        => 'Назва сайту',
        ],
    ],
];