<?php
    $sql = "SELECT * from donhangdaxacnhan order by id desc";
    $run = mysqli_query($conn,$sql);

?>
<table width="100%" border 1>
<tr>
    <td>ID đơn hàng</td>
    <td>Email Khách Hàng</td>
    <td>Tên Khách Hàng</td>
    <td>Số điện thoại</td>
    <td>Địa chỉ</td>
    <td style="text-align: center">Mô tả đơn hàng</td>
    <td>Cách thanh toán</td>
    <td colspan="2">Trạng thái</td>
</tr>
<?php
    $i = 0;
    while($dong = mysqli_fetch_array($run)){
?>
<form action="" method="POST">
<tr>    
    <td><?php echo $i;?></td>
    <td><?php echo $dong['emailkh']?></td>
    <td><?php echo $dong['tenkh'];?></td>
    <td><?php echo $dong['sdtkh'];?></td>
    <td><?php echo $dong['diachikh'];?></td>
    <td><?php echo $dong['motadonhang'] ?></td>
    <td><?php echo $dong['cachthanhtoan'];?></td>
    <td>Đã Xác Nhận</td>
    
</tr> 
</form>

<?php
    $i++;
    }
?>
</table>