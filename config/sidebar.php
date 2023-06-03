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
        'icon' => 'fa fa-newspaper',
        'title' => 'Banners',
        'url' => '/admin/banners/index',
    ], [
        'icon' => 'fa fa-map-marker-alt',
        'title' => 'Product',
        'url' => '/admin/products/index',
    ],[
        'icon' => 'fa fa-map-marker-alt',
        'title' => 'Characteristics',
        'url' => '/admin/characteristics/index',
    ], [
        'icon' => 'fa fa-address-book',
        'title' => 'Контакты',
        'url' => '/admin/contacts/index',
    ], [
        'icon' => 'fa fa-flag',
        'title' => 'About',
        'url' => '/admin/about/index',
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
