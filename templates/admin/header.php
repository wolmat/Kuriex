<?php
session_start();
if(isset($_SESSION['user']) && $_SESSION['user'] == "admin"){ ?>

<div class="container">
		<div class="row">
                <a href = "admin">Panel admina</a> | 
                <a href = "customers">Klienci</a> | 
				<a href = "workers">Pracownicy</a> | 
                <a href = "orders">Zlecenia</a> |
                <a href = "logout">Wyloguj się</a> 
                </br></br>
		</div>
	</div>

<?php } else header("Location: login"); ?>