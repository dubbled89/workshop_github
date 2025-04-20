<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="./js/jquery-ui-1.14.1.custom/jquery-ui.min.css" rel="stylesheet">
    <script src="./js/jquery-3.7.1.min.js.js"> </script>
    <script src="./js/jquery-ui-1.14.1.custom/jquery-ui.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">


    <title>Document</title>
    <script>
        $(function(){
            $('.news-update').tabs();
            $('.movies').tabs();
        });
    </script>
</head>
<body>
    <!-- container -->
    <div class='container'>
        <nav>
            <div class='logo'><a href="index.php">Dub-Kitchen </a></div>
            <div class='menu'>
                <a href="index.php">หน้าหลัก</a>
                <a href="activity.php">กิจกรรม</a>
                <a href="entertain.php">บันเทิง</a>
            </div>
            <div class='clear'></div>
        </nav>
    <!-- csr -->
        <section class='csr'>
            <div class='now-csr'>
                <img src="./images/now-csr.jpg" alt="">
            </div>
            <div class='past-csr'>
                <div><img src="./images/past-csr1.jpg" alt=""></div>
                <div><img src="./images/past-csr2.jpg" alt=""></div>
                <div><img src="./images/past-csr3.jpg" alt=""></div>
                <div><img src="./images/past-csr4.jpg" alt=""></div>
                <div class='clear'></div>
            </div>
            <div class= 'clear'></div>
        </section>
    <!-- gift  -->
        <h1>กิจกรรมประจำปี</h1>
        <section class='gift'>
            <div>
                <img src="./images/gift1.jpg" alt="gift">
            </div>
        </section>
    <!-- lucky -->
        <h1>รายชื่อผู้โชคดี</h1>
        <section class='lucky-person'>
            <div>
                <ol>
                    <li>นาย A </li>
                    <li>นางสาว B</li>
                </ol>
            </div>
        </section>
    </div>
    <hr>
    <footer>
        <h2>สงวนลิขสิทธิ์ &copy; 2565</h2>
        <h2>จัดทำโดย Dub-With-Code</h2>
    </footer>
</body>
</html>