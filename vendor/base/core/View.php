<?php

namespace base\core;

class View
{
    public array $route = [];
    public string $view;
    public string $layout;

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        $this->view = $view;
        if ($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: 'default';
        }
    }

    public function render($vars)
    {
        if (is_array($vars)) {
            extract($vars);
        }
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if (isset($file_view)) {
            require $file_view;
        } else {
            echo 1;
        }
        $content = ob_get_clean();
        if ($this->layout) {
            $file_layout = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($file_layout)) {
                require $file_layout;
            } else {
                echo 'не найден шаблон ' . $file_layout;
            }
        }
    }
}