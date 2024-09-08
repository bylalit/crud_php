<?php
//     echo $sid = $_POST["sid"];
//     echo $sname = $_POST["name"];
//     echo $saddress = $_POST["address"];
//     echo $sclass = $_POST["class"];
//     echo $sphone = $_POST["phone"];


//    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");

//     $sql = "UPDATE student SET sname = '{$sname}', saddress = '{$saddress}', sclass = '{$sclass}', sphone = '{$sphone}' WHERE sid = {$sid}";

//    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

//     header("Location: http://localhost/crud/php_program/index.php");

    mysqli_close($conn);
?>