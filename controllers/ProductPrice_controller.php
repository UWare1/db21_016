<?php class ProductController {
    public function index() {
        $product_list = ProductPrice::getAll();
        require_once('views/pages/productPrice_crud.php');
    }

}
?>