<?php
/*   include_once "utils.php"; */

  $htmlColori = "";

  $word_count = array_count_values(file("colori.txt"));
  arsort($word_count);

  foreach ($word_count as $key => $value) {
    $htmlColori .= "<tr><td>$key</td><td>$value</td></tr>";
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
    <title>Colori</title>
  </head>

  <body>

    <div class="container">
    <h1>Occorrenze Colori</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nome Colore</th>
            <th scope="col">Occorrenze</th>
          </tr>
        </thead>
        <tbody>
          <?= $htmlColori ?>
        </tbody>
      </table>
    </div>

  </body>

</html>