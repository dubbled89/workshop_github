<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script ref=""></script>
    <title>workshop-web2</title>
</head>
<body>
    <?php require_once('nav.php'); ?>
    <section>
        <article>
            <h1>วิตามิน</h1>
            <div class="vitamin">
                <div class="vitamin-inner">
                    <img src="./images/vitaminc.jpg" alt="vitaminc">
                </div>
                <div class="vitamin-inner">
                    <p>สรรพคุณของวิตามิน <a href="index.php">อ่านต่อ</a></p>
                </div>
            </div>
            <h1>ตัวอย่างผู้ใช้สินค้า</h1>
            <div class="youtube">
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/yZKgFJDf5nA?si=lkN5ZxNo_SsIKvYJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                <video controls>
                    <source src="./vdo/vitaminc.mp4" type="video/mp4">
                </video>
            </div> 
        </article>
    </section>
    <?php require_once('footer.php'); ?>
</body>
</html>