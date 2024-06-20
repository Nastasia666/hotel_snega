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
    <div class="container">
  <div class="row align-items-start" style="margin-top: 100px;">
    <div class="col">
      <img class="cartinca" src="/img/Торт услуга 1.jpg">
    </div>
    <div class="col text">
      <h2><b>Клубничный торт</b></h2>
      <p class="opisanie"> 
      <div class="container">
  <div class="row">
    <div class="col order-last competextt">
    торт подарочный с начинкой на ваш выбор. Покрытие мастикой, а подтеки белый шоколад. Декор: шоколадки с разнами начинками, рожки, фрукты, мармелад, леденец из изомальта, зефирки ручного приготовления, огромный зефирный арбуз со вкусом арбуза, украшен шоколадными капельками.
    </div>
    <div class="col comptext">
    Описание:
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<h2 class="zagolovok"><b>Характеристики:</b></h2>
<div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
    <div class="container">
  <div class="row block">
    <div class="col-6 col-sm-4 name">Вид упаковки:</div>
    <div class="col-6 col-sm-4 explanation">каробка</div>

    <!-- Заставит следующие колонки переходить на новую строку в контрольной точке md и выше -->
    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-4 name">Калорийность:</div>
    <div class="col-6 col-sm-4 explanation">410</div>

    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-4 name">Белки:</div>
    <div class="col-6 col-sm-4 explanation">14,5</div>
  </div>
</div>
    </div>
    <div class="col">
      
    </div>
    <div class="col">
    <div class="container">
  <div class="row">
    <div class="col-6 col-sm-4 name">Жиры:</div>
    <div class="col-6 col-sm-4 explanation">20</div>

    <!-- Заставит следующие колонки переходить на новую строку в контрольной точке md и выше -->
    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-4 name">Углеводы:</div>
    <div class="col-6 col-sm-4 explanation">47</div>

    <div class="w-100 d-none d-md-block"></div>

    <div class="col-6 col-sm-4 name bloc">Срок хранения:</div>
    <div class="col-6 col-sm-4 explanation">24 часа</div>
  </div>
</div>
    </div>
  </div>
</div>
<p class="compound">Состав: Для коржей:Масло сливочное размягчённое – 250 г + для смазывания формыМука – 180 г + для посыпания формыСахар – 160  гЯйца – 2 шт.Ванилин – ¼ ч. ложкиРазрыхлитель теста – 1,5  ч. ложки*
Для начинки:Клубника – 350-400 гТворог жирностью 9% – 400  г Сливки<br> жирностью 33% – 100 гСахарная пудра – 150 г</p>
  <!-- КНОПКИ -->
  <div class="container d-flex justify-content-end">
  <button type="button" class="btn btn-secondary btn-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal">Заказать</button>
  <button type="button" class="btn btn-secondary btn-lg "><a href="srvices.php" style="text-decoration: none; color: white;">Выход</a></button>
  </div>

  <!-- Модальное окно -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Связаться с  консультантом</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <p class="text">Чтобы  оформить и обговорить заказ,<br> свяжитесь с нашим сотрудников  по номеру телефона:</p>
        <p class="nomer">8 (958) 857 93 93<br>8 (971) 012 01 84<br>8 (901) 834 65 92
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <a href="tel:89588579393"><img class="nomerimg" style="width: 30px;" src="/img/звонок.png"></a>
      </div>
    </div>
  </div>
</div>

    </main>
    <?php include("footer.php")?>
</body>
</html>