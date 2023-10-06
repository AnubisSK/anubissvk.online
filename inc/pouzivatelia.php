<?php
/* Vytvorené poverenia databázy. Za predpokladu, že používate MySQL
server s predvoleným nastavením (užívateľ 'root' bez hesla) na */
define('DB_SERVER', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_NAME', '');
 
/* Pokúste sa pripojiť k databáze MySQL */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Skontrolujte pripojenie
if($link === false){
    die("CHYBA: Nepodarilo sa pripojiť. " . mysqli_connect_error());
}
?>