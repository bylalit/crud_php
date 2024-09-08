<?php

   $sname = $_POST["name"];
   $saddress = $_POST["address"];
   $sclass = $_POST["class"];
   $sphone = $_POST["phone"];


   $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
        
   $sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$sname}','{$saddress}','{$sclass}','{$sphone}')";

   $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/crud/php_program/index.php");

    mysqli_close($conn);
?>