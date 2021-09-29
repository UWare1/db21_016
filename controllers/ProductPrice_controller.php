<?php class ProductController {
    public function index() {
        $product_list = ProductPrice::getAll();
        require_once('views/ProductPrice/productPrice_crud.php');
    }

}
?>