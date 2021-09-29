<?php 
class Details{
    public $id;
    public $name;
    public function __construct ($id,$name) {
        $this->id = $id;
        $this->name = $name;
    }
    public static function getAll()
    {
        $departmentList = [];
        require("connection_connect.php");
        $sql = "select * from quotation_detail";
        $result = $conn -> query($sql);
        while($my_row == $result->fetch_assoc())
        {
            $depID=$my_row[Qid];
            $depName =$my_row[PDid];
            $departmentList[] = new Details($depID,$depName);
        }
        require("connection_close.php");
        return $departmentList;
    }
}
?>