<?php
class QuotationController{
    public function index(){
        $quotationlist = Quotation::getAll();
        require_once('views/quotation/indexQuotation.php');
    }
    public function updateForm(){
        $QID = $_GET['Qid'];
        $Quotation = Quotation::get($QID);
        $quotationlist = Quotation::getAll();
        require_once('views/quotation/updateForm.php');
    }
}
?>