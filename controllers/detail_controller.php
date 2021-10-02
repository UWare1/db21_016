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
    public function addDetail(){
        $q = $_GET['Q_ID'];
        $pid = $_GET['pdid'];
        $color = $_GET['PDcolor'];
        $qy = $_GET['QDqty'];
        $nc = $_GET['numColor'];

        Details::
    }
}
?>