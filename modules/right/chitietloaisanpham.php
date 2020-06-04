<?php
    $sql_chitiet="SELECT * from chitietsp where id_loaisp='$_GET[id]'";
    $query=mysqli_query($conn,$sql_chitiet);
?>
<?php
    $sql_loaisp="SELECT * from loaisp where id_loaisp='$_GET[id]'";
    $query_loaisp=mysqli_query($conn,$sql_loaisp);
    $dong_loaisp=mysqli_fetch_array($query_loaisp);
?>
<div class="loaisp"><p><?php echo $dong_loaisp['tenloaisp']?></p></div>

<div class="all">
    <ul>
    <?php
        while($dong_chitiet=mysqli_fetch_array($query)){

        
    ?>
        <li>
            <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['id_sp']?>">
            <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh']?>" alt="" width="200" height="200">
            <p><?php echo $dong_chitiet['tensp']?></p>
            <p>Giá: <?php echo $dong_chitiet['gia']?></p>
            </a>
        </li>
        <?php
        }
        ?>
    </ul>

</div>