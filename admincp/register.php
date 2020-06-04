<?php
    include('modules/config.php');
    if (isset($_POST["dangky"])) {
        //lấy thông tin từ các form bằng phương thức POST
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $tenkh = $_POST["tenkh"];
        $sdt = $_POST["sdt"];
        $addre = $_POST["addre"];
        //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
        if ($email == "" || $password == "" || $tenkh == "" || $sdt == "" || $addre =="") {
             echo "bạn vui lòng nhập đầy đủ thông tin";
        }else{
                // Kiểm tra tài khoản đã tồn tại chưa
            $sql="SELECT * from taikhoan where email='$email'";
              $kt=mysqli_query($conn, $sql);

              if(mysqli_num_rows($kt)  > 0){
                  echo "Tài khoản đã tồn tại";
              }else{
                    $sql = "INSERT into taikhoan (email,pass,sdt,addre,tenkh) values ('$email','$password','$tenkh','$addre','$tenkh')";              
                    mysqli_query($conn,$sql);
                    echo "chúc mừng bạn đã đăng ký thành công '<a href='../index.php'>Trang chu</a>'";
              }
                                  
              
        }
}
    
?>
<form action="" method="POST">
    <table>
			<tr>
				<td colspan="2">Đăng ký</td>
			</tr>	
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td>Mật khẩu :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>Họ tên :</td>
				<td><input type="text" id="tenkh" name="tenkh"></td>
			</tr>
			<tr>
				<td>Số điện thoại :</td>
				<td><input type="text" id="sdt" name="sdt"></td>
			</tr>
            <tr>
				<td>Địa chỉ :</td>
				<td><input type="text" id="addre" name="addre"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="dangky" value="Đăng ký"></td>
			</tr>

		</table>
           
        
        

</form>