<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangnhap']);
        header("Location: login.php");
    }
?>
<?php if(isset($_SESSION['dangnhap'])){
         echo 'wellcome '. $_SESSION['dangnhap'] . ' ';  }?>
<button style="border:1 solid black; border-radius: 6px; background-color: red;"><a href="index.php?dangxuat=1" style="color: white; text-decoration: none;">Đăng xuất
     </a></button>