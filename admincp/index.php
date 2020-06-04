<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/index.css">
    <title>Quản trị nội dung website</title>
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        //sai user name hoac pass word
        header('location:adminlogin.php');
    }
?>
    <div class="wrapper">
        <?php
            include('modules/config.php');
            include('modules/header.php');
            include('modules/menu.php');
            include('modules/content.php');
            include('modules/footer.php');
        ?>
        
        
    </div>
</body>
</html>