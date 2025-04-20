<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/jquery-3.7.1.min.js.js"></script>
    <title>Document</title>
    <style>
        .product {
            width:25%;
            /* border: 1px solid black; */
        }
        .product ul li {
            width: 25%;
            border: 1px solid red;
            margin: 50px auto;
            text-align: center;
            padding: 10px;
            /* line-height: 2; */
        }
    </style>
</head>
<body>
    <div>
        <input id='input' type="text" placeholder='ค้นหาที่นี่...'>
    </div>
    <div class='product'>
        <ul>
            <li>A</li>
            <li>B</li>
            <li>C</li>
            <li>Ant</li>
        </ul>
    </div>
    <script>
        $(document).ready(function(){
            $('#input').keyup(function(){
                var value = $(this).val().toLowerCase();
                $('.product ul li').filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
                    .css('color','red')
                    .animate({fontSize:'50px'},'slow')
                    .css('background-color','yellow'); 
                });
            });
        });
    </script>
</body>
</html>