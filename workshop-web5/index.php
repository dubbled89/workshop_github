<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/jquery-3.7.1.min.js.js"></script>
    <title>Document</title>
    <style>
        a {
            text-decoration: none;
            padding:20px;
            color: black;
        }
        a:hover,
        a:active {
            color:red;
            border-bottom: 2px solid red; 
        }
        .content {
            margin-top: 50px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <nav class="menu">
        <a href="main.php">หน้าหลัก</a>
        <a href="about.php">เกี่ยวกับเรา</a>
        <a href="contact.php">ติดต่อเรา</a>
    </nav>

    <div class="content">

    </div>
    <script>
        $(document).ready(function(){
            $('a').click(function(){
                $('a').removeClass();
                $(this).addClass('active');
                $('.content').load($(this).attr('href'));
                return false;
            });
        });
    </script>
</body>
</html>