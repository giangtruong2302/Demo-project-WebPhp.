<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web test PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../WebDoAnPHP/bstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" src="../WebDoAnPHP/bstrap/js/bootstrap.js">
</head>
<body>
    <div class="wrapper">
        <?php
            session_start();
            include("admincp/config/connect.php");
            include ("pages/header.php");
            include ("pages/menu.php");
            include ("pages/main.php");
            include ("pages/footer.php");
        ?>
        
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        // menu mobile
        var btn_menu = document.getElementById("btnmenu");
        btn_menu.addEventListener("click", function () {
        var item_menu = document.getElementById("menutop");
        if (item_menu.style.display === "block") {
            item_menu.style.display = "none";
        } else {
            item_menu.style.display = "block";
        }
        })
    </script>
</body>
</html>