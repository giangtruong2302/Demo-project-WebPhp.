<?php
    include("../../config/connect.php");


    $tensp=$_POST['tensanpham'];
    $masp=$_POST['masp'];
    $giasp=$_POST['giasp'];
    $soluongsp=$_POST['soluong'];
    //xu ly file anh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;
    //
    $tomtatsp=$_POST['tomtat'];
    $noidungsp=$_POST['noidung'];
    $tinhtrangsp=$_POST['tinhtrang'];
    $danhmucsp=$_POST['danhmuc'];

    


    if(isset($_POST['themsanpham'])){
        $sqlthem= "INSERT INTO tbl_sanpham(tensanpham , masp , giasp , soluong , hinhanh , tomtat , noidung , tinhtrang ,id_danhmuc) 
        VALUE('".$tensp."','".$masp."','".$giasp."','".$soluongsp."','".$hinhanh."','".$tomtatsp."','".$noidungsp."','".$tinhtrangsp."','".$danhmucsp."')";
        mysqli_query($mysqli,$sqlthem);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header("Location:../../index.php?action=quanlysp&query=them");
    }
    elseif(isset($_POST['suasanpham'])){
        if($hinhanh!=''){
            $sql="SELECT * FROM tbl_sanpham where id_sanpham='$_GET[idsanpham]' LIMIT 1";
            $query= mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($query))
            {
                unlink('uploads/'.$row['hinhanh']);
            }
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql_update= "UPDATE tbl_sanpham SET tensanpham='".$tensp."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluongsp."'
            ,hinhanh='".$hinhanh."',tomtat='".$tomtatsp."',noidung='".$noidungsp."',tinhtrang='".$tinhtrangsp."',id_danhmuc='".$danhmucsp."'
            WHERE id_sanpham='$_GET[idsanpham]'";
        }else{
            $sql_update= "UPDATE tbl_sanpham SET tensanpham='".$tensp."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluongsp."'
            ,tomtat='".$tomtatsp."',noidung='".$noidungsp."',tinhtrang='".$tinhtrangsp."',id_danhmuc='".$danhmucsp."'
            WHERE id_sanpham='$_GET[idsanpham]'";
        }
        mysqli_query($mysqli,$sql_update);
        header("Location:../../index.php?action=quanlysp&query=them");
    }else{
        $id = $_GET['idsanpham'];
        $sql="SELECT * FROM tbl_sanpham where id_sanpham='".$id."' LIMIT 1";
        $query= mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query))
        {
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM tbl_sanpham where id_sanpham='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header("Location:../../index.php?action=quanlysp&query=them");
    }
?>