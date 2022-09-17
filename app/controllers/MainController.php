<?php

namespace app\controllers;

use app\factories\ProductFactory;
use app\models\BookM;
use app\models\DVDM;
use app\models\FurnitureM;
use base\core\Controller;
use app\models\Main;
use app\classes\Book;
use app\classes\Furniture;
use app\classes\DVD;

class MainController extends Controller
{
    public string $layout = 'default';

    public function indexAction()
    {
        $title = "Product List";

        $book = new BookM();
        $furnitureM = new FurnitureM();
        $dvd = new DVDM();

        $books = $book->findAll();
        $furniture = $furnitureM->findAll();
        $dvds = $dvd->findAll();

        if(!empty($_POST['id'])){
            $id = $_POST['id'];
            debug($id);
//            $main->deleteProduct($id);
        }
        $this->set(compact('title', 'books','furniture','dvds'));
    }

    public function createAction()
    {
        $title = 'Product Add';
        if ((!empty($_POST)) && !(empty($_POST['productType']))) {
            $data = $_POST;
            $type = $data['productType'];
            $product = (new ProductFactory())->getFactory($type)->fill($data);
            if($product instanceof Book){
               $book = new BookM();
               $book->save($product->getData());
            }else if($product instanceof Furniture){
                $furniture = new FurnitureM();
                $furniture->save($product->getData());
            }else{
                $dvd = new DVDM();
                $dvd->save($product->getData());
            }
        }
        $this->set(compact('title'));
    }

    public function deleteAction()
    {
        if (!empty($_POST)) {
            debug($_POST);
        }
    }
}