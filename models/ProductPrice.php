<?php
    class ProductPrice {
        public $PDid;
        public $PDname;
        public $minQty;
        public $Qty;
        public $price;
        public $screenPC;

    public function __construct ($PDid,$PDname,$minQty,$Qty,$price,$screenPC) {
        $this->PDid = $PDid;
        $this->PDname = $PDname;
        $this->minQty = $minQty;
        $this->Qty = $Qty;
        $this->price = $price;
        $this->screenPC = $screenPC;
    }

    public static function get($PDid) {
        require("connection_connect.php");
        $sql = "SELECT PDid,PDname,pp.minQty,pp.Qty,pp.price,pp.screenPC FROM Product 
        NATURAL JOIN product_price AS pp";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $PDid = $my_row[PDid];
        $PDname = $my_row[PDname];
        $minQty = $my_row[minQty];
        $Qty = $my_row[Qty];
        $price = $my_row[price];
        $screenPC = $my_row[screenPC];
        require("connection_close.php");

        return new productPrice($PDid,$PDname,$minQty,$Qty,$price,$screenPC);
    }

    public static function getAll()
    {
        $productList= [];
        require("connection_connect.php");
        $sql = "SELECT PDid,PDname,pp.minQty,pp.Qty,pp.price,pp.screenPC FROM Product 
        NATURAL JOIN product_price AS pp";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $PDid = $my_row[PDid];
            $PDname = $my_row[PDname];
            $minQty = $my_row[minQty];
            $Qty = $my_row[Qty];
            $price = $my_row[price];
            $screenPC = $my_row[screenPC];
            $productList[]= new ProductPrice($PDid,$PDname, $minQty, $Qty, $price, $screenPC);
        }
        
        require("connection_close.php");

        return $productList;
    }

    public static function search($key) {
        $productList= [];
        require("connection_connect.php");
        $sql = "SELECT * FROM product_price WHERE (PDid LIKE '%$key%' OR minQty LIKE '%$key%' OR 
        Qty LIKE '%$key%' OR price LIKE '%$key%' OR screenPC LIKE '%$key%')";
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
        $result = $conn->query($sql);
        require("connection_close.php");

        return "update success $result row";
    }

    public static function delete($PDid, $minQty) {
        require("connection_connect.php");
        $sql = "DELETE FROM product_price WHERE PDid='$PDid' AND minQty='$minQty'";
        $result = $conn->query($sql);
        require("connection_close.php");

        return "delete success $result rows";
    }
    }
?>