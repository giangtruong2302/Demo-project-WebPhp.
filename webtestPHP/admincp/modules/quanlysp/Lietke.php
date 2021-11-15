<?php
    $sql_lietke_sp="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id ORDER BY id_sanpham DESC";
    $query_lietke_sp= mysqli_query($mysqli,$sql_lietke_sp);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table style="width:100%">
    <tr>
        <td style="font-weight:bold;">ID</td>
        <td style="font-weight:bold;">Tên Sản Phẩm</td>
        <td style="font-weight:bold;">Hình ảnh</td>
        <td style="font-weight:bold;">Giá</td>
        <td style="font-weight:bold;">Số lượng</td>
        <td style="font-weight:bold;">Danh mục</td>
        <td style="font-weight:bold;">Mã sản phấm</td>
        <td style="font-weight:bold;">Tóm tắt</td>
        <td style="font-weight:bold;">Trạng thái</td>
        <td style="font-weight:bold;">Quản lý</td>
    </tr>
    <?php
        $i=0;
        while($row = mysqli_fetch_array($query_lietke_sp))
        {
            $i++;
    ?>
    <tr>
        <td>
            <?php 
               echo $i; 
            ?>
        </td>
        <td>
            
            <?php  
               echo $row['tensanpham']; 
            ?>
        </td>
        <td>
            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>" width="180px">
            
        </td>
        <td>
            <?php 
               echo $row['giasp']; 
            ?>
        </td>
        <td>
            <?php 
               echo $row['soluong']; 
            ?>
        </td>
        <td>
            <?php 
               echo $row['tendanhmuc']; 
            ?>
        </td>
        <td>
            <?php 
               echo $row['masp']; 
            ?>
        </td>
        <td>
            <?php 
               echo $row['tomtat']; 
            ?>
        </td>
        <td>
            <?php 
                if($row['tinhtrang']==1){
                    echo 'kích hoạt';
                }
                else{
                    echo 'ẩn';
                }; 
            ?>
        </td>
        <td>
            <button><a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a></button> 
            | <button><a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a></button>
        </td>
    </tr>
    <?php
        }
    ?>
</table>