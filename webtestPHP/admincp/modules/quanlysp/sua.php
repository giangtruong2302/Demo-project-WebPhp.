<?php 
    $sql_sua_sp="SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sp= mysqli_query($mysqli,$sql_sua_sp);
?>
<h2>sửa thông tin sản phẩm</h2>
<table style="width:30%"> 
<?php
    while($row = mysqli_fetch_array($query_sua_sp))
    {
?>
    <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
        <tr>
            <th>Điền thông tin sản phẩm</th>
        </tr>
        <tr>
            <td>Tên sản phấm</td>
            <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Mã sản phấm</td>
            <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
        </tr>
        <tr>
            <td>Giá sản phấm</td>
            <td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
        </tr>
        <tr>
            <td>Số lượng sản phấm</td>
            <td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"></td>
        </tr>
        <tr>
            <td>Hình ảnh sản phấm</td>
            <td>
                <input type="file" name="hinhanh">
                <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']; ?>" width="180px">
            </td>
        </tr>
        <tr>
            <td>tóm tắt</td>
            <td><textarea rows="8"  name="tomtat"  style="resize:none;"><?php echo $row['tomtat'] ?></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="8" name="noidung" style="resize:none;"><?php echo $row['noidung'] ?></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
                        $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id DESC";
                        $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                            if($row_danhmuc['id']==$row['id_danhmuc']){
                    ?>
                    <option selected value="<?php echo $row_danhmuc['id'] ?>">
                        <?php
                        echo $row_danhmuc['tendanhmuc']
                        ?> 
                    </option>
                    <?php
                            }else{
                    ?>
                    <option value="<?php echo $row_danhmuc['id'] ?>">
                        <?php
                        echo $row_danhmuc['tendanhmuc']
                        ?> 
                    </option>
                    <?php
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <?php 
                        if($row['tinhtrang']==1){
                    ?>
                    <option value="1" selected>  
                        Kích hoạt 
                    </option>
                    <option value="0">
                        Ấn 
                    </option>
                    <?php
                        }else{

                        
                    ?>
                    <option value="1" >  
                        Kích hoạt 
                    </option>
                    <option value="0" selected>
                        Ấn 
                    </option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="suasanpham" value="sửa sản phẩm"></td>
        </tr>
    </form>
    <?php
    }
    ?>
</table>