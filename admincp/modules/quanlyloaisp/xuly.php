<?php
    include('../config.php');
    $id = $_GET['id'];
    $tenloaisp=$_POST['tenloaisp'];
    $thutu=$_POST['thutu'];
    if(isset($_POST['them'])){
        //them
        $sql="INSERT into loaisp (tenloaisp,thutu) values ('$tenloaisp','$thutu')";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlyloaisp&ac=them');
    }elseif(isset($_POST['sua'])){
        //sua
        $sql="UPDATE loaisp set tenloaisp='$tenloaisp', thutu='$thutu' where id_loaisp='$id'";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
    }else{
        //xoa
        $sql = "DELETE from loaisp where id_loaisp='$id'";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlyloaisp&ac=them');
    }
?>