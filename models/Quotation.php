<?php
    class Quotation{
        public $QID;
        public $QDate;
        public $CUSid;
        public $CUSname;
        public $EMPid;
        public $EMPname;
        public $Credit;
        public $Deposit;
        public $Production;
        public $DateProduction;
        public $Shipping;

        public function __construct ($QID,$QDate,$CUSid,$CUSname,$EMPid,$EMPname, $Credit, $Deposit, $Production, $DateProduction, $Shipping) {
            $this->QID = $QID;
            $this->QDate = $QDate;
            $this->CUSid = $CUSid;
            $this->CUSname = $CUSname;
            $this->EMPid = $EMPid;
            $this->EMPname = $EMPname;
            $this->Credit = $Credit;
            $this->Deposit = $Deposit;
            $this->Production = $Production;
            $this->DateProduction = $DateProduction;
            $this->Shipping = $Shipping;
        }

        public static function get($QID) {
            require("connection_connect.php");
            $sql = "SELECT Qid, QDate, CUSid, CUSname, EMPid, EMPname, credit, deposit, production, date_production, shipping FROM quotation
            NATURAL JOIN customer NATURAL JOIN employee
            WHERE Qid = '$QID'
            ORDER BY Qid";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $QID = $my_row['Qid'];
            $QDate = $my_row['QDate'];
            $CUSid = $my_row['CUSid'];
            $CUSname = $my_row['CUSname'];
            $EMPid= $my_row['EMPid'];
            $EMPname= $my_row['EMPname'];
            $Credit= $my_row['credit'];
            $Deposit= $my_row['deposit'];
            $Production= $my_row['production'];
            $DateProduction= $my_row['date_production'];
            $Shipping= $my_row['shipping'];

            require("connection_close.php");
    
            return new Quotation($QID,$QDate,$CUSid,$CUSname,$EMPid,$EMPname, $Credit, $Deposit, $Production, $DateProduction, $Shipping);
        }

        public static function getAll(){
        $quotationlist = [];
        require("connection_connect.php");
        $sql = "SELECT Qid, QDate, CUSid, CUSname, EMPid, EMPname, credit, deposit, production, date_production, shipping FROM quotation
        NATURAL JOIN customer NATURAL JOIN employee
        ORDER BY Qid";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $QID = $my_row['Qid'];
            $QDate = $my_row['QDate'];
            $CUSid = $my_row['CUSid'];
            $CUSname = $my_row['CUSname'];
            $EMPid= $my_row['EMPid'];
            $EMPname= $my_row['EMPname'];
            $Credit= $my_row['credit'];
            $Deposit= $my_row['deposit'];
            $Production= $my_row['production'];
            $DateProduction= $my_row['date_production'];
            $Shipping= $my_row['shipping'];
            $quotationlist[] = new Quotation($QID,$QDate,$CUSid,$CUSname,$EMPid,$EMPname, $Credit, $Deposit, $Production, $DateProduction, $Shipping);
        }
        require("connection_close.php");
        return $quotationlist;
    }
    public static function addQ($QID, $QDate, $CUSid, $EMPid, $Credit, $Deposit, $Production, $DateProduction, $Shipping){
        require("connection_connect.php");
        $sql = "INSERT INTO quotation(Qid, QDate, CUSid, EMPid, credit, deposit, production, date_production, shipping)
        VALUES('$QID', '$QDate', '$CUSid', '$EMPid', '$Credit', '$Deposit', '$Production', '$DateProduction', '$Shipping')";
        $result = $conn -> query($sql);
        require("connection_close.php");
        return "ADD SUCCESS!";
    }
    public static function search($key){
        $searchlist = [];
        require("connection_connect.php");
        $sql = "SELECT Qid, QDate, CUSid, CUSname, EMPid, EMPname, credit, deposit, production, date_production, shipping FROM quotation
        NATURAL JOIN customer NATURAL JOIN employee
        WHERE (Qid like '%$key%' or QDate like '%$key%' or CUSid like '%$key%' or CUSname like '%$key%' or EMPid like '%$key%'
        or EMPname like '%$key%' or credit like '%$key%' or deposit like '%$key%' or production like '%$key%' 
        or date_production like '%$key%' or shipping like '%$key%')";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $QID = $my_row['Qid'];
            $QDate = $my_row['QDate'];
            $CUSid = $my_row['CUSid'];
            $CUSname = $my_row['CUSname'];
            $EMPid= $my_row['EMPid'];
            $EMPname= $my_row['EMPname'];
            $Credit= $my_row['credit'];
            $Deposit= $my_row['deposit'];
            $Production= $my_row['production'];
            $DateProduction= $my_row['date_production'];
            $Shipping= $my_row['shipping'];
            $searchlist[] = new Quotation($QID,$QDate,$CUSid,$CUSname,$EMPid,$EMPname, $Credit, $Deposit, $Production, $DateProduction, $Shipping);
        }
        require("connection_close.php");
        return $searchlist;
    }
    public static function update($QID, $QDate, $CUSid, $EMPid, $Credit, $Deposit, $Production, $DateProduction, $Shipping){
        require("connection_connect.php");
        $sql = "UPDATE quotation
        SET QDate = '$QDate', CUSid = '$CUSid', EMPid = '$EMPid', credit = '$Credit', deposit = '$Deposit', 
        production = '$Production', date_production = '$DateProduction', shipping = '$Shipping'
        WHERE Qid = '$QID'";
        $result = $conn -> query($sql);
        require("connection_close.php");
        return "Update SUCCESS!";
    }
    public static function delete($QID, $QDate, $CUSid){
        require("connection_connect.php");
        $sql = "DELETE From quotation
        WHERE Qid = '$QID' AND QDate = '$QDate' AND CUSid = '$CUSid'";
        $result = $conn -> query($sql);
        require("connection_close.php");
        return "Delete SUCCESS!";
    }
    }
?>