<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Линия</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="/js/script.js"></script>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>

  <?php include("header.php")?>
  
  <div class="main">
    <!-- БАННЕР -->
     <div class="banner">
        <img class="banner" src="/img/баннер.png">
           <h3>Академия кофе</h3> 
            <p class="tex">ГОРЯЧИЙ КОФЕ</з><br>
            <p class="tixt">Всегда самый вкусный!</p> 
    </div> 

    <!-- ПРЕИМУЩЕСТВА -->
    <h2 class="text m-5"><b>ПРЕИМУЩЕСТВА НАШЕГО КОФЕ</b></h2>

    <!-- ВЕРХНЯЯ ЧАСТЬ -->
    <div class="container">
  <div class="row align-items-start">
    <div class="col">
      <h4 class="name1">Качество</h4>
      <h5 class="subtext">Мы закупаемся только лучшими<br>сортами кофе прямиком из Индии</h5>
      <h4 class="name3 text-left mt-5">Скорость</h4>
      <h5 class="text-left">Мы осуществляем курьерскую<br>доставку по всей Москве в<br>течении 24 часа</h5>
    </div>
    <div class="col">
    <img class="mug" style = "width: 400px; height:350px; " src="img/Кружка с кофе на зернах.png">
    </div>
    <div class="col">
    <h4 class="name2">Выгода</h4>
      <h5 class="subtext" style = "text-align: left;">Наша курьерская доставка становится<br>бесплатной от покупке на сумму от<br>1000р</h5>
      <h4 class="name4 mt-5">Экологичность</h4>
      <h5 class="subtext">Мы используем только те материалы,<br>которые подлежат переработке</h5>
    </div>
  </div>
</div>
<div class="line"></div>

<!-- ОПЛАТА И ДОСТАВКА -->
<h2 class="text m-5"><b>ОПЛАТА И ДОСТАВКА</b></h2>

 <!-- ЗОГОЛОВКИ С ФОТОГРАФИЯМИ -->
 <div class="general">
 <div class="container text-center">
  <div class="row align-items-center">
    <div class="col name">
      <img class="icon" src="../img/иконказаказть.png"><b>Заказать</b>
    </div>
    <div class="col name">
    <img class="icon" src="../img/иконкадоставка.png"><b>Доставка</b>
    </div>
    <div class="col name">
    <img class="icon" src="../img/иконкаупотребления.png"><b>Употребление</b>
    </div>
  </div>
</div>

<!-- ТЕКСТ -->
<div class="container text-center inf">
  <div class="row align-items-center">
    <div class="col text-start pt-3">
    -Заполните заявку<br>
    -Выберите кофе<br>
    -Упаковать<br>
    -Заказать<br>
    -Проверить заказ перед оформлением можно в корзине
    </div>
    <div class="col text-start pt-3">
    Стоимость доставки 150 р,<br>а от покупки на 1000 р,<br>доставка бесплатная.<br>Доставкадоставляется в<br>течение 245 часа после<br>заказа.
    </div>
    <div class="col text-start pt-0">
    После доставки вы можете<br>насладиться нашими горячими и вкусными напитками.<br>Приятного аппетита и хорошего настроения, ждем вас снова!
    </div>
  </div>
</div>
 </div>
</div>
 <?php include("footer.php")?>
</body>
</html>