<?php
    class ProductPrice {
        public $PDid;
        public $minQty;
        public $Qty;
        public $price;
        public $screenPC;

    public function __construct ($PDid,$minQty,$Qty,$price,$screenPC) {
        $this->PDid = $PDid;
        $this->minQty = $minQty;
        $this->Qty = $Qty;
        $this->price = $price;
        $this->screenPC = $screenPC;
    }

    public static function get($PDid) {
        require("connection_connect.php");
        $sql = "select * from product_price";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $PDid = $my_row[PDid];
        $minQty = $my_row[minQty];
        $Qty = $my_row[Qty];
        $price = $my_row[price];
        $screenPC = $my_row[screenPC];
        require("connection_close.php");

        return new ProductPrice($PDid,$minQty,$Qty,$price,$screenPC);
    }

    public static function getAll()
    {
        $productList= [];
        require("connection_connect.php");
        $sql = "select * from product_price";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $my_row = $result->fetch_assoc();
            $PDid = $my_row[PDid];
            $minQty = $my_row[minQty];
            $Qty = $my_row[Qty];
            $price = $my_row[price];
            $screenPC = $my_row[screenPC];
            $productList[]= new ProductPrice($PDid, $minQty, $Qty, $price, $screenPC);
        }
        
        require("connection_close.php");

        return $productList;
    }

    
    }
?>