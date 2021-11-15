<?php
    
    if(isset($_POST['dangky'])){
        $tenkhachhang=$_POST['hovaten'];
        $email=$_POST['email'];
        $dienthoai=$_POST['dienthoai'];
        $diachi=$_POST['diachi'];
        $matkhau=md5($_POST['matkhau']);
        $sql_dangky=mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) 
        VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."') ");
        if($sql_dangky){
            echo '<p style="color: green; font-weight:bold;">bạn đã đăng ký thành công</p>';
            $_SESSION['dangky']=$tenkhachhang;
            $_SESSION['id_khachhang']=mysqli_insert_id($mysqli);
            
            header('Location: index.php?quanly=giohang');
        }
    }
?>
<h2>Đăng ký thành viên</h2>
<style>
    table.dangky tr td {
    padding: 6px;
    width: 50%;
}
</style>
<form action="" method="POST">
    <table class="dangky">
        <tr>
            <td>Họ và tên:</td>
            <td><input type="text" name="hovaten"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="mail" name="email"></td>
        </tr>
        <tr>
            <td>Điện thoại:</td>
            <td><input type="text" name="dienthoai"></td>
        </tr>
        <tr>
            <td>Địa chỉ:</td>
            <td><input type="text" name="diachi"></td>
        </tr>
        <tr>
            <td>Mật khẩu:</td>
            <td><input type="text" name="matkhau"></td>
        </tr>
        <tr>
            <td><a href="index.php?quanly=dangnhap">Đã có tài khoản</a></td>
            <td><input type="submit" name="dangky" value="đăng ký"></td>
        </tr>
    </table>
</form>