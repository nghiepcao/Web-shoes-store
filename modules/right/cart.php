<?php
   // session_start();
   ob_start();
?>
<div class="loaisp">Giỏ Hàng</div>
<?php
    
    //session_close();
    //them san pham vao gio hang
    if(isset($_GET['add'])){
        $id = $_GET['add'];
        @$_SESSION['cart_'.$id]+=1;
        @header('location:index.php?xem=giohang');

    }
    //cong them san pham
    if(isset($_GET['them'])){
        
        $_SESSION['cart_'.$_GET['them']]+=1;
        @header('location:index.php?xem=giohang');
    }
    //tru san pham
    if(isset($_GET['tru'])){
        
        $_SESSION['cart_'.$_GET['tru']]-=1;
        @header('location:index.php?xem=giohang');
    }
    //xoa san pham
    if(isset($_GET['xoa'])){
        $_SESSION['cart_'.$_GET['xoa']]=0;
        @header('location:index.php?xem=giohang');
    }
?>

<form method="post" action="index/php?xem=giohang">
<?php $thanhtien = 0;?>
<div class="cart">    
    <table>
    <tr>
        <th>Tên Sản Phẩm</th>
        <th>Số lượng</th>
        <th>Giá Sản Phẩm</th>
        <th>Giá tiền</th>
    </tr>
    <?php
    
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
                    <td><?php echo $value.'<a href="index.php?xem=giohang&them='.$id.'">[+]</a><a href="index.php?xem=giohang&tru='.$id.'">[-]</a><a href="index.php?xem=giohang&xoa='.$id.'">[delete]</a>' ?></td>
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
<?php if($thanhtien  > 0){
    ?>
        <a href="index.php?xem=thanhtoan" >Thanh toán
        </a>
<?php 
    } 
?>    
</form>

