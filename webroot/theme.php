<?php 
/**
 * This is a Anax pagecontroller.
 *
 */


require __DIR__.'/config_with_app.php'; 


// Create services and inject into the app. 
$di  = new \Anax\DI\CDIFactoryDefault();

$di->set('CommentController', function() use ($di) {
    $controller = new Phpmvc\Comment\CommentController();
    $controller->setDI($di);
    return $controller;
});

$app = new \Anax\Kernel\CAnax($di);

// Configuration for the theme_me file
$app->theme->configure(ANAX_APP_PATH . 'config/theme-grid.php');
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_theme.php');
 
 

 // Home route with the regions
 $app->router->add('', function() use ($app) { 

   
   $app->theme->setTitle("Mitt tema");
 
    $content = $app->fileContent->get('tema.md');
    $content = $app->textFilter->doFilter($content, 'shortcode, markdown');
     
    
 
    $app->views->add('me/page', [
        'content' => $content,
    ]);      
     });
     
// Region route     
$app->router->add('regioner', function() use ($app) {
 
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

// Report route 
$app->router->add('typography', function() use ($app) {
 
$app->theme->setTitle("Typografi");
 
    $content = $app->fileContent->get('typography.html');  
   
 
    $app->views->add('theme-sidebar/page', [
        'content' => $content,
            ]); 
    
    $app->views->add('theme-sidebar/sidebar',  
            ['content' => $content], 
            'sidebar');  
    
   
});

// Comments route
$app->router->add('font-awesome', function() use ($app) { 
  
    $app->theme->setTitle("Font Awesome"); 
    $content = $app->fileContent->get('font_awesome.html');  
    $sidebar = $app->fileContent->get('font_awesome_sidebar.html');
   
    $app->views->add('theme-sidebar/page', [
        'content' => $content,
            ]); 

	$app->views->add('theme-sidebar/sidebar', [
        'content' => $sidebar], 
        'sidebar');  


}); 


// Source route 
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



$app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN);
$app->router->handle();
$app->theme->render();