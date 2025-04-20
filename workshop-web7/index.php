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
    <!-- supporter-images -->
        <section class="supporter-image">
            <img src="./images/t1.jpg" alt="support">
            <h1> สนับสนุนโดย Dub-Kitchen </h1>
            <h2> Enjoy Our Foods </h2>
            <div class='blackscreen'></div>
        </section>
    
    <!-- news-update -->
        <!-- อัพเดธ -->
        <h1>ตะลุยกินล่าสุด</h1>
        <section class="news-update">
            <article class='clip'>
                <ul>
                    <li><a href="#tabs1">ร้านแนะนำ</a></li>
                    <li><a href="#tabs2">โปรโมชั่นพิเศษ</a></li>
                </ul>
    <!-- tabs1 -->
                <div id="tabs1">
                    <div class="tabs-image">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/LZfmvLW853c" title="15 ร้านอร่อยระดับมิชลินไกด์ ที่มีเงิน 100 ก็กินได้!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>มีเงินเพียง 100 ก็อิ่มอร่อย </p>
                    </div>
                    <div class="tabs-image">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/LZfmvLW853c" title="15 ร้านอร่อยระดับมิชลินไกด์ ที่มีเงิน 100 ก็กินได้!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>มีเงินเพียง 100 ก็อิ่มอร่อย </p>
                    </div>
                    <div class="tabs-image">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/LZfmvLW853c" title="15 ร้านอร่อยระดับมิชลินไกด์ ที่มีเงิน 100 ก็กินได้!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>มีเงินเพียง 100 ก็อิ่มอร่อย </p>
                    </div>
                </div>
    <!-- clear -->
                <div class="clear"></div>
    <!-- tabs2 -->
                <div id="tabs2">
                    <div class="tabs-image">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/CPqmRmQN2FU" title="โปรโมทร้านอาหาร สุกี้ช้างเผือก 2 #ช่างภาพเชียงใหม่ #ถ่ายวีดีโอเชียงใหม่" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p> โปรโมทร้านอาหาร สุกี้ช้างเผือก </p>
                    </div>
                    <div class="tabs-image">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/CPqmRmQN2FU" title="โปรโมทร้านอาหาร สุกี้ช้างเผือก 2 #ช่างภาพเชียงใหม่ #ถ่ายวีดีโอเชียงใหม่" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p> โปรโมทร้านอาหาร สุกี้ช้างเผือก </p>
                    </div>
                    <div class="tabs-image">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/CPqmRmQN2FU" title="โปรโมทร้านอาหาร สุกี้ช้างเผือก 2 #ช่างภาพเชียงใหม่ #ถ่ายวีดีโอเชียงใหม่" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p> โปรโมทร้านอาหาร สุกี้ช้างเผือก </p>
                    </div>
    <!-- clear  -->
                    <div class="clear"></div>
                </div>
            </article>
        </section>

    <!-- movies -->
        <h1>ภาพยนต์</h1>
        <section class="movies">
            <article class='clip'>
                <ul>
                    <li><a href="#tabs3">เกาหลี</a></li>
                    <li><a href="#tabs4">ไทย</a></li>
                </ul>
    <!-- tabs3 -->
                <div id="tabs3">
                    <div class="tabs-image">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4QTvelwvNEg" title="9 ซีรีส์เกาหลีจาก Disney Plus ประจำปี 2025 ปักหมุดรอรับชมได้เลย!!! | โอติ่งรีวิวซีรีส์ 📌📺" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>แนะนำหนังเกาหลีมาใหม่ </p>
                    </div>
                    <div class="tabs-image">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4QTvelwvNEg" title="9 ซีรีส์เกาหลีจาก Disney Plus ประจำปี 2025 ปักหมุดรอรับชมได้เลย!!! | โอติ่งรีวิวซีรีส์ 📌📺" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>แนะนำหนังเกาหลีมาใหม่ </p>
                    </div>
                    <div class="tabs-image">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4QTvelwvNEg" title="9 ซีรีส์เกาหลีจาก Disney Plus ประจำปี 2025 ปักหมุดรอรับชมได้เลย!!! | โอติ่งรีวิวซีรีส์ 📌📺" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>แนะนำหนังเกาหลีมาใหม่ 2025 </p>
                    </div>
                </div>
    <!-- clear -->
                <div class="clear"></div>
    <!-- tabs4 -->
                <div id="tabs4">
                    <div class="tabs-image">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7efqU8SWNcc" title="TOP 10 อันดับ หนังไทยทำเงินสูงสุดในปี 2024 &quot;หนัง&quot;ทอด PODCAST | TheTehcarus" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>แนะนำหนังเกาหลีมาใหม่ 2025 </p>
                    </div>
                    <div class="tabs-image">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7efqU8SWNcc" title="TOP 10 อันดับ หนังไทยทำเงินสูงสุดในปี 2024 &quot;หนัง&quot;ทอด PODCAST | TheTehcarus" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>แนะนำหนังเกาหลีมาใหม่ 2025 </p>
                    </div>
                    <div class="tabs-image">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7efqU8SWNcc" title="TOP 10 อันดับ หนังไทยทำเงินสูงสุดในปี 2024 &quot;หนัง&quot;ทอด PODCAST | TheTehcarus" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <p>แนะนำหนังเกาหลีมาใหม่ 2025 </p>
                    </div>
                </div>
    <!-- clear  -->
                    <div class="clear"></div>
                </div>
            </article>
        </section>
    </div>
    
    <footer>
        <h2>สงวนลิขสิทธิ์ &copy; 2565</h2>
        <h2>จัดทำโดย Dub-With-Code</h2>
    </footer>
</body>
</html>
