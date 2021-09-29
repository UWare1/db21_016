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

    public function addProductPrice() {
        $PDid = $_GET['PDid'];
        $minQty = $_GET['minQty'];
        $Qty = $_GET['Qty'];
        $price = $_GET['price'];
        $screenPC = $_GET['screenPC'];
        ProductPrice::Add($PDid,$minQty,$Qty,$price,$screenPC);

        ProductController::index();
    }
}
?>