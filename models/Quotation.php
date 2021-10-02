<?php
    class Quotation{
        public $QID;
        public $QDate;
        public $PDname;
        public $PDid;
        public $CUSid;
        public $CUSname;
        public $EMPid;
        public $EMPname;

        public function __construct ($QID,$QDate,$PDname,$PDid,$CUSid,$CUSname,$EMPid,$EMPname) {
            $this->QID = $QID;
            $this->QDate = $QDate;
            $this->PDname=$PDname;
            $this->PDid = $PDid;
            $this->CUSid = $CUSid;
            $this->CUSname = $CUSname;
            $this->EMPid = $EMPid;
            $this->EMPname = $EMPname;
        }

        public static function get($QID) {
            require("connection_connect.php");
            $sql = "SELECT Qid, QDate, PDid, PDname, CUSid, CUSname, EMPid, EMPname FROM quotation
            NATURAL JOIN Product NATURAL JOIN customer NATURAL JOIN employee
            ORDER BY Qid";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $QID = $my_row[Qid];
            $QDate = $my_row[QDate];
            $PDname=$my_row[PDname];
            $PDid = $my_row[PDid];
            $CUSid = $my_row[CUSid];
            $CUSname = $my_row[CUSname];
            $EMPid= $my_row[EMPid];
            $EMPname= $my_row[EMPname];

            require("connection_close.php");
    
            return new Quotation($QID,$QDate,$PDname,$PDid,$CUSid,$CUSname,$EMPid,$EMPname);
        }

        public static function getAll(){
        $quotationlist = [];
        require("connection_connect.php");
        $sql = "SELECT Qid, QDate, PDid, PDname, CUSid, CUSname, EMPid, EMPname FROM quotation
        NATURAL JOIN Product NATURAL JOIN customer NATURAL JOIN employee
        ORDER BY Qid";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $QID = $my_row[Qid];
            $QDate = $my_row[QDate];
            $PDname=$my_row[PDname];
            $PDid = $my_row[PDid];
            $CUSid = $my_row[CUSid];
            $CUSname = $my_row[CUSname];
            $EMPid= $my_row[EMPid];
            $EMPname= $my_row[EMPname];
            $quotationlist[] = new Quotation($QID,$QDate,$PDname,$PDid,$CUSid,$CUSname,$EMPid,$EMPname);
        }
        require("connection_close.php");
        return $quotationlist;
    }
    }
?>