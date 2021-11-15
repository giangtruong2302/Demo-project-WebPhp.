<div class="clear"></div>
<div class="main">

    <?php
    
        if(isset($_GET['action']) && $_GET['query']){
            $tam=$_GET['action'];
            $query=$_GET['query'];
        }
        else{
            $tam='';
            $query='';
        }
        if($tam=='quanlydanhmucsanpham' && $query=='them'){
            include("modules/quanlydanhmucsp/Them.php");
            include("modules/quanlydanhmucsp/Lietke.php");
        }
        elseif($tam=='quanlydanhmucsanpham' && $query=='sua'){
            include("modules/quanlydanhmucsp/sua.php");
        }elseif($tam=='quanlysp' && $query=='them'){
            include("modules/quanlysp/Them.php");
            include("modules/quanlysp/Lietke.php");
        }elseif($tam=='quanlysp' && $query=='sua'){
            include("modules/quanlysp/sua.php");
        }
        else{
            include("modules/dashboard.php");
        }
    ?>
</div>