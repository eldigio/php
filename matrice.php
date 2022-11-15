<?php

$trisArray = [
  ["0,0","0,1","0,2"],
  ["1,0","1,1","1,2"],
  ["2,0","2,1","2,2"]
];

$listaStudenti = [
  "Mario" => ["Anno" => "1998", "Sesso" => "M", "Email" => "test@test.it"],
  "Maria" => ["Anno" => "1999", "Sesso" => "F", "Email" => "test@test.it"],
  "Pippo" => ["Anno" => "1985", "Sesso" => "M", "Email" => "test@test.it"],
  "Pluto" => ["Anno" => "1987", "Sesso" => "F", "Email" => "test@test.it"],
];

$htmlList = "<table class='table'><tr>";

foreach ($listaStudenti as $key => $values) {
  $htmlList .= "<td>Nome: $key</td>";
  foreach ($values as $key => $value) {
    $htmlList .= "<td>$key: ";
    if ($value == "M") $value = "Maschio";
    if ($value == "F") $value = "Femmina";
    $htmlList .= "$value</td>";
  }
  $htmlList .= "</tr>";
}

$htmlList .= "</table>";

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <title>Matrice Tris</title>
  </head>

  <body>

    <div class="container">
      <?= $htmlList ?>
    </div>

  </body>

</html>