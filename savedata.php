<?php

$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['sclass'];
$sphone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("qury  failed");

$sql = "UPDATE student SET sname={}, saddress={},sclass={},sphone={} WHERE sid={}";



?>