<?php

$servername = "";
$username = "";
$password = "";
$db= "";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die('Nedá sa pripojiť: ' . mysqli_error());
}

/* To sort the id and limit the post by 4 */
$sql = "SELECT * FROM youtube_videa ORDER BY timestamp desc limit 4 ";
$result = $conn->query($sql);
$sqlall= "SELECT * FROM youtube_videa ORDER BY timestamp desc";
$resultall = $conn->query($sqlall);

$i = 0;

if ($result->num_rows > 0) {

    // Output data of each row
    $idarray= array();
    while($row = $result->fetch_assoc()) {
        echo "<hr>";

        // Create an array to store the
        // id of the blogs
        array_push($idarray,$row['id']);
    }
}
else {
    echo "0 results";
}
?>