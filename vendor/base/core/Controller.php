<?php

namespace base\core;
use base\core\View;
abstract class Controller
{

    public ?array $vars = null;
    protected string $layout;
    protected array $route;
    protected string $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }
    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }

    public function set($vars)
    {
        $this->vars = $vars;
    }
}