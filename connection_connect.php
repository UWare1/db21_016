
<?php
$severname = "localhost";
$username = "db21_016";
$password = "db21_016";
$dbname = "db21_016";

$conn = new mysqli($servername,$username,$password) ;

if($conn->connect_error)
{
  die("Connection failed:".$conn->connect_error);
}

if(!$conn->select_db($dbname))
{
  die("Connection failed:" .$conn->connect_error);
}

?>