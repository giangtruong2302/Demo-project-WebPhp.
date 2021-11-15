<?php
    session_start();
    include('config/connect.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan=$_POST['username'];
        $matkhau=md5($_POST['password']);
        $sql="SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
        $row= mysqli_query($mysqli,$sql);
        $count=mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap']=$taikhoan;
            header('Location: index.php');
        }else{
            echo'<script>alert ("tài khoản hoặc mật khẩu không đúng!!") </script>' ;
            header('Location: login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <style>
        body{
            background-color: #f2f2f2;

        }
        .wrapper_login {
             width: 17%;
            margin: 0 auto;
            margin-top:50px;
            padding: 6px;
        }
        table.table_login {
            width: 100%;
        }
        table.table_login tr td {
            padding: 7px;
        }
    </style>
</head>
<body>
    
</body>
</html>
<div class="wrapper_login">
<!-- auto complete là k lưu những data đã điền trc -->
    <form action="" method="POST" autocomplete="off"> 
        <table class="table_login" style="border:1px solid black; text-align:center; border-collapse:collapse;">
            <tr>
                <td colspan="2"><h3>Đăng Nhập</h3></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>
</div>