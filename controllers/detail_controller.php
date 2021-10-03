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
        $pid = $_GET['PDid'];
        $color = $_GET['PDcolor'];
        $qy = $_GET['QDqty'];
        $nc = $_GET['numColor'];
        $d = Details::get($q,$pid,$color,$qy,$nc);
        $quotationList = Quotations::getAll();
        $productList = Products::getAll();
        require_once('views/details/detail_update.php');
    }
    public function update(){
        $q = $_GET['Qid'];
        $pid = $_GET['PDid'];
        $color = $_GET['PDcolor'];
        $qy = $_GET['QDqty'];
        $nc = $_GET['numColor'];
        Details::update($q,$pid,$color,$qy,$nc);
        detailController::index();
    }
    public function delete_Confirm(){
        $q = $_GET['Qid'];
        $pid = $_GET['PDid'];
        $color = $_GET['PDcolor'];
        $qy = $_GET['QDqty'];
        $nc = $_GET['numColor'];
        $d = Details::get($q,$pid,$color,$qy,$nc);
        require_once('views/details/detail_confirm.php');
        
    }
    public function delete(){
        $q = $_GET['x'];
        $pid = $_GET['y'];
        $color = $_GET['z'];
        Details::delete($q,$pid,$color);
        detailController::index();
    }
   
}
?>