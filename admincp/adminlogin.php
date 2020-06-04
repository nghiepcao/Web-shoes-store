<?php
    include('modules/config.php');
    session_start();
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * from admin where username='$username' and password='$password' limit 1";
        $query=mysqli_query($conn,$sql);
        $nums=mysqli_num_rows($query);
        if($nums>0){
            $_SESSION['login']=$username;
            header('location:index.php');
        }else{
            header('location:adminlogin.php');

        }
      
    }
?>
<form action="" method="post">
<center><table widtth= "200" border="1">
    <tr>
        <td colspan="2"><div align="center">Đăng nhập</div></td>
    </tr>
    <tr>
        <td>Tài khoản</td>
        <td><input type="text" name="username" size="50%"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="password" name="password" size="50%"></td>
    </tr>
    <tr>
        <td colspan="2">
        <div align="center">
            <input type="submit" name="login" id="button" value="login">
        </div>    
            
        </td>
    </tr>
</table></center></form>