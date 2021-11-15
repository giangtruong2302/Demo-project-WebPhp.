<?php
    $sql_lietke_danhmucsp="SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp= mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<p>Liệt kê danh mục sản phẩm</p>
<table style="width:30%">
    <tr>
        <td style="font-weight:bold;">ID</td>
        <td style="font-weight:bold;">Tên danh mục</td>
        <!-- <th>Thứ tự danh mục</th> -->
        <td style="font-weight:bold;">Quản lý</td>
    </tr>
    <?php
        $i=0;
        while($row = mysqli_fetch_array($query_lietke_danhmucsp))
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
               echo $row['tendanhmuc']; 
            ?>
        </td>
        <td>
            <button><a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id'] ?>">Xóa</a></button> 
            | <button><a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id'] ?>">Sửa</a></button>
        </td>
    </tr>
    <?php
        }
    ?>
</table>