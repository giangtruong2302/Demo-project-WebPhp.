<?php
    include("../../config/connect.php");
    $tenloaisp=$_POST['tendanhmuc'];
    $thutu=$_POST['thutudanhmuc'];
    if(isset($_POST['themdanhmuc'])){
        $sqlthem= "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tenloaisp."','.$thutu.')";
        mysqli_query($mysqli,$sqlthem);
        header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
    }
    elseif(isset($_POST['suadanhmuc'])){
        $sql_update= "UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id='$_GET[iddanhmuc]'";
        mysqli_query($mysqli,$sql_update);
        header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
    }else{
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_danhmuc where id='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
    }
?>