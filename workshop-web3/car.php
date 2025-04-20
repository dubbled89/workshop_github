<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet" />
    <link href="./css/tinyslide.css" rel="stylesheet" />
    <script src="./js/jquery-3.7.1.min.js.js"></script>
    <script src="./js/tinyslide.js" /></script>
 
    <title>หน้าหลัง ขายรถยนตร์</title>
</head>
<body>
<?php require_once('nav.php'); ?>    
<section id="tiny" class="tinyslide">
      <aside class="slides">
        <figure>
          <img src="images/car1.jpg" alt="" />
          <figcaption>
            Description
          </figcaption>
        </figure>
        <figure>
          <img src="images/car2.jpg" alt="" />
          <figcaption>
            Description
          </figcaption>
        </figure>
        <figure>
          <img src="images/car3.jpg" alt="" />
          <figcaption>
            Description
          </figcaption>
        </figure>
      </aside>
    </section>

    <!-- info-car -->
    <section class="info-car">
        <h1>รถยนตร์นำเข้า</h1>
        <img src="./images/import1.jpg" alt="car">
        <img src="./images/import2.jpg" alt="car">
        <h1>รถยนตร์ขายดีอันดับ1</h1>
        <img src="./images/bestseller1.jpg" alt="car">
        <img src="./images/bestseller2.jpg" alt="car">
    </section>

    <!-- javascripts -->
    <script>
      var tiny = $('#tiny').tiny().data('api_tiny');
    </script>
<?php require_once('footer.php'); ?>      
</body>
</html>