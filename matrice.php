<?php

include_once "utils.php";

$trisArray = [
  ["0,0","0,1","0,2"],
  ["1,0","1,1","1,2"],
  ["2,0","2,1","2,2"]
];

$listaStudenti = [
  "Mario" => ["dataNascita" => "1998-02-10", "Sesso" => "M", "Email" => "mario@test.it"],
  "Maria" => ["dataNascita" => "1999-05-12", "Sesso" => "F", "Email" => "maria@test.it"],
  "Pippo" => ["dataNascita" => "1985-25-05", "Sesso" => "M", "Email" => "pippo@test.it"],
  "Pluto" => ["dataNascita" => "1987-22-01", "Sesso" => "F", "Email" => "pluto@test.it"],
];

$htmlList = "<tr>";
foreach ($listaStudenti as $nomeStudenti => $datiStudenti) {
  $htmlList .= "<td>$nomeStudenti</td>";
  foreach ($datiStudenti as $key => $value) {
    if ($key == "dataNascita") $value = dateFormat($value, "d/m/Y");
    if ($key == "Sesso") $value = $gender[$value];
    $htmlList .= "<td>$value</td>";
  }
  $htmlList .= "</tr>";
}


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

    <div class="container my-3">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Anno di nascita</th>
            <th scope="col">Sesso</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <?= $htmlList ?>
        </tbody>
      </table>
    </div>

  </body>

</html>