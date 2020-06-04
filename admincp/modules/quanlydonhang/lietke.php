<?php
    $sql = "SELECT * from donhang order by id desc";
    $run = mysqli_query($conn,$sql);

?>
<table width="100%" border 1>
<tr>
    <td>ID đơn hàng</td>
    <td>Email Khách Hàng</td>
    <td>Tên Khách Hàng</td>
    <td>Số điện thoại</td>
    <td>Địa chỉ</td>
    <td>Cách thanh toán</td>
    <td>Mô tả đơn hàng</td>
    <td colspan="2">Trạng thái</td>
</tr>
<?php
    $i = 0;
    while($dong = mysqli_fetch_array($run)){
?>
<form action="modules/quanlydonhang/xuly.php?id=<?php echo $dong['id']?>" method="POST">
<tr>    
    <td><?php echo $i;?></td>
    <td><input type="text" name="emailkh" value="<?php echo $dong['emailkh'];?>" readonly></td>
    <td><input type="text" name="tenkh" value="<?php echo $dong['tenkh'];?>" readonly></td>
    <td><input type="text" name="sdtkh" value="<?php echo $dong['sdtkh'];?>" readonly></td>
    <td><input type="text" name="diachikh" value="<?php echo $dong['diachikh'];?>" readonly></td>
    <td><input type="text" name="cachthanhtoan" value="<?php echo $dong['cachthanhtoan'];?>" readonly></td>
    <td><textarea name="motadonhang" id="" cols="30" rows="10" readonly="readonly"><?php echo $dong['motadonhang'] ?></textarea></td>
    <td><input type="submit" name="xacnhan" value="Xác nhận"></td>
</tr> 
</form>

<?php
    $i++;
    }
?>
</table>