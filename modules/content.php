<?php
        if(isset($_SESSION['dangnhap']) && $_SESSION['dangnhap']){
                echo $_SESSION['dangnhap'];
        ?>
        <form action="" method="post">
                <button type="submit" name="dangxuat">Đăng xuất</button>
        </form>
        <?php 
                if(isset($_POST['dangxuat'])){
                        unset($_SESSION['dangnhap']);
                        
                }
        ?>
        
<?php
        }
?>
<div class="content">
        <div class="left">
                <?php 
                        include('modules/left/danhsach.php');
                ?> 
        </div>
        <div class="right">
                <?php
                        if(isset($_GET['xem'])){
                                $tam = $_GET['xem'];
                        }else{
                                $tam ='';
                        }if($tam == 'chitietloaisanpham'){
                                include('modules/right/chitietloaisanpham.php');
                        }elseif($tam == 'chitietsanpham'){
                                include('modules/right/chitietsanpham.php');
                        }elseif($tam == 'giohang'){
                                include('modules/right/cart.php');
                        }elseif($tam == 'thanhtoan'){
                                include('modules/right/thanhtoan.php');
                        }elseif($tam == 'dangnhap'){
                                 include('admincp/login.php');
                        // }elseif($tam == 'dangky'){
                        //         include('admincp/register.php');
                        }elseif(isset($_POST['search'])){
                                include('modules/right/search.php');
                        }elseif($tam == 'muahang'){
                                 include('modules/right/muahang.php');        
                        }elseif($tam == 'xacnhanthanhtoan'){
                                include('modules/right/xacnhanthanhtoan.php');        
                                       
                                             
                        }else
                                include('modules/right/tatcasanpham.php');
                ?>
        </div>      
</div>
<div class="clear"></div>
        