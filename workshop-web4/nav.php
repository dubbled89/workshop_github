<?php $file_name = basename($_SERVER['SCRIPT_FILENAME']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .menu{
            width:100%;
            background-color:black;
        }
        .inner-menu li {
            display:inline-block;
            padding: 20px;
        }
        .inner-menu li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            padding: 10px;    
        }
        .inner-menu li a:hover,
        .inner-menu li a.active {
            color:red;
        }

    </style>
</head>
<body>
    <nav class="menu">
        <ul class="inner-menu">
            <li><a href="index.php" class="<?php echo $file_name == 'index.php'?'active':''; ?>">หน้าหลัก</a></li>
            <li><a href="product.php" class="<?php echo $file_name == 'product.php'?'active':''; ?>">สินค้า</a></li>
        </ul>
    </nav>    


</body>
</html>