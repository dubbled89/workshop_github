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
        <div class='entertain-cover'>
            <img src="./images/actor1.jpg" alt="cover">
            <h1>Actor 1 Prepare Media Lorem ipsum dolor sit </h1>
        </div>
        <hr>
        
        <h1>News Entertain</h1>
        <!-- section news-entertains -->
        <section class='news-entertain'>
            <!-- article 1 -->
            <article>
                <div class='newsen-img'>
                    <img src="./images/actor1.jpg" alt="ploy">
                </div>
                <div class='newsinfo'>
                    <h1>รายละเอียดข่าวเด่น</h1>
                    <p>..............</p>
                    <p>..............</p>
                </div>
                <div class='clear'></div>
            </article>

            <!-- article 2 -->
            <article>
                <div class='newsinfo'>
                <h1>รายละเอียดข่าวเด่น</h1>
                    <p>..............</p>
                    <p>..............</p>
                </div>
                <div class='newsen-img'>
                    <img src="./images/actor2.jpg" alt="boy">
                </div>
                <div class='clear'></div>
            </article>
        </section>
        <div class='clear'></div>
        <hr>
        <footer>
            <h2>สงวนลิขสิทธิ์ &copy; 2565</h2>
            <h2>จัดทำโดย Dub-With-Code</h2>
        </footer>
    </div>

</body>
</html>