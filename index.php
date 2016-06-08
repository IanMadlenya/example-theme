<?php

return [

    'name' => 'example-theme',

    'menus' => [

        'main' => 'Main',

    ],

    'positions' => [

        'sidebar' => 'Sidebar',
        'top' => 'Top'

    ],

    'node' => [

        'top_style' => 'uk-block-muted'

    ],

    'widget' => [

        'panel' => ''

    ],

    'config' => [
        'navbar_sticky' => false
    ],

    'events' => [

        'view.system/site/admin/settings' => function ($event, $view) use ($app) {
            $view->script('site-theme', 'theme:app/bundle/site-theme.js', 'site-settings');
            $view->data('$theme', $this);
        },

        'view.system/site/admin/edit' => function ($event, $view) {
            $view->script('node-theme', 'theme:app/bundle/node-theme.js', 'site-edit');
        },

        'view.system/widget/edit' => function ($event, $view) {
            $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
        }

    ]

];
