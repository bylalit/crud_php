<?php

echo $sname = $_POST['sname'];
echo $saddress = $_POST['saddress'];
echo $sclass = $_POST['class'];
echo $sphone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("qury  failed");

$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$sname}','{$saddress}','{$sclass}','{$sphone}')";

$result =  mysqli_query($conn,$sql) or die("Query failed!");

header("location: http://localhost/crud/php_program/index.php");

mysqli_close($conn);
?>