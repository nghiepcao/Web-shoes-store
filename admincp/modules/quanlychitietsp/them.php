<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
    <tr>
        <td colspan="2"><div align="center">Thêm chi tiết sp</div></td>
    </tr>
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="tensp"></td>
    </tr>
    <tr>
        <td>Giá sản phẩm</td>
        <td><input type="text" name="gia"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
        <td>Mô tả sản phẩm</td>
        <td><textarea name="motasp" id="" cols="30" rows="10"></textarea></td>
    </tr>
    <?php
        $sql="SELECT * from loaisp";
        $run=mysqli_query($conn,$sql);
    ?>
    <tr>
        <td>Loại sản phẩm</td>
        <td><select name="loaisp" id="">
            <?php while($dong=mysqli_fetch_array($run)){
            ?>
            <option value="<?php echo $dong['id_loaisp']?>"><?php echo $dong['tenloaisp']?></option>
            <?php 
                }
            ?>
        </select></td>
    </tr>
    <tr>
        <td>Thứ tự</td>
        <td><input type="text" name="thutusp"></td>
    </tr>
    <tr>
        <td colspan="2">
        <div align="center"><input type="submit" name="them" value="Thêm">
        </div></td>
    </tr>
</table>
</form>