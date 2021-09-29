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

    public function search() {
        $key=$_GET['key'];
        $productList=ProductPrice::search($key);
        require_once('views/pages/newproductPrice.php');
    }

    public function updateForm() {
        $PDid = $_GET['PDid'];
        $ProductPrice= ProductPrice::get($PDid);
        $productList=ProductPrice::getAll();
        require_once('views/pages/updateFormPP.php');
    }

    public function update() {
        $PDid=$_GET['PDid'];
        $minQty=$_GET['minQty'];
        $Qty=$_GET['Qty'];
        $price=$_GET['price'];
        $screenPC=$_GET['screenPC'];
        ProductPrice::update($PDid, $minQty, $Qty, $price, $screenPC);
        ProductController::index();
    }
}
?>