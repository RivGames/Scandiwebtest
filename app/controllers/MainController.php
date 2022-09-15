<?php

namespace app\controllers;
use app\factories\ProductFactory;
use base\core\Controller;
class MainController extends Controller
{
    public string $layout = 'default';
    public function indexAction()
    {
        $title = "Product List";
        $this->set(compact('title'));
    }

    public function createAction()
    {
        $title = 'Product Add';

        $this->set(compact('title'));
        $data = $_POST;
        $type = $data['productType'];
        $product  = ((new ProductFactory())->getFactory($type))->fill($data);
        debug($product->getName());
    }
}