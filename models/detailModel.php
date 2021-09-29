<?php 
class Details{
    public $QID;
    public $Pd_id;
    public function __construct ($id,$name) {
        $this->QID = $id;
        $this->Pd_id = $name;
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
            $detailList[] = new Details($QID,$Pd_id);
        }
        require("connection_close.php");
        return $detailList;
    }
}
?>