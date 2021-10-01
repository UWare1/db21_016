<?php
class detailController{
    public function index(){
        $detailList = Details::getAll();
        require_once('views/details/detail_crud.php');
    }
    public function search(){
        $key=$_GET['key'];
        $detailList = Details::search($key);
        require_once('views/details/detail_crud.php');
    }
    public function newQuotation(){
        $quotationList = Quotations::getAll();
        $productList = Products::getAll();
        require_once('views/details/detail_new.php');
    }
}
?>