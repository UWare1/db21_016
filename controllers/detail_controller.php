<?php
class detailController{
    public function index(){
        $detailList = Details::getAll();
        require_once('views/details/detail_crud.php');
    }
}
?>