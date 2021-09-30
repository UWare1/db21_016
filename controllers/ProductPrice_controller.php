<?php 
class ProductController {
    public function index() {
        $productList = ProductPrice::getAll();
        require_once('views/productprice/productPrice_crud.php');
    }

    public function newproductPrice()
    {
        $productList = ProductPrice::getAll();
        require_once('views/productprice/newproductPrice.php');
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
        require_once('views/productprice/newproductPrice.php');
    }

    public function updateForm() {
        $PDid = $_GET['PDid'];
        $ProductPrice= ProductPrice::get($PDid);
        $productList=ProductPrice::getAll();
        require_once('views/productprice/updateFormPP.php');
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

    public function deleteComfirm() {
        $PDid=$_GET['PDid'];
        $ProductPrice=ProductPrice::get($PDid);
        require_once('views/productprice/deleteConfirm.php');
    }

    public function delete() {
        $PDid=$_GET['PDid'];
        $minQty=$_GET['minQty'];
        ProductPrice::delete($PDid,$minQty);
        ProductController::index();

    }
}
?>