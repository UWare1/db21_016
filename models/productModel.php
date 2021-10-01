<?php
class Products{
    public $pdid;
    public $pdname;
    public $pdtype;
    public $pddes;

    public function __construct ($id,$name,$type,$des) {
        $this->pdid=$id;
        $this->pdname=$name;
        $this->pdtype=$type;
        $this->pddes=$des;
    }

    public static function getAll()
    {
        $productList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM Product";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $pdid = $my_row[PDid];
            $pdname = $my_row[PDname];
            $pdtype = $my_row[PDtype];
            $pddes = $my_row[PDdes];
            $productList[] = new Products($pdid,$pdname,$pdtype,$pddes);
        }
        require("connection_close.php");
        return $productList;
    }
}
?>