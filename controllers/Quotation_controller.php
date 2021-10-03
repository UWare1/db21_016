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
        $QID = $_GET['QID'];
        $QDate = $_GET['QDate'];
        $CUSid = $_GET['CUSid'];
        #$CUSname = $_GET['CUSname'];
        $EMPid= $_GET['EMPid'];
        #$EMPname= $_GET['EMPname'];
        $Credit= $_GET['Credit'];
        $Deposit= $_GET['Deposit'];
        $Production= $_GET['Production'];
        $DateProduction= $_GET['DateProduction'];
        $Shipping= $_GET['Shipping'];
        Quotation::addQ($QID,$QDate,$CUSid,$EMPid, $Credit, $Deposit, $Production, $DateProduction, $Shipping);
        QuotationController::index();
    }
    public function search(){
        $key = $_GET['key'];
        $quotationlist = Quotation::search($key);
        require_once('views/quotation/indexQuotation.php');
    }
    public function updateForm(){
        $QID = $_GET['QID'];
        $Quotation = Quotation::get($QID);
        $employeelist = Employee::getAll();
        $customerlist = Customer::getAll();
        require_once('views/quotation/updateForm.php');
    }
    public function update(){
        $QID = $_GET['QID'];
        $QDate = $_GET['QDate'];
        $CUSid = $_GET['CUSid'];
        #$CUSname = $_GET['CUSname'];
        $EMPid= $_GET['EMPid'];
        #$EMPname= $_GET['EMPname'];
        $Credit= $_GET['Credit'];
        $Deposit= $_GET['Deposit'];
        $Production= $_GET['Production'];
        $DateProduction= $_GET['DateProduction'];
        $Shipping= $_GET['Shipping'];
        Quotation::update($QID,$QDate,$CUSid,$EMPid, $Credit, $Deposit, $Production, $DateProduction, $Shipping);
        QuotationController::index();
    }
    public function DeleteConfirm(){
        $QID = $_GET['QID'];
        $Quotation = Quotation::get($QID);
        require_once('views/quotation/DeleteConfirm.php');
    }
    public function delete(){
        $QID = $_GET['QID'];
        Quotation::delete($QID);
        QuotationController::index();
    }
}
?>