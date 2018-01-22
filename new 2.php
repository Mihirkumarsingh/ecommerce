<?php 
$name=$_GET["name"];
$pass=$_GET["password"];
$sal=$_GET["salary"];

$qry="insert into table1 values('$name','$password',$sal)";
echo $qry;

?>
