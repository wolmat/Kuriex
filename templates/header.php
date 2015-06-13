<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Kuriex</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
  
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
    <ul>
      <li><a href="main">Strona główna</a></li>
      <li>
        <?php if(isset($_SESSION['user'])): ?>
          <a href="logout">Wyloguj</a>
        <?php else: ?>
          <a href="login">Zaloguj się</a>
        <?php endif; ?>
      </li>
      <li><a href="login">Złóż zamówienie</a></li>
      <li><a href="find">Znajdź paczkę</a></li>
      <li><a href="about">Kontakt</a></li>
    </ul>
  </nav>

  <div id="header">
    <div class="row">
      <div class="two columns u-pull-left offset-by-two">
        <nav id="header-nav">
          <ul>
            <li><a href="main">Strona główna</a></li>
            <li>
              <?php if(isset($_SESSION['user'])): ?>
                <a href="logout">Wyloguj</a>
              <?php else: ?>
                <a href="login">Zaloguj się</a>
              <?php endif; ?>
            </li>
            <li><a href="login">Złóż zamówienie</a></li>
            <li><a href="find">Znajdź paczkę</a></li>
            <li><a href="about">Kontakt</a></li>
          </ul>
        </nav>
      </div>
      <div class="one-half column u-pull-right"
           style="text-align: center">
        <img src="templates/images/kuriex.png" alt="Kuriex">
        <p>
          Usiądź wygodnie w fotelu.
          Zrobimy wszystko za Ciebie!
        </p>
      </div>
    </div>
  </div>
