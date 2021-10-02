<?php
class QuotationController{
    public function index(){
        $quotationlist = Quotation::getAll();
        require_once('views/quotation/indexQuotation.php');
    }
    public function updateForm(){
        $QID = $_GET['Qid'];
        $Quotation = Quotation::get($QID);
        $employeelist = Employee::getAll();
        $customerlist = Customer::getAll();
        require_once('views/quotation/updateForm.php');
    }
    public function update(){
        $QID = $_GET['Qid'];
        $QDate = $_GET['QDate'];
        $CUSid = $_GET['CUSid'];
        $CUSname = $_GET['CUSname'];
        $EMPid= $_GET['EMPid'];
        $EMPname= $_GET['EMPname'];
        $Credit= $_GET['credit'];
        $Deposit= $_GET['deposit'];
        Quotation::update($QID,$QDate,$CUSid,$CUSname,$EMPid,$EMPname, $Credit, $Deposit);
        QuotationController::index();
    }
    public function DeleteConfirm(){
        $QID = $_GET['Qid'];
        $Quotation = Quotation::get($QID);
        require_once('views/quotation/DeleteConfirm.php');
    }
    public function delete(){
        $QID = $_GET['Qid'];
        Quotation::delete($QID);
        QuotationController::index();
    }
}
?>