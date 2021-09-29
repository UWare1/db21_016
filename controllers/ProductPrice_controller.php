<?php 
class ProductController {
    public function index() {
        $productList = ProductPrice::getAll();
        require_once('views/pages/productPrice_crud.php');
    }

    public function newproductPrice()
    {
        $productList = ProductPrice::getAll();
        require_once('views/pages/newproductPrice.php');
    }
}
?>