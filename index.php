<?php 
    if($_GET['address'] ?? '') {
        echo $_GET['address'];
    }
    
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
     <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <h1>Yandex-карты</h1>
        <hr>
        <form action="" method="get" accept-charset="utf-8">
            <input type="text" name="address" value="" placeholder="Введите адрес">
            <button type="submit">Найти</button>
        </form>
    </div>
</body>
</html>