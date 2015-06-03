<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Kuriex</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- include all css stylesheets -->
  <?php foreach(glob('css/*.css') as $css): ?>
    <link rel="stylesheet" href="<?php echo $css; ?>">
  <?php endforeach; ?>
  
  <!-- include all js scripts -->
  <?php foreach(glob('js/*.js') as $script): ?>
    <script type="text/javascript" src="<?php echo $script; ?>"></script>
  <?php endforeach; ?>
</head>
<body>
  <nav id="top-nav">
    <a href="login">Zaloguj się</a> | <a href="find">Szukaj</a> |
    <a href="about">Kontakt</a>
  </nav>

  <div id="header">
    <div class="row">
      <div class="one-half column u-pull-left">
        <nav>
          <a href = "main">Strona główna</a></br>
          <a href = "order">Złóż zamówienie</a></br>
          <a href = "find">Znajdź paczkę</a></br>
          <a href = "about">Kontakt</a></br>
        </nav>
      </div>
      <div class="one-half column u-pull-right"
           style="text-align: center">
        <img src="templates/images/kuriex.png">
        <h6>
          Usiądź wygodnie w fotelu. Zrobimy wszystko za Ciebie!
        </h6>
      </div>
    </div>
  </div>
