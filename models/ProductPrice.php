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

    public static function search($key) {
        require("connection_connect.php");
        $sql = "SELECT * FROM product_price WHERE PDid LIKE '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
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

    public static function Add($PDid, $minQty, $Qty, $price, $screenPC) {
        require("connection_connect.php");
        $sql = "INSERT INTO product_price(PDid, minQty, Qty, price, screenPC) VALUES 
        ('PDid', 'minQty', 'Qty', 'price', 'screenPC')";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "add success $result rows";
    }

    public static function update($PDid, $minQty, $Qty, $price, $screenPC) {
        require("connection_connect.php");
        $sql = "UPDATE product_price SET minQty='$minQty', Qty='$Qty', price='$price', screenPC='$screenPC' WHERE PDid='$PDid'";
        $result = $onn->query($sql);
        require("connection_close.php");

        return "update success $result row";
    }

    public static function delete($PDid, $minQty) {
        require_once("connection_connect.php");
        $sql = "DELETE FROM product_price WHERE PDid='$PDid' AND minQty='$minQty'";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "delete success $result rows";
    }
    }
?>