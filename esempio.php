<?php

$num = $_POST["num"];
$num_array = [];

for ($i = 0; $i <= 10; $i++) {
  $num_array[$i] = $num * $i;
}

echo "<pre>"; echo print_r($num_array); echo "</pre>";

?>