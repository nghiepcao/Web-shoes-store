<?php
    $tenmaychu = 'localhost';
    $tentaikhoan = 'root';
    $pass ='';
    $csdl = 'webbanhang';
    $conn = mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl) or die('không kết nối đc');

    //mysqli_select_db($csdl,$conn);
?>  