<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',
 
    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'home'  => [
            'text'  => 'Home',   
            'url'   => '',  
            'title' => 'Hem'
        ],
 
        // This is a menu item
        'redovisning'  => [
            'text'  => 'Redovisning',   
            'url'   => '',   
            'title' => 'Redovisning',

            // Here we add the submenu, with some menu items, as part of a existing menu item
            'submenu' => [

                'items' => [

                    // This is a menu item of the submenu
                    'kmom01'  => [
                        'text'  => 'kmom01',   
                        'url'   => 'kmom01',  
                        'title' => 'Kursmoment 1'
                    ],

                    // This is a menu item of the submenu
                    'kmom02'  => [
                        'text'  => 'kmom02',   
                        'url'   => 'kmom02',  
                        'title' => 'Kursmoment 2'
                    ],
                ],
            ],
        ],
 
        // This is a menu item
        'source' => [
            'text'  =>'Källkod', 
            'url'   =>'source',  
            'title' => 'Källkod'
        ],
    ],
 
    // Callback tracing the current selected menu item base on scriptname
    'callback' => function($url) {
        if ($url == $this->di->get('request')->getRoute()) {
            return true;
        }
    },

    // Callback to create the urls
    'create_url' => function($url) {
        return $this->di->get('url')->create($url);
    },
];
