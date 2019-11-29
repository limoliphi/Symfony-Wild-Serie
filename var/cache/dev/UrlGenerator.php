<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'category' => [[], ['_controller' => 'App\\Controller\\CategoryController::add'], [], [['text', '/category']], [], []],
    'wild_index' => [[], ['_controller' => 'App\\Controller\\WildController::index'], [], [['text', '/']], [], []],
    'wild_show' => [['slug'], ['slug' => null, '_controller' => 'App\\Controller\\WildController::show'], ['slug' => '[a-z0-9-]+'], [['variable', '/', '[a-z0-9-]+', 'slug', true], ['text', '/wild/show']], [], []],
    'show_category' => [['categoryName'], ['_controller' => 'App\\Controller\\WildController::showByCategory'], [], [['variable', '/', '[^/]++', 'categoryName', true], ['text', '/wild/category']], [], []],
    'wild_season' => [['id'], ['_controller' => 'App\\Controller\\WildController::showBySeason'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/wild/season']], [], []],
    'wild_episode' => [['id'], ['_controller' => 'App\\Controller\\WildController::showEpisode'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/episode']], [], []],
    'wild_show_index' => [[], ['_controller' => 'App\\Controller\\WildController::index'], [], [['text', '/wild/']], [], []],
    'app_index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/home/']], [], []],
];
