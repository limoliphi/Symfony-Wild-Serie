<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/actor' => [[['_route' => 'actor_index', '_controller' => 'App\\Controller\\ActorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/actor/new' => [[['_route' => 'actor_new', '_controller' => 'App\\Controller\\ActorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::add'], null, null, null, false, false, null]],
        '/episode' => [[['_route' => 'episode_index', '_controller' => 'App\\Controller\\EpisodeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/episode/new' => [[['_route' => 'episode_new', '_controller' => 'App\\Controller\\EpisodeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/program' => [[['_route' => 'program_index', '_controller' => 'App\\Controller\\ProgramController::index'], null, ['GET' => 0], null, true, false, null]],
        '/program/new' => [[['_route' => 'program_new', '_controller' => 'App\\Controller\\ProgramController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/season' => [[['_route' => 'season_index', '_controller' => 'App\\Controller\\SeasonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/season/new' => [[['_route' => 'season_new', '_controller' => 'App\\Controller\\SeasonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'wild_index', '_controller' => 'App\\Controller\\WildController::index'], null, null, null, false, false, null]],
        '/wild' => [[['_route' => 'wild_show_index', '_controller' => 'App\\Controller\\WildController::index'], null, null, null, true, false, null]],
        '/home' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/actor/([^/]++)(?'
                    .'|(*:60)'
                    .'|/edit(*:72)'
                    .'|(*:79)'
                    .'|(*:86)'
                .')'
                .'|/episode/([^/]++)(?'
                    .'|(*:114)'
                    .'|/edit(*:127)'
                    .'|(*:135)'
                    .'|(*:143)'
                .')'
                .'|/program/([^/]++)(?'
                    .'|(*:172)'
                    .'|/edit(*:185)'
                    .'|(*:193)'
                .')'
                .'|/season/([^/]++)(?'
                    .'|(*:221)'
                    .'|/edit(*:234)'
                    .'|(*:242)'
                .')'
                .'|/wild/(?'
                    .'|s(?'
                        .'|how(?:/([a-z0-9-]+))?(*:285)'
                        .'|eason/([^/]++)(*:307)'
                    .')'
                    .'|category/([^/]++)(*:333)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [[['_route' => 'actor_show', '_controller' => 'App\\Controller\\ActorController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        72 => [[['_route' => 'actor_edit', '_controller' => 'App\\Controller\\ActorController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        79 => [[['_route' => 'actor_delete', '_controller' => 'App\\Controller\\ActorController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        86 => [[['_route' => 'show_actor', '_controller' => 'App\\Controller\\WildController::showActor'], ['slug'], null, null, false, true, null]],
        114 => [[['_route' => 'episode_show', '_controller' => 'App\\Controller\\EpisodeController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        127 => [[['_route' => 'episode_edit', '_controller' => 'App\\Controller\\EpisodeController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        135 => [[['_route' => 'episode_delete', '_controller' => 'App\\Controller\\EpisodeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        143 => [[['_route' => 'wild_episode', '_controller' => 'App\\Controller\\WildController::showEpisode'], ['slug'], null, null, false, true, null]],
        172 => [[['_route' => 'program_show', '_controller' => 'App\\Controller\\ProgramController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        185 => [[['_route' => 'program_edit', '_controller' => 'App\\Controller\\ProgramController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        193 => [[['_route' => 'program_delete', '_controller' => 'App\\Controller\\ProgramController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        221 => [[['_route' => 'season_show', '_controller' => 'App\\Controller\\SeasonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'season_edit', '_controller' => 'App\\Controller\\SeasonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'season_delete', '_controller' => 'App\\Controller\\SeasonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        285 => [[['_route' => 'wild_show', 'slug' => null, '_controller' => 'App\\Controller\\WildController::show'], ['slug'], null, null, false, true, null]],
        307 => [[['_route' => 'wild_season', '_controller' => 'App\\Controller\\WildController::showBySeason'], ['id'], null, null, false, true, null]],
        333 => [
            [['_route' => 'show_category', '_controller' => 'App\\Controller\\WildController::showByCategory'], ['categoryName'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
