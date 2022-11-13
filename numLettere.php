<link rel="stylesheet" href="style_php.css">

<?php 

$num = $_POST["num"];

$numeri = ["zero", "uno", "due", "tre", "quattro", "cinque", "sei", "sette", "otto", "nove", "dieci", "undici", "dodici", "tredici", "quattordici", "quindici", "sedici", "diciassette", "diciotto", "diciannove", "venti"];

echo $numeri[$num];

?>
