<?php require_once "libs/config.php"; 
$qr = "SELECT MAX(id) FROM contatos";
$run = mysqli_query( $GLOBALS['conn'], $qr);

$row = mysqli_fetch_assoc($run);

echo $row['MAX(id)'];