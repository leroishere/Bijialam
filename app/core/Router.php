<?php


namespace App\Core;


use App\Controllers\StudentController;

class Router
{
private $routes = [];



public function add(string $method, string $uri, string $controller, string $function): void
{
    $this->routes[] = [
        'method' => $method,
        'uri' => $uri,
        'controller' => $controller,
        'function' => $function,
    ];
}
public function run(): void
{
    $method = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

    foreach ($this->routes as $route) {
        if ($route['method'] == $method && $route['uri'] == $uri) {
            $pattern = str_replace(
                search: '{id}',
                replace: '([0-9]+)',
                subject: $route['uri']
            );

            $pattern = '#^' . $pattern . '$#';

            if (preg_match($pattern, $uri, $matches)) {
                require_once './app/controllers/' . $route['controller'] . '.php';
                array_shift($matches);
                $controllerClass = 'App\\Controllers\\' . $route['controller'];
                $controller = new $controllerClass();

                $function = $route['function'];
                $controller->$function();

                return;
            }
        }
    }


    http_response_code(404);
    echo '<h1>404 - Page Not Found</h1>';
}
}