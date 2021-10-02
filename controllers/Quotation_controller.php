<?php
class QuotationController{
    public function index(){
        $quotationlist = Quotation::getAll();
        require_once('views/quotation/indexQuotation.php');
    }
    public function newQuotation(){
        $quotationlist = Quotation::getAll();
        $employeelist = Employee::getAll();
        $customerlist = Customer::getAll();
        require_once('views/quotation/newQuotation.php');
    }
    public function addQuotation(){
        $QID = $_GET['Qid'];
        $QDate = $_GET['QDate'];
        $CUSid = $_GET['CUSid'];
        #$CUSname = $_GET['CUSname'];
        $EMPid= $_GET['EMPid'];
        #$EMPname= $_GET['EMPname'];
        $Credit= $_GET['credit'];
        $Deposit= $_GET['deposit'];
        $Production= $_GET['production'];
        $DateProduction= $_GET['date_production'];
        $Shipping= $_GET['shipping'];
        Quotation::addQ($QID,$QDate,$CUSid,$EMPid, $Credit, $Deposit, $Production, $DateProduction, $Shipping);
        QuotationController::index();
    }
    public function search(){
        $key = $_GET['key'];
        $quotationlist = Quotation::search($key);
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
        #$CUSname = $_GET['CUSname'];
        $EMPid= $_GET['EMPid'];
        #$EMPname= $_GET['EMPname'];
        $Credit= $_GET['credit'];
        $Deposit= $_GET['deposit'];
        $Production= $_GET['production'];
        $DateProduction= $_GET['date_production'];
        $Shipping= $_GET['shipping'];
        Quotation::update($QID,$QDate,$CUSid,$EMPid, $Credit, $Deposit, $Production, $DateProduction, $Shipping);
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