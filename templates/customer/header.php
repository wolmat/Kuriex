<?php
if(isset($_SESSION['user']) && $_SESSION['user'] != "admin"){ ?>

<div class="container">
  <h5>Zalogowany jako <span class="email"><?php echo $_SESSION['user']; ?></span></h5>
  <nav id="admin-nav">
    <li><a href = "yourAccount">Twoje konto</a></li>
    <li><a href = "yourOrders">Zlecenia</a></li>
    <li><a href = "logout">Wyloguj się</a></li>
  </nav>
</div>

<?php } else header("Location: login"); ?>