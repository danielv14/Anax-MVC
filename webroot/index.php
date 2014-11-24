<?php 
/**
 * This is a Anax pagecontroller.
 *
 */


require __DIR__.'/config_with_app.php'; 


// Create services and inject into the app. 
$di  = new \Anax\DI\CDIFactoryDefault();




$di  = new \Anax\DI\CDIFactoryDefault();
$di->set('FormController', function () use ($di) {
    $controller = new \Anax\HTMLForm\FormController();
    $controller->setDI($di);
    return $controller;
});
$di->set('FormSmallController', function () use ($di) {
    $controller = new \Anax\HTMLForm\FormSmallController();
    $controller->setDI($di);
    return $controller;
});
$app = new \Anax\MVC\CApplicationBasic($di);

// Starts the database
$di->setShared('db', function() {
    $db = new \Mos\Database\CDatabaseBasic();
    $db->setOptions(require ANAX_APP_PATH . 'config/database_mysql.php');
    $db->connect();
    return $db;
});

$di->set('form', '\Mos\HTMLForm\CForm');

// Starts/injects the Controller for the Comment model
$di->set('CommentController', function() use ($di) {
    $controller = new \Anax\Comment\CommentDbController();
    $controller->setDI($di);
    return $controller;
});
// Starts/injects the Controller for the Users model 
$di->set('UsersController', function() use ($di) {
    $controller = new \Anax\Users\UsersController();
    $controller->setDI($di);
    return $controller;
});   


$app = new \Anax\Kernel\CAnax($di);

// Configuration for the theme_me file
$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');
$app->navbar->configure(ANAX_APP_PATH . 'config/navbar_me.php');

$app->theme->addStylesheet('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
$app->theme->addStylesheet('css/databasecomments.css');




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

// Comment route 
$app->router->add('comments', function() use ($app) {

    $app->theme->setTitle("Kommentarer");

    $app->views->add('me/page', [
        'content' => "<h1 style='border: 0;'>Databasdrivet kommentarsystem</h1>",
    ]);

    $app->dispatcher->forward([
        'controller' => 'comment',
        'action' => 'view',
    ]);

});
 
 

// Setup route
$app->router->add('setup', function() use ($app) {
    $app->theme->setTitle("Setup database");

    $app->db->setVerbose(false);
 
    $app->db->dropTableIfExists('user')->execute();
     
 
    $app->db->createTable(
        'user',
        [
            'id' => ['integer', 'primary key', 'not null', 'auto_increment'],
            'acronym' => ['varchar(20)', 'unique', 'not null'],
            'email' => ['varchar(80)'],
            'name' => ['varchar(80)'],
            'password' => ['varchar(255)'],
            'created' => ['datetime'],
            'updated' => ['datetime'],
            'deleted' => ['datetime'],
            'active' => ['datetime'],
        ]
    )->execute();

     $app->db->insert(
        'user',
        ['acronym', 'email', 'name', 'password', 'created', 'active']
    );
 
    $now = date("Y/m/d H:i:s");
 
    $app->db->execute([
        'admin',
        'admin@dbwebb.se',
        'Administrator',
        password_hash('admin', PASSWORD_DEFAULT),
        $now,
        $now
    ]);
 
    $app->db->execute([
        'doe',
        'doe@dbwebb.se',
        'John/Jane Doe',
        password_hash('doe', PASSWORD_DEFAULT),
        $now,
        $now
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