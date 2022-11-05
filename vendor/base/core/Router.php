<?php

namespace base\core;
class Router
{
    protected static array $routes = [];
    protected static array $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoute(): array
    {
        return self::$route;
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    public static function matchRoute($uri): bool
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#", $uri, $matches)) {
                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    public static function run($uri)
    {
        if (self::matchRoute($uri)) {
            $controller = 'app\controllers\\' . self::$route['controller'] . 'Controller';
            if (class_exists($controller)) {
                $cObj = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                if (method_exists($cObj, $action)) {
                    $cObj->$action();
                    $cObj->getView();
                } else {
                    echo('Метод' . $action . ' не найден!');
                    die;
                }
            } else {
                echo('Контроллер ' . $controller . ' не найден!');
                die;
            }
        } else {
            echo('Страница не найдена');
            die;
        }
    }

    protected static function upperCamelCase($name): string
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }

    protected static function lowerCamelCase($name): string
    {
        return str_replace(' ', '', lcfirst(str_replace('-', ' ', $name)));
    }
}