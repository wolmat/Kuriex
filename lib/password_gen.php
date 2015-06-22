<?php
 
function randString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

require_once ('mysql.php');
require_once ('../config/sql.php');
$db = new MysqlDriver($config);

$customers = $db->query("SELECT * FROM klient")->fetchAll();
$query = "UPDATE klient SET haslo = ? WHERE pesel_klienta = ?";
$update = $db->prepare($query);

foreach($customers as $customer){
    $password = randString(); // Random password
    $salt = randString(); // Random salt
    $hash = crypt($password, $salt);
    echo "${customer['imie']} 
          ${customer['nazwisko']} $password<br>";
    $update->execute(array($hash,
                           $customer['pesel_klienta']));
}

?>