<?php
require __DIR__.'/config_with_app.php';


// Create services and inject into the app. for the commentcontrol 
//$di  = new \Anax\DI\CDIFactoryDefault();

$di->set('CommentController', function() use ($di) {
    $controller = new Phpmvc\Comment\CommentController();
    $controller->setDI($di);
    return $controller;
});

$app = new \Anax\Kernel\CAnax($di);

//Set navbar
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');


//$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');
$app->theme->configure(ANAX_APP_PATH . 'config/theme-grid.php');
 
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
    setComments();
    

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
      setComments('kmom01');

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
      setComments('kmom02');
}); 

 
 
$app->router->add('kmom03', function() use ($app) {

    $app->theme->setTitle("Kmom03");
    
    $content = $app->fileContent->get('kmom03.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    
    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');
    

    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);
      setComments('kmom03');
}); 

 
$app->router->add('source', function() use ($app) {
 
    $app->theme->addStylesheet('css/source.css');
    $app->theme->setTitle("Källkod");
 
    $source = new \Mos\Source\CSource([
        'secure_dir' => '..', 
        'base_dir' => '..', 
        'add_ignore' => ['.htaccess'],
    ]);
 
    $app->views->add('me/source', [
    	'content' => $source->View(),
    ]);
 
});
/**
 * Set comment function on a page that call this function
 *
 */
function setComments($pageTitle = ""){
    global $app;
    $app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
        'params'     => array(
        'page' => $pageTitle
        )
    ]);

    $app->views->add(
        'comment/form', 
        [
            'page'      => $pageTitle,
            'mail'      => null,
            'web'       => null,
            'name'      => null,
            'content'   => null,
            'output'    => null,
            'edit'      => false,
        ],
        'comment-form'
    );
}
/////// module 3 ///////
/*
$app->router->add('tema', function() use ($app) {

    $app->theme->setTitle("- PHPMVC - ");

    $content = $app->fileContent->get('tema.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');

    $byline = $app->fileContent->get('byline.md');
    $byline = $app->textFilter->doFilter($byline, 'shortcode, markdown');

    $app->views->add('me/page', [
        'content' => $content,
        'byline' => $byline,
    ]);
    setComments();
    

});
*/

$app->router->add('tema', function() use ($app) {

    $app->theme->setTitle("- PHPMVC - ");
    $app->theme->setTitle("Mitt tema"); 
    $content = $app->fileContent->get('tema.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
    
    $flash = $app->fileContent->get('flash.md');
    $flash = $app->textFilter->doFilter($flash, 'shortcode, markdown');
    
    $sidebar = $app->fileContent->get('tema_sidebar.md');
	
    $sidebar = $app->textFilter->doFilter($sidebar, 'shortcode, markdown');
    
    $featured_1 = $app->fileContent->get('featured-1.md');
    $featured_1 = $app->textFilter->doFilter($featured_1, 'shortcode, markdown');
    $featured_2 = $app->fileContent->get('featured-2.md');
    $featured_2 = $app->textFilter->doFilter($featured_2, 'shortcode, markdown');
    $featured_3 = $app->fileContent->get('featured-3.md');
    $featured_3 = $app->textFilter->doFilter($featured_3, 'shortcode, markdown');
    
    $footer_col_1 = $app->fileContent->get('footer-col-1.md');
    $footer_col_1 = $app->textFilter->doFilter($footer_col_1, 'shortcode, markdown');
    $footer_col_2 = $app->fileContent->get('footer-col-2.md');
    $footer_col_2 = $app->textFilter->doFilter($footer_col_2, 'shortcode, markdown');
    $footer_col_3 = $app->fileContent->get('footer-col-3.md');
    $footer_col_3 = $app->textFilter->doFilter($footer_col_3, 'shortcode, markdown');
    $footer_col_4 = $app->fileContent->get('footer-col-4.md');
    $footer_col_4 = $app->textFilter->doFilter($footer_col_4, 'shortcode, markdown');
    //Main 
     $app->views->add('me/page', [
        'content' => $content,
    ]); 
	
    // Flash
     $app->views->add('me/page', [
        'content' => $flash,
    ], 'flash');
    
    // Featured
     $app->views->add('me/page', [
       'content' => $featured_1,
    ], 'featured-1');
    
     $app->views->add('me/page', [
        'content' => $featured_2,
    ], 'featured-2');
    
     $app->views->add('me/page', [
        'content' => $featured_3,
		
    ], 'featured-3');
    
    // Sidebar
	
     $app->views->add('me/page', [
        'content' => $sidebar,
    ], 'sidebar');
    
    // Footer cols
     $app->views->add('me/page', [
        'content' => $footer_col_1,
    ], 'footer-col-1');
    
     $app->views->add('me/page', [
        'content' => $footer_col_2,
    ], 'footer-col-2');
    
     $app->views->add('me/page', [
        'content' => $footer_col_3,
    ], 'footer-col-3');
    
     $app->views->add('me/page', [
        'content' => $footer_col_4,
    ], 'footer-col-4');
    
    $app->views->addString('flash', '')
               ->addString('featured-1', '')
               ->addString('featured-2', '')
               ->addString('featured-3', '')
               ->addString('main', '')
               ->addString('sidebar', '')
               ->addString('triptych-1', '')
               ->addString('triptych-2', '')
               ->addString('triptych-3', '')
               ->addString('featured-3', '')
               ->addString('main', '')
               ->addString('sidebar', '')
               ->addString('triptych-1', '')
               ->addString('triptych-2', '')
               ->addString('triptych-3', '')
               ->addString('footer-col-1', '')
               ->addString('footer-col-2', '')
               ->addString('footer-col-3', '')
               ->addString('footer-col-4', '');
    
});



$app->router->add('regioner', function() use ($app) {
 
    $app->theme->addStylesheet('css/anax-grid/regions_demo.css');
    $app->theme->setTitle("Regioner");
 
    $app->views->addString('flash', 'flash')
               ->addString('featured-1', 'featured-1')
               ->addString('featured-2', 'featured-2')
               ->addString('featured-3', 'featured-3')
               ->addString('main', 'main')
               ->addString('sidebar', 'sidebar')
               ->addString('triptych-1', 'triptych-1')
               ->addString('triptych-2', 'triptych-2')
               ->addString('triptych-3', 'triptych-3')
               ->addString('footer-col-1', 'footer-col-1')
               ->addString('footer-col-2', 'footer-col-2')
               ->addString('footer-col-3', 'footer-col-3')
               ->addString('footer-col-4', 'footer-col-4');
 
});

$app->router->add('typography', function() use ($app){
    // Prepare the page content
    $app->theme->setTitle("Typografi");

    $app->views->addString("<h1>HTML Ipsum Presents</h1>
         
<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href='#''>Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

<h2>Header Level 2</h2>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</blockquote>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

<h3>Header Level 3</h3>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

<pre>
#header h1 a { 
  display: block; 
  width: 300px; 
  height: 80px; 
}
</pre>

<h4>Header Level 4</h4>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

<table>
  <caption>Table 1. Example table</caption>
  <thead>
    <tr>
      <th>Header 1</th>
      <th>Header 2</th>
      <th>Header 3</th>
      <th>Header 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
  </tbody>
</table>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

<h5>Header Level 5</h5>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

<ul>
   <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
   <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
   <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
   <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
</ul>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

<ol>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
   <li>Vestibulum auctor dapibus neque.</li>
</ol>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

<h6>Header Level 6</h6>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

<dl>
   <dt>Definition list</dt>
   <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
   <dt>Lorem ipsum dolor sit amet</dt>
   <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
</dl>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
", 'main')
               ->addString("<h1>HTML Ipsum Presents</h1>
         
<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href='#''>Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

<h2>Header Level 2</h2>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

<blockquote>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</blockquote>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

<h3>Header Level 3</h3>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

<pre>
#header h1 a { 
  display: block; 
  width: 300px; 
  height: 80px; 
}
</pre>", 'sidebar');
});

$app->router->add('fontawesome', function() use ($app){
    // Prepare the page content
    $app->theme->setTitle("Font Awesome");

    $app->views->addString('<h1>Testa Font Awesome</h1>
        <h2>40 New Icons in 4.0</h2>
        <ul class="fa-ul">
  <li><i class="fa-li fa fa-rub"></i>fa-rub</li>
  <li><i class="fa-li fa fa-ruble"></i>fa-ruble (alias)</li>
  <li><i class="fa-li fa fa-rouble"></i>fa-rouble (alias)</li>
  <li><i class="fa-li fa fa-pagelines"></i>fa-pagelines</li>
  <li><i class="fa-li fa fa-stack-exchange"></i>fa-stack-exchange</li>
  <li><i class="fa-li fa fa-arrow-circle-o-right"></i>fa-arrow-circle-o-right</li>
  <li><i class="fa-li fa fa-arrow-circle-o-left"></i>fa-arrow-circle-o-left</li>
  <li><i class="fa-li fa fa-carret-square-o-left"></i>fa-carret-square-o-left</li>
  <li><i class="fa-li fa fa-toggle-left"></i>fa-toggle-left (alias)</li>
  <li><i class="fa-li fa fa-dot-circle-o"></i>fa-dot-circle-o</li>
  <li><i class="fa-li fa fa-wheelchair"></i>fa-wheelchair</li>
  <li><i class="fa-li fa fa-vimeo-square"></i>fa-vimeo-square</li>
  <li><i class="fa-li fa fa-try"></i>fa-try</li>
  <li><i class="fa-li fa fa-turkish-lira"></i>fa-turkish-lira</li>

</ul>', 'main')
               ->addString("<h2>Variationer</h2> Så här kan du använda ikonerna i olika sammanhang. <h3>Inline Icons</h3><i class='fa fa-camera-retro'></i> fa-camera-retro<h3>Large Icons</h3><i class='fa fa-camera-retro fa-lg'></i> fa-lg<br/>
<i class='fa fa-camera-retro fa-2x'></i> fa-2x<br/>
<i class='fa fa-camera-retro fa-3x'></i> fa-3x<br/>
<i class='fa fa-camera-retro fa-4x'></i> fa-4x<br/>
<i class='fa fa-camera-retro fa-5x'></i> fa-5x", 'sidebar');

});