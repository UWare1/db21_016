<?php 
class Details{
    public $QID;
    public $Pd_id;
    public $Pd_color;
    public $qty;
    public $num_c;

    public function __construct ($qid,$pid,$c,$q,$numc) {
        $this->QID = $qid;
        $this->Pd_id = $pid;
        $this->Pd_color= $c;
        $this->qty=$q;
        $this->num_c=$numc; 
    }
    public static function getAll()
    {
        $detailList = [];
        require("connection_connect.php");
        $sql = "select * from quotation_detail";
        $result = $conn -> query($sql);
        while($my_row == $result->fetch_assoc())
        {
            $QID=$my_row[Qid];
            $Pd_id=$my_row[PDid];
            $Pd_color=$my_row[PDcolor];
            $qty = $my_row[QDqty];
            $num_c = $my_row[numColor];
            $detailList[] = new Details($QID,$Pd_id,$c,$q,$num_c);
        }
        require("connection_close.php");
        return $detailList;
    }
}
?>