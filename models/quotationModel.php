<?php 
class Quotations{
    public $Q_ID;
    public $q_date;
    public $emp_id;
    public $cus_id;
    public $c;
    public $dep;

    public function __construct ($Q,$date,$empid,$cusid,$c,$depo) {
        $this->Q_ID = $Q;
        $this->q_date=$date;
        $this->emp_id=$empid;
        $this->cus_id=$cusid;
        $this->c=$c;
        $this->dep=$depo;
    }

    public static function getAll(){
        $quotationList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM quotation";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $Q_ID = $my_row[Qid];
            $q_date=$my_row[Qdate];
            $emp_id=$my_row[EMPid];
            $cus_id = $my_row[CUSid];
            $c=$my_row[credit];
            $dep=$my_row[deposit];
            $quotationList[] = new Quotations($Q_ID,$q_date,$emp_id,$cus_id,$c,$dep);
        }
        require("connection_close.php");
        return $quotationList;
    }

}
?>