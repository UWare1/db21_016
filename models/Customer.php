<?php
    class Customer{
        public $CUSid;
        public $CUSname;
        public $CUSaddress;
        public $CUStel;
        public function __construct($CUSid, $CUSname, $CUSaddress, $CUStel){
            $this->CUSid = $CUSid;
            $this->CUSname = $CUSname;
            $this->CUSaddress=$CUSaddress;
            $this->CUStel = $CUStel;
        }
        public static function getAll(){
            $customerlist = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM customer";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $CUSid = $my_row['CUSid'];
                $CUSname = $my_row['CUSname'];
                $CUSaddress=$my_row['CUSaddress'];
                $CUStel = $my_row['CUStel'];
                $customerlist[] = new Customer($CUSid, $CUSname, $CUSaddress, $CUStel);
            }
            require("connection_close.php");
            return $customerlist;
        }
    }
?>