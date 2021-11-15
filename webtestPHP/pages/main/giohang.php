<?php
    
?>
<h1>Giỏ hàng
    <?php
        if(isset($_SESSION['dangky'])){
            echo 'xin chào: '.'<span style="color:red">' . $_SESSION['dangky'].'</span>';
            // echo $_SESSION['id_khachhang'];
        }
    ?>
</h1>
<?php
    if(isset($_SESSION['cart'])){
        
    }
?>
<table style="width:70%; text-align:center;">
    <tr>
        <th>ID</th>
        <th>mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số Lượng</th>
        <th>Đơn giá </th>
        <th>Thành tiền</th>
        <th>Quản lý</th>
    </tr>
    <?php
        if(isset($_SESSION['cart'])){
            $i=0;
            $tongtien=0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien=$cart_item['soluong']*$cart_item['giasp'];
                $tongtien+=$thanhtien;
                $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cart_item['masp'] ?></td>
        <td><?php echo $cart_item['tensanpham'] ?></td>
        <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="160px"></td>
        <td>
            <button><a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>" style="text-decoration:none;">+</a></button>
            <?php echo $cart_item['soluong'] ?>
            <button><a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>" style="text-decoration:none;">-</a></button>
        </td>
        <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ' ?></td>
        <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
        <td><button><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></button></td>
        <td><button><a href="">Sửa</a></button></td>
    </tr>
    <?php
            }
    ?>
    
            <tr>
                <td colspan="8" style="text-align:left;"><p>Tổng tiền: <?php echo 
                '<span style="color:red;font-weight:bold;">' . number_format($tongtien,0,',','.' ).'<span style="color:black">' .'vnđ'?> </p></td>
                <td colspan="8" style="text-align:right;"><button style="border: 1px solid black; background-color:green; border-radius: 6px; height:32px">
                <a href="pages/main/themgiohang.php?xoatatca=1" style="color:white;text-decoration:none;">Delete All </a></button></td>
                
                <?php
                    if(isset($_SESSION['dangky'])){
                ?>
                <td colspan="8" style="text-align:left;">    <button style="border: 1px solid black; background-color:green; border-radius: 6px; height:32px">
                <a href="pages/main/thanhtoan.php" style="color:white;text-decoration:none;">Pay</a></button></td>
                <?php
                    }else{
                ?>
                <td><button style="border: 1px solid black; background-color:green; border-radius: 6px; height:22px"><a href="index.php?quanly=dangky" style="color:white;text-decoration:none;">Đăng nhập/ký đặt hàng</a></button> </td>
                <?php
                    }
                ?>
                
                
            </tr>
    <?php
        }else{
    ?>
    <tr>
        <td colspan="8"><p>giỏ hàng còn trống</p></td>
    </tr>
    <?php
        }
    ?>
</table>
