<?php
                        if(isset($_GET['trang'])){
                            $page=$_GET['trang'];
                        }
                        else{
                            $page='';
                        }
                        if($page == '' || $page == 1){
                            $begin=0;

                        }
                        else{
                            $begin=($page*5)-5;
                        }
                        $sql_pro="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE  
                         tbl_sanpham.id_danhmuc=tbl_danhmuc.id ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,5";
                        $query_pro=mysqli_query($mysqli,$sql_pro);

?>
<h3>Sản phẩm mới nhất </h3>
                <ul class="product_list">
                    <?php
                        while($row=mysqli_fetch_array($query_pro)){
                    ?>
                    <li>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" >
                            <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                            <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham'] ?></p>
                            <p class="price_product">Giá:<?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
                            <p style="text-align:center; color:gray ; font-weight:bold ;"><?php echo $row['tendanhmuc'] ?></p>
                        </a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
                <div class="clear:both;"></div>
                <style type="text/css">
                    ul.list_trang{
                        padding:0;
                        margin:0;
                        list_style:none;
                    }
                    ul.list_trang li{
                        float:left;
                        padding:5px 13px;
                        margin:5px;
                        background: burlywood;
                        display:block;
                    }
                    ul.list_trang li a{
                        color:black;
                        text-align:center;
                        text-decoration:none;
                    }
                </style>
                <p>Trang hiện tại: <?php echo $page; ?></p>
                <?php 
                    $sql_trang=mysqli_query($mysqli,"select * from tbl_sanpham");
                    $row_count=mysqli_num_rows($sql_trang);
                    $trang= ceil( $row_count/5);
                ?>
                <ul class="list_trang">
                    <?php 
                        for($i=1;$i<=$trang;$i++){

                        
                    ?>
                    <li <?php if($i==$page){ echo 'style="background:cyan;'; }else{echo '';} ?>><a  
                    href="index.php?trang=<?php echo $i ?>"><?php echo $i; ?></a></li>
                    <?php 
                        }
                    ?>
                </ul>