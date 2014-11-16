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
$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');
 
 

 // Home route
$app->router->add('', function() use ($app) {
$app->theme->setTitle("Start");
 
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
        'params' => ['pageKey' => $app->request->getCurrentUrl()], 
    ]);

    $app->views->add('comment/form', [
        'mail'      => null,
        'web'       => null,
        'name'      => null,
        'content'   => null,
        'output'    => null,
    ]);

 
});

// Report route 
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
    
   
});

// Comments route
$app->router->add('comments', function() use ($app) { 
  
    $app->theme->setTitle("Kommentarer"); 
    $app->views->add('comment/index'); 
    
	 $app->views->add('comment/form', [
        'mail'      => null,
        'web'       => null,
        'name'      => null,
        'content'   => null,
        'output'    => null,
    ]);
$app->dispatcher->forward([
        'controller' => 'comment',
        'action'     => 'view',
        'params' => ['pageKey' => $app->request->getCurrentUrl()], 
    ]);




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