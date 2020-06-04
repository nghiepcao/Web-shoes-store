<?php
    if(isset($_POST['doimatkhau'])){
        $taikhoan=$_POST['tentaikhoan'];
        $matkhaucu=$_POST['matkhaucu'];
        $matkhaumoi=$_POST['matkhaumoi'];
        $sql_doimatkhau=mysqli_query($conn,"SELECT * from admin where username='$taikhoan' and password='$matkhaucu' limit 1");
        $get_rows = mysqli_num_rows($sql_doimatkhau);
        if($get_rows==0){
            echo 'Sai tài khoản hoặc mật khẩu';
        }else{
            $sql_capnhat = mysqli_query($conn,"UPDATE admin set password='$matkhaumoi'");
            echo 'đổi mật khẩu thành công';
        }
    }

    
?>
<div align = "center">
    <form action="" method="post">

        <table border="1" width="500" height="auto">
            <tr>
                <td colspan="2"></td>
    
            </tr>
            <tr>
                <td>Tên tài khoản: </td>
                <td><input type="text" name="tentaikhoan"></td>
            </tr>
            <tr>
                <td>Mật khẩu cũ: </td>
                <td><input type="password" name="matkhaucu"></td>
            </tr>
            <tr>
                <td>Mật khẩu mới: </td>
                <td><input type="password" name="matkhaumoi"></td>
            </tr>
            <tr>
                <td align = "center" colspan="2"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
            </tr>
        </table>

    </form>
</div>