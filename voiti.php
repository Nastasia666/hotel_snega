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
    <main style="padding-top: 30px; width: 800px; margin: 0 auto;">
    <p class="container switching">
      <a class="btn btn-primary me-3" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Авторизация</a>
      <button class="btn btn-primary mt-0 ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">Регистрация</button>
    </p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Введите почту</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="почта...">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Введите пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="пароль...">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Соглашение на обработку на данных</label>
  </div>
  <button type="submit" class="btn btn-primary">Войти</button>
</form>
  </div>
</div>
<div class="collapse" id="collapseExample2">
  <div class="card card-body">
  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Введите почту</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="почта...">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Введите имя</label>
    <input type="name" class="form-control" id="exampleInputPassword1" placeholder="имя...">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Введите номер телефона</label>
    <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="номер телефона...">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Введите пароль</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="пароль...">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Соглашение на обработку на данных</label>
  </div>
  <button type="submit" class="btn btn-primary">Зарегистироваться</button>
</form>
  </div>
</div>
    </main>
    <?php include("footer.php")?>
</body>