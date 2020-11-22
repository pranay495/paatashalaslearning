<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "admin";
$mysql_database = "plearning";
$prefix = "";
// $bd =mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect database");
// mysql_select_db($mysql_database, $bd) or die("Could not select database");
$connection = @mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect database");

// if($connection == 0){
//   echo"Error";
//
// }else{
//   echo"connected";
// }
//
$db = mysql_select_db($mysql_database, $connection) or die("Could not select database");
//
// $username = "admin";
// $password = "root";
//
// $q1 ="insert into admin_cred (username,passw) values ('$username','$password')";
// $r1 = mysql_query($q1);
//
// if($r1 == 1){
//   echo"inserted";
// }else{
//   echo"not inserted";
// }
// ?>
