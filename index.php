<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php require "header.php" ?>

    <?php
        $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
        
        $sql = "SELECT * FROM student JOIN studentclass  WHERE student.sclass = studentclass.cid";

        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        
        if(mysqli_num_rows($result) > 0){
    ?>

    <div class="container">
        
        <div class="hero">
            <h2 class="menu_title">All Records</h2>
            <table>

                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>address</th>
                    <th>class</th>
                    <th>phone</th>
                    <th>action</th>
                </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $row['sid']; ?></td>
                    <td><?php echo $row['sname']; ?></td>
                    <td><?php echo $row['saddress']; ?></td>
                    <td><?php echo $row['cname']; ?></td>
                    <td><?php echo $row['sphone']; ?></td>
                    <td><button><a href="http://localhost/crud/php_program/edit.php?id=<?php echo $row['sid']; ?>" style="text-decoration: none; color:white;">Edit</a></button><button class="del">Delete</button></td>
                </tr>

            <?php } ?>

            </table>

            <?php } else{
                echo "<h2>No records found</h2>";
            }
            mysqli_close($conn) 
            ?>
        </div>
 

    </div>


</body>
</html>