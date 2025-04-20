<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery-3.7.1.min.js.js"></script>
    <title>Document</title>
    <style>
        body,html {
            margin: 0px;
            padding: 0px;
        }
        .slider {
            width: 100%;
        }
        .slider img {
            width: 100%;
            display: none;
        }
        .active {
            display:block;
        }
    </style>
</head>
<body>
    <section class="slider">
        <img alt="" id="img-slider">
    </section>

    <script>
        $(document).ready(function(){
            $('#img-slider').addClass('active').attr('src','./images/car1.jpg');
            setInterval(frame,3000);

            function frame() {
                var path = './images';
                var rand = Math.floor((Math.random()*3)+1);
                $('#img-slider').addClass('active').attr('src',path + '/' + 'car' + rand + '.' + 'jpg').hide().fadeTo('slow',1);
            }
        });
    </script>
    
</body>
</html>