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

        public function __construct ($QID,$QDate,$CUSid,$CUSname,$EMPid,$EMPname, $Credit, $Deposit) {
            $this->QID = $QID;
            $this->QDate = $QDate;
            $this->CUSid = $CUSid;
            $this->CUSname = $CUSname;
            $this->EMPid = $EMPid;
            $this->EMPname = $EMPname;
            $this->Credit = $Credit;
            $this->Deposit = $Deposit;
        }

        public static function get($QID) {
            require("connection_connect.php");
            $sql = "SELECT Qid, QDate, CUSid, CUSname, EMPid, EMPname, credit, deposit FROM quotation
            NATURAL JOIN customer NATURAL JOIN employee
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

            require("connection_close.php");
    
            return new Quotation($QID,$QDate,$CUSid,$CUSname,$EMPid,$EMPname, $Credit, $Deposit);
        }

        public static function getAll(){
        $quotationlist = [];
        require("connection_connect.php");
        $sql = "SELECT Qid, QDate, CUSid, CUSname, EMPid, EMPname, credit, deposit FROM quotation
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
            $quotationlist[] = new Quotation($QID,$QDate,$CUSid,$CUSname,$EMPid,$EMPname, $Credit, $Deposit);
        }
        require("connection_close.php");
        return $quotationlist;
    }
    public static function update(){
        require("connection_connect.php");
        $sql = "UPDATE quotation
        SET QDate = $QDate, CUSid = $CUSid, CUSname = $CUSname, EMPid = $EMPid, EMPname = $EMPname, credit = $Credit, deposit = $Deposit
        WHERE Qid = $QID";
        $result = $conn -> query($sql);
        require("connection_close.php");
        return "UPDATE SUCCESS!";
    }
    public static function delete(){
        require("connection_connect.php");
        $sql = "DELETE From quotation
        WHERE Qid = $QID";
        $result = $conn -> query($sql);
        require("connection_close.php");
        return "DELETE SUCCESS!";
    }
    }
?>