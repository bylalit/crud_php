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

    <div class="container">

        <div class="hero">
            <h2 class="menu_title">Edit Record</h2>

            <div class="box">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="sid">
                        <label for="sid">Id</label>
                        <input type="text" id="sid" name="sid">
                    </div>

                    <button type="submit" id="btn" name="btnshow">SHOW</button>
                </form>

            <?php 
                if(isset($_POST['btnshow'])){
                    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
        
                    $sid = $_POST['sid'];


                    // if(isset($_POST['sid']) && !empty($_POST['sid'])){
                    //     $sid = mysqli_real_escape_string($conn, $_POST['sid']);
                    // } else {
                    //     echo "ID field is empty!";
                    //     exit();
                    // }

                    $sql = "SELECT * FROM student WHERE sid = {$sid}";
            
                    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>


                <form action="change.php" method="post">
                    <div class="sname">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="<?php echo $row['sname']; ?>" >
                    </div>
                    <div class="saddress">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" value="<?php echo $row['saddress']; ?>" >
                    </div>
                    <div class="sclass">
                        <label for="class">Class</label>
                        <?php

                            $sql1 = "SELECT * FROM studentclass";

                            $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");

                            if(mysqli_num_rows($result1) > 0){
                                echo '<select name = "class">';
                                while($row1 = mysqli_fetch_assoc($result1)){
                                    if($row['sclass'] == $row1['cid']){
                                        $select = "selected";
                                    }else{
                                        $select = "";
                                    }
                                    echo "<option {$select}   value= '{$row1['cid']}'>{$row1['cname']}</option>";
                                }
                                echo '</select>';
                            }
                        ?>
                    </div>
                    <div class="phone">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $row['sphone']; ?>" >
                    </div>
                    <button type="submit">UPDATE</button>
                </form>
                <?php 
                        }
                    }
                }
                ?>
            </div>

        </div>

    </div>


</body>

</html>