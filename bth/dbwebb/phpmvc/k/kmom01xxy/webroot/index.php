<?php
require __DIR__.'/config_with_app.php';


// Create services and inject into the app. for the commentcontrol 
$di  = new \Anax\DI\CDIFactoryDefault();

$di->set('CommentController', function() use ($di) {
    $controller = new Phpmvc\Comment\CommentController();
    $controller->setDI($di);
    return $controller;
});

$app = new \Anax\Kernel\CAnax($di);

// Set navbar
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');

$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');
 
$app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN);

$app->router->add('', function() use ($app) {
    $app->theme->setTitle("- PHPMVC - ");

    $content = $app->fileContent->get('me.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');

    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');

    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);

    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
    ]);

});

$app->router->add('redovisning', function() use ($app) {
    $app->theme->setTitle("Redovisning");
 
    $content = $app->fileContent->get('redovisning.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown'); 
 
    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);

    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
        'params'     => ['redovisning',],
    ]); 
});

$app->router->add('kmom01', function() use ($app) {
    $app->theme->setTitle("Kmom01");
    
    $content = $app->fileContent->get('kmom01.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
    
    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);

    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
        'params'     => ['kmom01',],
    ]);
    $app->views->add('comment/form', [
        'mail'      => null,
        'web'       => null,
        'name'      => null,
        'content'   => null,
        'output'    => null,
        'rederect'  => '',
    ]);
});

$app->router->add('kmom02', function() use ($app) {
    $app->theme->setTitle("Kmom02");
    
    $content = $app->fileContent->get('kmom02.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
    
    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);
    $app->views->add('comment/form', [
        'mail'      => null,
        'web'       => null,
        'name'      => null,
        'content'   => null,
        'output'    => null,
        'rederect'  => '',
    ]);
}); 

 
$app->router->add('source', function() use ($app) {
 
    $app->theme->addStylesheet('css/source.css');
    $app->theme->setTitle("källkod");
 
    $source = new \Mos\Source\CSource([
        'secure_dir' => '..', 
        'base_dir' => '..', 
        'add_ignore' => ['.htaccess'],
    ]);
 
    $app->views->add('me/source', [
        'content' => $source->View(),
    ]);
 
});



/*
// Home route
$app->router->add('', function() use ($app) {

    $app->theme->setTitle("Welcome to Anax Guestbook");
    $app->views->add('comment/index');

    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
    ]);

    $app->views->add('comment/form', [
        'mail'      => null,
        'web'       => null,
        'name'      => null,
        'content'   => null,
        'output'    => null,
        'rederect'  => '',
    ]);
});
 */
 
//$app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN); 

$app->router->handle();
$app->theme->render();
