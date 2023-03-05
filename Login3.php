<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (move_uploaded_file($_FILES["id"]["tmp_name"], "images/" . $_FILES["id"]["name"])) {
        echo "<h2>บันทึกข้อมูลแล้ว</h2>";
        echo "ชื่อ " . $_POST['fsname'] . " นามสกุล " . $_POST['lsname'];
        echo "<br>";
        echo "ที่อยู่ " . $_POST['address'];
        echo "<br>";
    }
    ?>
    <img src="<?php echo "images/" . $_FILES["id"]["name"];  ?>" alt="" width="300">
</body>

</html>