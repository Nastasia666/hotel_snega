<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("header.php")?>
    <main>
        <p class="zagolovok">Контакты</p>

<div class="container">
  <div class="row align-items-start">
    <div class="col zagolovki">
    <b>Время работы:</b>
    </div>
    <div class="col zagolovki">
    <b>Номер телефона:</b>
    </div>
    <div class="col zagolovki">
    <b>Почта:</b>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col subbtext">
    Пн: 10:00-21:00<br>
    Вт: 10:00-21:00<br>
    Ср: 10:00-21:00<br>
    Чт: 10:00-21:00<br>
    Пт: 10:00-21:00<br>
    Cб: 10:00-21:00<br>
    Вс: 10:00-21:00<br> 
    </div>
    <div class="col subbtextt link-ease-in-out">
    <a href="tel:89588579393" class="tel" title="Lorem Ipsum">8 958 374 10 57</a><br>
    <a href="tel:89588579393" class="tel" title="Lorem Ipsum">8 937 682 50 37</a><br>
    <a href="tel:89588579393" class="tel" title="Lorem Ipsum">8 913 567 47 98</a><br>
    </div>
    <div class="col subbtexttt">
    <a href="mailto:dfngojng@gmail.com" class="email" title="Lorem Ipsum">dfngojng@gmail.com</a><br>
    <a href="mailto:nvodnfvfndf@mail.ru" class="email" title="Lorem Ipsum">nvodnfvfndf@mail.ru</a>
    </div>
  </div>
</div>

<div class="container" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a href="https://yandex.ru/maps/213/moscow/?ll=37.635993%2C55.752099&utm_medium=mapframe&utm_source=maps&z=16.33" style="color:#eee;font-size:12px;position:absolute;top:14px;">Москва — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=37.635993%2C55.752099&z=16.33" width="100%" height="800" frameborder="1" allowfullscreen="true" style="position:relative; margin-top: 50px;"></iframe></div>

  <div class="zagolovok_oplata"><p class="oplata">Способы оплаты</p></div>
  <div class="container opl">
  <div class="row align-items-start">
    <div class="col">
      <p class="bank"><b>Банковские карты</b></p>
    </div>
    <div class="col">
      <p class="internet"><b>Интернет-банкинг</b></p>
    </div>
    <div class="col">
      <p class="ilectr"><b>Электронные деньги</b></p>
    </div>
  </div>
  <div class="row align-items-center ">
    <div class="col photo_banki">
      <img src="/img/visa.png" alt="" class="visa">
    </div>
    <div class="col photo_banki">
      <img src="/img/СберБанк.png" alt="" class="sber">
    </div>
    <div class="col photo_banki">
      <img src="/img/WebMoney.png" alt="" class="webm">
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col photo_banki">
      <img src="/img/мир.png" alt="" class="mir">
    </div>
    <div class="col photo_banki">
      <img src="/img/Альфа банк.png" alt="" class="alfa">
    </div>
    <div class="col photo_banki">
      <img src="/img/ЯндексДеньги.png" alt="" class="yandex">
    </div>
  </div>
  <div class="row align-items-end">
    <div class="col photo_banki">
      <img src="/img/MasterCard.png" alt="" class="masterc">
    </div>
    <div class="col photo_banki">
      
    </div>
    <div class="col photo_banki">
      <img src="/img/Оранжевый круг.png" alt="" class="circle">
    </div>
  </div>
</div>
    </main>
    <?php include("footer.php")?>
</body>
</html>