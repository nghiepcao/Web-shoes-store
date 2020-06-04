<?php
    $sql_loaisp="SELECT * from loaisp";
    $query=mysqli_query($conn,$sql_loaisp);
?>
            
                <div class="danhsachsanpham">
                <p>Loại Sản Phẩm</p>

                    <ul>
                    <?php
                        while($dong_loaisp=mysqli_fetch_array($query)){

                    ?>
                        <li>
                            <a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp']?></a>
                        </li>
                    <?php
                        }
                    ?>
                    </ul>
                </div>
        
                <div class="danhsachsanpham">
                <p>Loại Sản Phẩm</p>

                    <ul>
                        <li>
                            <a href="#">Mới</a>
                        </li>
                        <li>
                            <a href="#">Mua nhiều</a>
                        </li>
                        <li>
                            <a href="#">Bán chạy</a>
                        </li>
                    </ul>
                </div>
    