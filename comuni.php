<?php
  include_once "utils.php";

  $comuniHtml = "";
  $file = fopen('listacomuni.csv', 'r');
  $isFirst = true;
  while (($line = fgetcsv($file)) !== FALSE) {
    if(!$isFirst){
      //1 - Comune
      //2 - Provincia
      //3 - Regione
      //5 - CAP
      //6 - Cod Catastale
      //7 - Abitanti
      $array_comune = explode(";",$line[0]);
      $nome_comune = $array_comune[1] . " (" . $array_comune[2] . ")";
      $abitanti = $array_comune[7];
      $regione = $array_comune[3];
      $cap = $array_comune[5];
      $catastale = $array_comune[6];

      $comuniHtml .= "<tr><td>" . $nome_comune . "</td>
                          <td class='text-end'>" . number_format($abitanti, 0, "", "'") . "</td>
                          <td>" . $regione = $comuni[$regione] . "</td>
                          <td>" . $cap . "</td>
                          <td>" . $catastale . "</td></tr>";
    }
    
    $isFirst = false;
  }
  fclose($file);

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <title>Elenco Comuni</title>
  </head>

  <body>

    <div class="container">
    <h1>Lista Comuni</h1>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Comune</th>
            <th scope="col" class="text-end">Abitanti</th>
            <th scope="col">Regione</th>
            <th scope="col">CAP</th>
            <th scope="col">Codice Catastale</th>
          </tr>
        </thead>
        <tbody>
          <?= $comuniHtml ?>
        </tbody>
      </table>
    </div>

  </body>

</html>