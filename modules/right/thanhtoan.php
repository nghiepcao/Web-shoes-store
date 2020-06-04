<?php
if(isset($_SESSION['dangnhap'])) {
       // Thanh toan 

    
    //session_close();
    //them san pham vao gio hang
    if(isset($_GET['add'])){
        $id = $_GET['add'];
        @$_SESSION['cart_'.$id]+=1;
        header('location:index.php?xem=thanhtoan');

    }
    //cong them san pham
    if(isset($_GET['them'])){
        
        $_SESSION['cart_'.$_GET['them']]+=1;
        header('location:index.php?xem=thanhtoan');
    }
    //tru san pham
    if(isset($_GET['tru'])){
        
        $_SESSION['cart_'.$_GET['tru']]-=1;
        header('location:index.php?xem=thanhtoan');
    }
    //xoa san pham
    if(isset($_GET['xoa'])){
        
        $_SESSION['cart_'.$_GET['xoa']]=0;
        header('location:index.php?xem=thanhtoan');
    }


?>

<form action="" method="POST">
<div class="cart">    
    <table>
    <tr>
        <th>Tên Sản Phẩm</th>
        <th>Số lượng</th>
        <th>Giá Sản Phẩm</th>
        <th>Giá tiền</th>
    </tr>
    <?php
    $thanhtien = 0;
    foreach($_SESSION as $name => $value){
        if($value > 0){
            if((int)substr($name,0,5)=='cart_'){    
                $id=(int)substr($name,5,strlen($name)-5);
                $sql="SELECT * from chitietsp where id_sp='".$id."'";
                $query=mysqli_query($conn,$sql);
                
                while($dong = mysqli_fetch_array($query)){
                    $tongtien = $dong['gia'] * $value;
                    @$thanhtien = $thanhtien+$tongtien;   
                ?>
                <tr>
                    <td><?php echo $dong['tensp']?></td>
                    <td><?php echo $value/*.'<a href="index.php?xem=thanhtoan&them='.$id.'">[+]</a><a href="index.php?xem=thanhtoan&tru='.$id.'">[-]</a><a href="index.php?xem=thanhtoan&xoa='.$id.'">[delete]</a>' */?></td>
                    <td><?php echo $dong['gia']?></td>
                    <td><?php echo $tongtien?></td>
                </tr>
                <?php
                        }               
                    }                               
                }             
            }
            ?>
            <tr> 
                <td colspan="4">Total Price: <?php echo @$thanhtien ?></td> 
            </tr>
            <?php
    ?>
    </table>
</div>
    <table border="2">
        <tr rowspan="2">Thông tin Nhận hàng</tr>
        
        <tr>
            <td style = "text-color: white">Email</td>
            <td colspan = "2"><input type="text" name="emailkh"></td>
        </tr>
        <tr>
            <td style = "text-color: white">Họ tên</td>
            <td colspan = "2"><input type="text" name="tenkh"></td>
        </tr>
        <tr>
            <td>Số Điện Thoại</td>
            <td colspan = "2"><input type="text" name="sdtkh"></td>
        </tr>
        <tr>
            <td>Địa chỉ nhận</td>
            <td colspan = "2"><input type="text" name="diachikh"></td>
        <tr>
            <td>Mô tả Đơn hàng</td>
            <td><textarea name="motadonhang" id="" cols="auto" rows="40" readonly="reaadonly">
            <?php
                $thanhtien = 0;
                foreach($_SESSION as $name => $value){
                    if($value > 0){
                        if((int)substr($name,0,5)=='cart_'){    
                            $id=(int)substr($name,5,strlen($name)-5);
                            $sql="SELECT * from chitietsp where id_sp='".$id."'";
                            $query=mysqli_query($conn,$sql);
                            
                            while($dong = mysqli_fetch_array($query)){
                                $tongtien = $dong['gia'] * $value;
                                @$thanhtien = $thanhtien+$tongtien;
                                
                            ?>
                                <?php echo "Tên sản phẩm: ".$dong['tensp']?>
                                <?php echo "Số lượng: ".$value/*.'<a href="index.php?xem=thanhtoan&them='.$id.'">[+]</a><a href="index.php?xem=thanhtoan&tru='.$id.'">[-]</a><a href="index.php?xem=thanhtoan&xoa='.$id.'">[delete]</a>' */?>
                                <?php echo "Đơn giá: ".$dong['gia']?>
                                <?php echo "Tổng tiền: ".$tongtien?>
                            <?php
                                    }            
                                }                               
                            }             
                        }
                        echo "Thành tiền = ".$thanhtien;
            ?>
                </textarea>
            </td>
        </tr>
        </tr>
        <tr>
            <td colspan="2">Phương thức thanh toán<br>
               <div class="btn-group btn-group-toggle" data-toggle="buttons">
                   <label class="btn btn-primary">
                       <input name="ship"  value="shipcode" type="radio" > Thanh toán khi nhận hàng
                   </label>
                   <div class="btn-group btn-group-toggle" data-toggle="buttons">
                       <label class="btn btn-primary">
                           <input name="ship" value="bank" type="radio"> Chuyển khoản qua ngân hàng
                       </label>
                   </div>
               </div>
            </td>
        </tr>        
        <tr>
            <td colspan="2" align="center"><input type="submit" name="xacnhan" value="Xác nhận"></td>
        </tr>
    </table>
</form>
<?php
    if (isset($_POST["xacnhan"])) {
        //lấy thông tin từ các form bằng phương thức POST
        $motadonhang = $_POST['motadonhang'];
        $emailkh = $_POST["emailkh"];
        $tenkh = $_POST["tenkh"];
        $sdt = $_POST["sdtkh"];
        $addre = $_POST["diachikh"];
        $cachthanhtoan = $_POST["ship"];
        //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
        if ($emailkh==""||$tenkh == "" || $sdt == "" || $addre =="" || $cachthanhtoan == "") {
             echo "bạn vui lòng nhập đầy đủ thông tin";
        }else{      
                $sql = "INSERT into donhang (emailkh,tenkh,sdtkh,diachikh,cachthanhtoan,motadonhang) values ('$emailkh','$tenkh','$sdt','$addre','$cachthanhtoan','$motadonhang')";              
                mysqli_query($conn,$sql);
                ?>
                <script type="text/javascript">
		            alert('Đã đặt hàng thành công');
	            </script>
        <?php
        
        }
}
    
?>
<?php   
}else {
    echo "Bạn chưa đăng nhâp";
?>
    
    <br><a style="background-color: none; color:white" href="admincp/login.php">Đăng nhập ngay</a>
    <script type="text/javascript">
        
        alert("Bạn chưa đăng nhập");
    
    </script>
<?php
}
?>
