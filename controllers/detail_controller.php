<?php
class detailController{
    public function index(){
        $detailList = Details::getAll();
        require_once('views/pages/detail_crud.php');
    }
}
?>