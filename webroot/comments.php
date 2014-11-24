<?php
/**
 * This is a Anax pagecontroller.
 *
 */

// Get environment & autoloader and the $app-object.
require __DIR__.'/config_with_app.php';

// Create services and inject into the app.
$di = new \Anax\DI\CDIFactoryDefault();
$di->set('form', '\Mos\HTMLForm\CForm');

$di->setShared('db', function() {
    $db = new \Mos\Database\CDatabaseBasic();
    $db->setOptions(require ANAX_APP_PATH . 'config/database_mysql.php');
    $db->connect();
    return $db;
});


$di->set('UsersController', function() use ($di) {
    $controller = new \Anax\Users\UsersController();
    $controller->setDI($di);
    return $controller;
});

$di->set('CommentController', function() use ($di) {
    $controller = new \Anax\Comment\CommentDbController();
    $controller->setDI($di);
    return $controller;
});

$app = new \Anax\Kernel\CAnax($di);

// Start session
$app->session;
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');
$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');


// Add routes ------------------------------------------------

// $app->url->setUrlType(\Anax\Url\CUrl::URL_CLEAN);


$app->router->add('', function() use ($app) {

    $app->theme->setTitle("Users");

    $app->views->add('me/page', [
        'content' => "<h1 style='border: 0;'>Databasdrivet kommentarsystem</h1>",
    ]);

    $app->dispatcher->forward([
        'controller' => 'comment',
        'action' => 'view',
    ]);

});

// Finish off the page ----------------------------------------------

// Run the route handler
$app->router->handle();

// Set configuration for theme




// Add extra styling
$app->theme->addStylesheet('css/table.css');
$app->theme->addStylesheet('css/databasecomments.css');
$app->theme->addStylesheet('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');


// Navigation

// Render the response using theme engine.
$app->theme->render();