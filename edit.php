<!-- <!DOCTYPE html>
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

            <?php  
                $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
        
                $stu_id = $_GET['id'];

                $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
        
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
                
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>

                <form action="change.php" method="post">

                    <div class="sname">
                        <label for="name">Name</label>
                        <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>">
                        <input type="text" id="name" name="name" value="<?php echo $row['sname']; ?>" required>
                    </div>
                    <div class="saddress">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" value="<?php echo $row['saddress']; ?>" required>
                    </div>
                    <div class="sclass">
                        <label for="class">Class</label>
                        <!-- <select name="class">
                            <option value="" selected disabled>Select Class</option>
                            <option value="1">BCA</option>
                            <option value="2">BSC</option>
                            <option value="3">B.TECH</option>
                        </select> -->
                        <?php

                            $sql1 = "SELECT * FROM studentclass";

                            $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");

                            // $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful");

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
                        <input type="text" id="phone" name="phone" value="<?php echo $row['sphone']; ?>" required>
                    </div>
                    <button type="submit">UPDATE</button>
                </form>
            <?php } 
            }
            ?>


            </div>

        </div>

    </div>


</body>
</html> -->