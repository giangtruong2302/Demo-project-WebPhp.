<?php 
    $sql_sua_danhmucsp="SELECT * FROM tbl_danhmuc WHERE id='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp= mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<h2>Sửa danh mục sản phẩm</h2>
<table style="width:30%"> 
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
    <?php
        while($dong = mysqli_fetch_array($query_sua_danhmucsp))
        {
    ?>
        <tr>
            <th>Điền thông tin danh mục sản phẩm</th>
        </tr>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự danh mục</td>
            <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutudanhmuc"></td>
        </tr>
        <tr>
            <td><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
        </tr>
    <?php
        }
    ?>

    </form>
</table>