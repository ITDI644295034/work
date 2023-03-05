<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
    </style>
    <?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($_POST['accept'])) {
    ?>
        <form action="Login3.php" method="post" enctype="multipart/form-data">

                <h2>ข้อมูลส่วนตัว</h2>
            ชื่อ : <br><input type="text" name="fsname"><br><br>
            นามสกุล : <br><input type="text" name="lsname"><br><br>
            ที่อยู่ : <br><textarea name="address"></textarea><br><br>
            รูปบัตรประชาชน : <input type="file" name="id"><br><br>
            <button type="submit">อัพโหลด</button>
        </form>

    <?php
    } else {
        echo "<h2>กรุณายืนยันการเปิดเผยข้อมูล</h2>";
        echo "<br>";
        ?>
        <a href="Login.php">กลับไปหน้าแรก</a>
        <?php
    }
    ?>

</body>

</html>