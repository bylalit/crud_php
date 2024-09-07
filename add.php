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
            <h2 class="menu_title">Add New Record</h2>

            <div class="box">
                <form action="" method="post">
                    <div class="sname">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="saddress">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="sclass">
                        <label for="class">Class</label>
                        <select name="class">
                            <option value="" selected disabled>Select Class</option>
                            <option value="1">BCA</option>
                            <option value="2">BSC</option>
                            <option value="3">B.TECH</option>
                        </select>
                    </div>
                    <div class="phone">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                    <button type="submit">SAVE</button>
                </form>
            </div>
        </div>

    </div>


</body>
</html>