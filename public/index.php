<?php
require_once '../app/core/Router.php';
use App\Core\Router;
$router = new Router();

//register routes
$router->add(method: 'GET', uri: '/students', controller: 'StudentController', function: 'index');
$router->add(method: 'GET', uri: '/students/create', controller: 'StudentController', function: 'create');
$router->add(method: 'GET', uri: '/students/{id}', controller: 'StudentController', function: 'show');
$router->run();
?>
 