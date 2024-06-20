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
    <script src="/scripts/script.js"></script>
</head>
<body>
    <?php include("header.php")?>

    <main class="container mb-5">
    <div id="carouselExampleIndicators" class="carousel slide mb-3 w-100%" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/баннер.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/баннер дискотека.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/торты баннер.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>

<!-- ЭЛЕМЕНТЫ КОЛОНОК НА ГЛАВНОЙ -->
<div class="container container_glav">
  <div class="row align-items-center cont">
    <div class="col">
      <img src="/img/Дискотека.jpg" alt="" class="disco">
    </div>
    <div class="col inf">
      <div class="inf_block">
        <p class="zagol1"><b>Дискотека</b></p>
        <p class="text1">Реквизит, музыка, сказочные ведущие — у нас есть все, чтобы герои праздника веселились от души.</p>
      </div>
      
    </div>
  </div>
  <div class="row align-items-center conta">
    <div class="col inf inf2">
      <p class="zagol2"><b>Торты</b></p>
      <p class="text2">Кейтеринг с угощениями и не только сладостями, но и любимыми блюдами из натуральных ингредиентов. Стилизуем подачу под тематику праздника.</p>
    </div>
    <div class="col">
      <img src="/img/тортики главная.png" alt="" class="tort">
    </div>
  </div>
  <div class="row align-items-center contai">
    <div class="col">
      <img src="/img/people.png" alt="" class="people">
    </div>
    <div class="col inf inf3">
      <p class="zagol3"><b>Веселые мелочи</b></p>
      <p class="text3">Мы можем создать яркий образ в бьюти-баре, устроить взрывной<br> сюрприз и вдохновить всех гостей прыгать от радости.</p>
    </div>
  </div>
</div>
    </main>
    <?php include("footer.php")?>
</body>
</html>