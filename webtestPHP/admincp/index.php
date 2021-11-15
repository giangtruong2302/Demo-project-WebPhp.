<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CP</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmin.css">
</head>
<body>
    <h3 class="title_admin">wellcome Admin CP</h3>
    <div class="wrapper">
    <?php
        include("config/connect.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
    ?>
    </div>
</body>
</html>