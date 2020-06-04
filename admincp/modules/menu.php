<?php
    if(isset($_GET['ac']) && $_GET['ac']=='dangxuat'){
        unset($_SESSION['login']);
        header('location:adminlogin.php');

    }
?>
<div class="menu">

            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?quanly=quanlyloaisp&ac=them">Quản lý loại sản phẩm</a></li>
                <li><a href="index.php?quanly=quanlychitietsp&ac=them">Quản lý chi tiết sản phẩm</a></li>
                <li><a href="index.php?quanly=doimatkhau">Đổi mật khẩu</a></li>
                <li><a href="index.php?quanly=donhangdaxacnhan">Đơn hàng đã xác nhận </a></li>
                <li><a href="index.php?quanly=donhang">Đơn Hàng</a></li>
                <li><a href="index.php?ac=dangxuat">Đăng xuất</a></li>

            </ul>
        </div>