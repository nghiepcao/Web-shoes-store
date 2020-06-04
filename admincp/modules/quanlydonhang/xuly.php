<?php
    include('../config.php');
    $id = $_GET['id'];
    $tenkh = $_POST['tenkh'];
    $emailkh = $_POST['emailkh'];
    $sdtkh = $_POST['sdtkh'];
    $diachikh = $_POST['diachikh'];
    $motadonhang = $_POST['motadonhang'];
    $cachthanhtoan = $_POST['cachthanhtoan'];
    
    if(isset($_POST['xacnhan'])){
        $sql = "INSERT into donhangdaxacnhan (tenkh,sdtkh,diachikh,emailkh,cachthanhtoan,motadonhang) values ('$tenkh','$sdtkh','$diachikh','$emailkh','$cachthanhtoan','$motadonhang')";
        mysqli_query($conn,$sql);
        echo $sql;
        $sql2 = "DELETE from donhang where id = '$id'";
        mysqli_query($conn,$sql2);
        header('location:../../index.php?quanly=donhang&ac=xacnhan'.$id);
    }
?>
