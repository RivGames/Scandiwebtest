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
        $products = ($main->findAll());
        $this->set(compact('title', 'products'));
    }

    public function createAction()
    {
        $main = new Main();
        $title = 'Product Add';
        if ((!empty($_POST)) && !(empty($_POST['productType']))) {
            $data = $_POST;
            $main->load($data);
            $type = $data['productType'];
            $product = (new ProductFactory())->getFactory($type)->fill($data);
//            $main->save('products');
//            $main->query("INSERT INTO
//            products (name,sku,price,weight,size,height,width,length)
//            VALUES ({$product->getName()},{$product->getSku()},{$product->getPrice()},{$product->getWeight()})
//            ");
            $main->insertIntoMany($data);
            debug($main);
        }
        $this->set(compact('title'));
    }

    public function deleteAction()
    {

    }
}