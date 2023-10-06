<?php
$dbhost = '';
$dbuser = '';
$dbpass = '';
$dbname = '';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Pripojenie zlyhalo: " . $conn->connect_error);
}
$conn->set_charset("utf8");

$linkwebu = 'https://anubissvk.online/';
$menowebu = 'AnubisSVK';
$podnadpis = 'WEBSITE PROGRAMATOR';
$email = 'tvmarkomantv@gmail.com';
?>