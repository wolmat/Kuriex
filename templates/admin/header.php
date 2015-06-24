<?php
if(isset($_SESSION['user']) && $_SESSION['user'] == "admin"){ ?>

<div class="container">
  <nav id="admin-nav">
    <li><a href = "admin">Panel admina</a></li>
    <li><a href = "customers">Klienci</a></li>
    <li><a href = "workers">Pracownicy</a></li>
    <li><a href = "orders">Zlecenia</a></li>
    <li><a href = "doc">Dokumentacja</a></li>
    <li><a href = "logout">Wyloguj się</a></li>
  </nav>
</div>

<?php } else header("Location: login"); ?>