<div class="content">
        
            <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else{
                    $tam='';
                }if($tam=='quanlyloaisp'){
                    include('modules/quanlyloaisp/main.php');
                }if($tam=='quanlychitietsp'){
                    include('modules/quanlychitietsp/main.php');
                }if($tam=='doimatkhau'){
                    include('doimatkhauadmin.php');
                }if($tam=='donhangdaxacnhan'){
                    include('modules/quanlydonhang/donhangdaxacnhan.php');
                }if($tam=='donhang'){
                    include('modules/quanlydonhang/main.php');
                }
            ?>
        </div>
        <div class="clear"></div>