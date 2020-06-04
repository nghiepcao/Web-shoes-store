
<input type="checkbox" id="check">
    <label for="check">
        
            <i class="fas fa-bars"  id="btn"></i>
            <i class="fas fa-times"  id="cancel"></i> 
    </label>
    
        <div class="sidebar">
            <header>Menu</header>
            <ul>
            <li><a href="index.php"><i class="fas fa-qrcode"></i>Trang chủ</a></li>
                <li><a href="index.php?xem=chitietloaisanpham&id=1"><i class="fas fa-link"></i>Sản phẩm</a></li>
                <li><a href="admincp/login.php"><i class="fas fa-stream"></i>Login</a></li>
                <li><a href="admincp/register.php"><i class="fas fa-calendar-week"></i>Register</a></li>
                <li><a href="admincp/adminlogin.php"><i class="fas fa-sliders-h"></i>Quản lý</a></li>
                <li><a href="index.php?xem=giohang"><i class="fas fa-sliders-h"></i>Giỏ Hàng</a></li>
                
                

                <form action="index.php" method="post">
                <div class="searchform">
                    <input style="color: white" type="text" id="searchf" name="searchtext" size="30"/>
                        <input style="color: white" type="submit" id="searchbtn" name="search" value="search" placeholder="Search..">
                </div>
                </form>
            </ul>
        </div>

