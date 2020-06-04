
<?php
    if(isset($_POST['search'])){
        $search=$_POST['searchtext'];
        $sql_search="SELECT * from chitietsp where tensp LIKE '%$search%'";
        $query_search = mysqli_query($conn,$sql_search);
    }
?>
<div class="loaisp"><p>Sản phẩm tìm thấy</p></div>

<div class="all">
    <ul>
    <?php
    if($count = mysqli_num_rows($query_search)==0){
     ?>
        <p>Không tìm thấy sản phẩm</p>
     <?php   
        }else{
        while($dong_search=mysqli_fetch_array($query_search)){

        
    ?>
        <li>
            <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search['id_sp']?>">
            <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_search['hinhanh']?>" alt="" width="150" height="150">
            <p><?php echo $dong_search['tensp']?></p>
            <p>Giá: <?php echo $dong_search['gia']?></p>
            </a>
        </li>
        <?php
        }
    }
        ?>
    </ul>

</div>