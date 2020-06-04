<?php
    $sql_chitietsp="SELECT * from chitietsp where id_sp=$_GET[id]";
    $query_chitietsp=mysqli_query($conn,$sql_chitietsp);
    $dong_chitietsp=mysqli_fetch_array($query_chitietsp);

?>
<table width="auto" border="1" style="border-collapse:collapse">
    <tr>
        <td colspan="2"><div align="center">Chi tiết sản phẩm</div></td>
        
    </tr>
    <tr>
        <td rowspan="2"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh']?>" alt="" width="330" height="330"></td>
        <td><?php echo $dong_chitietsp['tensp']?></td>
    </tr>
    <tr>
        <td style="color: blue">Giá: <?php echo $dong_chitietsp['gia'] ?> VNĐ</td>
        
    </tr>
    <tr>
        
        <td colspan="2"><div align="center"><?php echo $dong_chitietsp['mota']?></div></td>
    </tr>
    <a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp']?>"><img src="pictures/buy-now-icon.png" alt="" width="100" height="100" style="float:right"/>
    </a>
</table>