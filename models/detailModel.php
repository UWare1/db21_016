<?php 
class Details{
    public $QID;
    public $Pd_id;
    public $Pd_c;
    public $qty;
    public $numc;
    public $Pd_name;
    public $Pd_d;

    public function __construct ($QID,$Pd_id,$Pd_name,$Pd_d,$Pd_c,$qty,$numc) {
        $this->QID = $QID;
        $this->Pd_id = $Pd_id;
        $this->Pd_name=$Pd_name;
        $this->Pd_c = $Pd_c;
        $this->qty = $qty;
        $this->numc = $numc;
        $this->Pd_d = $Pd_d;
    }
    public static function getAll()
    {
        $detailList = [];
        require("connection_connect.php");
        $sql = "SELECT q.Qid,p.PDid,p.PDname,p.PDdes,q.PDcolor,q.QDqty,q.numColor FROM quotation_detail AS q
        NATURAL JOIN Product AS p
        ORDER BY q.Qid";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $QID = $my_row[Qid];
            $Pd_id = $my_row[PDid];
            $Pd_name=$my_row[PDname];
            $Pd_d = $my_row[PDdes];
            $Pd_c = $my_row[PDcolor];
            $qty = $my_row[QDqty];
            $numc= $my_row[numColor];
            $detailList[] = new Details($QID,$Pd_id,$Pd_name,$Pd_d,$Pd_c,$qty,$numc);
        }
        require("connection_close.php");
        return $detailList;
    }

    public static function search($key){
        $detailList = [] ;
        require("connection_connect.php");
        $sql = "SELECT q.Qid,p.PDid,p.PDname,p.PDdes,q.PDcolor,q.QDqty,q.numColor FROM quotation_detail AS q NATURAL JOIN Product AS p
        where (q.Qid like '%$key%' or p.PDid like '%$key%' or p.PDname like '%$key%' or p.PDdes like '%$key%' or q.PDcolor like '%$key%' 
        or q.QDqty like '%$key%' or q.numColor like '%$key%') ";
        $result = $conn->query($sql);

        while($my_row = $result->fetch_assoc())
        {
            $QID = $my_row[Qid];
            $Pd_id = $my_row[PDid];
            $Pd_name=$my_row[PDname];
            $Pd_d = $my_row[PDdes];
            $Pd_c = $my_row[PDcolor];
            $qty = $my_row[QDqty];
            $numc= $my_row[numColor];
            $detailList[] = new Details($QID,$Pd_id,$Pd_name,$Pd_d,$Pd_c,$qty,$numc);
        }
        require("connection_close.php");
    return $detailList;
    }

    public static function add($q,$pid,$color,$qy,$nc){
        require("connection_connect.php");
        $sql = "insert into quotation_detail"
    }
}
?>