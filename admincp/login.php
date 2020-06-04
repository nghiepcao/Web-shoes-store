<?php
    include('modules/config.php');
    session_start();
    if(isset($_POST['dangnhap'])){
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $sql="SELECT * from taikhoan where email='$email' and pass='$password' limit 1";
        $query=mysqli_query($conn,$sql);
        $nums=mysqli_num_rows($query);
        if($nums>0){
            $_SESSION['dangnhap']=$email;
            echo "Bạn đã đăng nhập thành công !!";
        
            header('location:../index.php');
        }else{
            header('location:login.php');

        }
      
    }
?>
<form action="" method="post">
<center><table widtth= "200" border="1">
    <tr>
        <td colspan="2"><div align="center">Đăng nhập</div></td>
    </tr>
    <tr>
        <td>Email: </td>
        <td><input type="text" name="email" size="50%"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="password" name="pass" size="50%"></td>
    </tr>
    <tr>
        <td colspan="2">
        <div align="center">
            <input type="submit" name="dangnhap" id="button" value="login">
        </div>    
            
        </td>
    </tr>
</table></center></form>