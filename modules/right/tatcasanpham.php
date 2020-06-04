<?php
    $page = 0;
    if(@!$_GET['trang']){
        $page = 0;
    }else{
        $page = ($_GET['trang'] *10)-10;
    }
    $sql_tatca="SELECT * from chitietsp limit $page,10";
    $query_tatca=mysqli_query($conn,$sql_tatca);
    
?>
                
<div class="all">
    <h1>TẤT CẢ SẢN PHẨM</h1>
         <ul>
            <?php
                while($dong_tatca=mysqli_fetch_array($query_tatca)){                  
            ?>
            <li>
            <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_tatca['id_sp']?>">
            <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_tatca['hinhanh']?>" alt="" width="200" height="200">
            <p><?php echo $dong_tatca['tensp']?></p>
            <p>Giá: <?php echo $dong_tatca['gia']?></p>
            </a>
            <?php
                }
            ?>
        </ul>
        
</div>
<div class="clear"></div>   
<div><p style="color: white">Trang: </p>
<?php
    $sql_trang=mysqli_query($conn,'SELECT * from chitietsp');
    $total_records = mysqli_num_rows($sql_trang);
    $a = ceil($total_records/10);
    for($i = 1; $i<=$a;++$i){
        echo '<a href="?trang='.$i.'">'.' '.$i.' '.'</a>';
    }
?>
</div>

            