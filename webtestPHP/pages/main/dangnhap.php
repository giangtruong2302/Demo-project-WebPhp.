<?php
    if(isset($_POST['dangnhap'])){
        $taikhoan=$_POST['username'];
        $matkhau=md5($_POST['password']);
        $sql="SELECT * FROM tbl_dangky WHERE tenkhachhang='".$taikhoan."' AND matkhau='".$matkhau."' LIMIT 1";
        $row= mysqli_query($mysqli,$sql);
        $count=mysqli_num_rows($row);
        if($count > 0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky']=$row_data['tenkhachhang'];
            $_SESSION['id_khachhang']=$row_data['id_dangky'];
            header('Location: index.php?quanly=giohang');
        }else{
            echo'<script>alert ("tài khoản hoặc mật khẩu không đúng!!") </script>' ;
           // header('Location: dangnhap.php');
        }
    }
?>

<form action="" method="POST" autocomplete="on"> 
        <table class="table_login" style="margin:0 auto;width:50% ;border:1px solid black; text-align:center; border-collapse:collapse;">
            <tr style="padding: 10px;">
                <td style="padding: 10px;" colspan="2"><h3>Đăng Nhập Khách Hàng</h3></td>
            </tr>
            <tr style="padding: 10px;">
                <td style="padding: 10px;">Username</td>
                <td style="padding: 10px;"><input type="text" name="username"></td>
            </tr>
            <tr style="padding: 10px;">
                <td style="padding: 10px;">Password</td>
                <td style="padding: 10px;"><input type="password" name="password"></td>
            </tr>
            <tr style="padding: 10px;">
                <td style="padding: 10px;" colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
            </tr>
        </table>
</form>