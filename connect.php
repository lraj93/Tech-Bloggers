<?php
$mysql_host='localhost';    
$mysql_user='root';
$mysql_password='';
$mysql_db = 'techblogger';
$conn = new mysqli($mysql_host, $mysql_user,$mysql_password,$mysql_db);
if (!$conn){
   die("connection failed".mysqli_connect_error());
}

?>