<div class="left">
    <?php
        
        if(isset($_GET['ac'])){
            $tam=$_GET['ac'];
        }else{
            $tam='';
        }
        
    ?>  
    </div>
<div class="right">
    <p style="text-align: center">Đơn hàng chưa xác nhận</p>
        <?php
            include('modules/quanlydonhang/lietke.php');
        ?>
    </div>