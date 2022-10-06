<?php

namespace app\controllers;

use app\factories\ProductFactory;
use base\core\Controller;
use app\models\Main;

class MainController extends Controller
{
    public string $layout = 'default';

    public function indexAction()
    {
        $title = "Product List";
        $main = new Main();
        $products = $main->findAll();
        if (!empty($_POST['id'])) {
            $ids = $_POST['id'];
            $main->deleteProduct($ids);
            header('Refresh:0');
        }
        $this->set(compact('title','products'));
    }

    public function createAction()
    {
        $title = 'Product Add';
        if ((!empty($_POST)) && !(empty($_POST['productType']))) {
            $data = $_POST;
            $main = new Main();
            $type = $data['productType'];
            $product = (new ProductFactory())->getProductType($type);
            $product->fill($data);
            debug($product);
            $main->save($product->getData());
        }
        $this->set(compact('title'));
    }
}