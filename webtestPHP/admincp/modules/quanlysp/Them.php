<h2>thêm sản phẩm</h2>
<table style="width:30%"> 
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <th>Điền thông tin sản phẩm</th>
        </tr>
        <tr>
            <td>Tên sản phấm</td>
            <td><input type="text" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Mã sản phấm</td>
            <td><input type="text" name="masp"></td>
        </tr>
        <tr>
            <td>Giá sản phấm</td>
            <td><input type="text" name="giasp"></td>
        </tr>
        <tr>
            <td>Số lượng sản phấm</td>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Hình ảnh sản phấm</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>tóm tắt</td>
            <td><textarea rows="8"  name="tomtat"  style="resize:none;"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea rows="8" name="noidung" style="resize:none;"></textarea></td>
        </tr>
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
                        $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id DESC";
                        $query_danhmuc=mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id'] ?>">
                        <?php
                        echo $row_danhmuc['tendanhmuc'];
                        ?> 
                    </option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">
                        Kích hoạt 
                    </option>
                    <option value="0">
                        Ấn 
                    </option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="themsanpham" value="thêm sản phẩm"></td>
        </tr>
    </form>
</table>