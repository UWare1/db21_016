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
        $q = $_GET['Qid'];
        $pid = $_GET['PDid'];
        $color = $_GET['PDcolor'];
        $qy = $_GET['QDqty'];
        $nc = $_GET['numColor'];

        Details::add($q,$pid,$color,$qy,$nc);
        detailController::index();

    }

    public function updateForm(){
        $q = $_GET['Qid'];
        $detail = Details::get($q);
        $quotationList = Quotations::getAll();
        $productList = Products::getAll();
        require_once('views/details/detail_update.php');
    }
}
?>