<?php

namespace app\controllers;
use base\core\Controller;
class MainController extends Controller
{
    public string $layout = 'default';
    public function indexAction()
    {
        $text = "ы";
        $this->set(compact('text'));
    }
}