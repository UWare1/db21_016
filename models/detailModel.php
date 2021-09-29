<?php 
class Details{
    public $QID;
    public $Pd_id;
    public $Pd_c;
    public $qty;
    public $numc;

    public function __construct ($QID,$Pd_id,$Pd_c,$qty,$numc) {
        $this->QID = $QID;
        $this->Pd_id = $Pd_id;
        $this->Pd_c = $Pd_c;
        $this->qty = $qty;
        $this->numc = $numc;
    }
    public static function getAll()
    {
        $detailList = [];
        require("connection_connect.php");
        $sql = "select * from quotation_detail";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $QID = $my_row[Qid];
            $Pd_id = $my_row[PDid];
            $Pd_c = $my_row[PDcolor];
            $qty = $my_row[QDqty];
            $numc= $my_row[numColor];
            $detailtList[] = new Details($QID,$Pd_id,$Pd_c,$qty,$numc);
        }
        require("connection_close.php");
        return $detailList;
    }
}
?>