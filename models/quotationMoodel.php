<?php 
class Quotation{
    public $QID;

    public function __construct ($QID) {
        $this->QID = $QID;
    }

    public static function getAll(){
        $quotationList = [];
        require("connection_connect.php");
        $sql = "SELECT q.Qid FROM quotation as q";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $QID = $my_row[Qid];
            $quotationList[] = new Quotation($QID);
        }
        require("connection_close.php");
        return $quotationList;
    }

}
?>