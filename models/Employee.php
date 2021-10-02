<?php
    class Employee{
        public $EMPid;
        public $EMPname;
        public $EMPuser;
        public $EMPpass;
        public $EMPpst;
        public function __construct($EMPid, $EMPname, $EMPuser, $EMPpass, $EMPpst){
            $this->EMPid = $EMPid;
            $this->EMPname = $EMPname;
            $this->EMPuser=$EMPuser;
            $this->EMPpass = $EMPpass;
            $this->EMPpst = $EMPpst;
        }
        public static function getAll(){
            $employeelist = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Employee";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $EMPid = $my_row[EMPid];
                $EMPname = $my_row[EMPname];
                $EMPuser=$my_row[EMPuser];
                $EMPpass = $my_row[EMPpass];
                $EMPpst = $my_row[EMPpst];
                $employeelist[] = new Employee($EMPid, $EMPname, $EMPuser, $EMPpass, $EMPpst);
            }
            require("connection_close.php");
            return $employeelist;
        }
    }
?>