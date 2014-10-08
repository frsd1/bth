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
            'url'   => 'index.php',  
            'title' => 'Hem'
        ],
 
        // This is a menu item
        'test'  => [
            'text'  => 'Redovisning',   
            'url'   => 'redovisning.php',   
            'title' => 'Redovisningar',

            // Here we add the submenu, with some menu items, as part of a existing menu item
            'submenu' => [

                'items' => [

                    // This is a menu item of the submenu
                    'item 1'  => [
                        'text'  => 'kmom01',   
                        'url'   => 'kmom01.php',  
                        'title' => 'Kursmoment 1'
                    ],

                    // This is a menu item of the submenu
                    'item 2'  => [
                        'text'  => 'kmom2',   
                        'url'   => 'kmom02.php',  
                        'title' => 'Kursmoment 3'
                    ],
							      // This is a menu item of the submenu
                    'item 3'  => [
                        'text'  => 'kmom03',   
                        'url'   => 'kmom03.php',  
                        'title' => 'Kursmoment 3'
                    ],

                ],
            ],
        ],
 
        // This is a menu item
        'source' => [
            'text'  =>'Källlod', 
            'url'   =>'source.php',  
            'title' => 'Källkod för MVC'
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
