<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>NC Store</title>
</head>
<body>
 <?php
        include('admincp/modules/config.php');
        include('modules/menu.php');
        session_start();

 ?>
<div class="wrapper">
        <?php 
            include('modules/header.php');           
            include('modules/content.php');
            include('modules/footer.php');      
        ?>
        
    </div>
    
</body>
</html>