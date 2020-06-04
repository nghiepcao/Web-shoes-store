<?php
    include('../config.php');
    $id = $_GET['id'];
    $tensp=$_POST['tensp'];
    $mota=$_POST['motasp'];
    $gia=$_POST['gia'];
    $loaisp=$_POST['loaisp'];
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    $thutu=$_POST['thutusp'];
    if(isset($_POST['them'])){
        //them
        $sql="INSERT into chitietsp (tensp,thutusp,mota,gia,id_loaisp,hinhanh) values ('$tensp','$thutu','$mota','$gia','$loaisp','$hinhanh')";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlychitietsp&ac=them');
    }elseif(isset($_POST['sua'])){
        //sua
        if($hinhanh!=''){
            $sql="UPDATE chitietsp set tensp='$tensp', thutusp='$thutu',mota='$mota',gia='$gia',id_loaisp='$loaisp',hinhanh='$hinhanh' where id_sp='$id'";
        }else{
            $sql="UPDATE chitietsp set tensp='$tensp', thutusp='$thutu',mota='$mota',gia='$gia',id_loaisp='$loaisp' where id_sp='$id'";

        }
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$id);
    }else{
        //xoa
        $sql = "DELETE from chitietsp where id_sp='$id'";
        mysqli_query($conn,$sql);
        header('location:../../index.php?quanly=quanlychitietsp&ac=them');
    }
?>