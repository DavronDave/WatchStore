<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
    'menu' => [[
        'icon' => 'fa fa-th-large',
        'title' => 'Рабочий стол',
        'url' => '/admin/home'
    ], [
        'icon' => 'fa fa-map-marker-alt',
        'title' => 'Проекты',
        'url' => '/admin/projects/index',
    ], [
        'icon' => 'fa fa-newspaper',
        'title' => 'Новости',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/admin/articles/index',
            'title' => 'Новости',
        ], [
            'url' => '/admin/article-categories/index',
            'title' => 'Категории новостей',
        ]]
    ], [
        'icon' => 'fa fa-file-alt',
        'title' => 'Нормативные акты',
        'url' => 'javascript:;',
        'caret' => true,
        'sub_menu' => [[
            'url' => '/admin/regulations/index',
            'title' => 'Нормативные акты',
        ], [
            'url' => '/admin/regulation-categories/index',
            'title' => 'Категории',
        ]]
    ], [
        'icon' => 'fa fa-address-book',
        'title' => 'Контакты',
        'url' => '/admin/contacts/index',
    ], [
        'icon' => 'fa fa-flag',
        'title' => 'О проекте',
        'url' => '/admin/about/index',
    ], [
        'icon' => 'fa fa-question-circle',
        'title' => 'ЧАВО',
        'url' => '/admin/faq/index',
    ], [
        'icon' => 'fa fa-comments',
        'title' => 'Заявки',
        'url' => '/admin/requests/index',
    ], [
        'icon' => 'fa fa-language',
        'title' => 'Языки',
        'url' => '/admin/languages/index',
    ], [
        'icon' => 'fa fa-cogs',
        'title' => 'Настройки',
        'url' => '/admin/setting/edit',
    ]]
];
