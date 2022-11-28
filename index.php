<?php

include_once "utils.php";

$html = "";
$dataHtml = date("Y-m-d");
$a_selected = "";
$b_selected = "";
$c_selected = "";
$italia_selected = "";
$francia_selected = "";
$usa_selected = "";
$giappone_selected = "";

if (isset($_POST["dataNascita"]) && isset($_POST["selectPatente"]) && isset($_POST["nazione"])) {
  $dataNascita = $_POST["dataNascita"];
  $dataHtml = $dataNascita;
  $tipoPatente = $_POST["selectPatente"];
  $nazione = $_POST["nazione"];

  if ($patente[$nazione][$tipoPatente] <= person_age($dataNascita)) {$html = "Si";}
  else $html = "No";
  
  switch ($tipoPatente) {
    case "A":
      $a_selected = "selected";
      break;
    case "B":
      $b_selected = "selected";
      break;
    case "C":
      $c_selected = "selected";
      break;
  }

  switch ($nazione) {
    case "Italia":
      $italia_selected = "selected";
      break;
    case "Francia":
      $francia_selected = "selected";
      break;
    case "USA":
      $usa_selected = "selected";
      break;
    case "Giappone":
      $giappone_selected = "selected";
      break;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
      defer
    ></script>
    <title>form</title>
  </head>

  <body>
    <div class="container">
      <h1 class="mb-5">Controllo patente</h1>
      <form action="" method="post">
        <div class="mb-3 input-group">
          <label class="input-group-text w-25">Data di nascita</label>
          <input type="date" name="dataNascita" value="<?= $dataHtml ?>" class="form-control" />
        </div>
        <div class="mb-3 input-group">
          <label class="input-group-text w-25">Tipo di patente</label>
          <select name="selectPatente" class="form-select">
            <option value="A"<?= $a_selected ?>>A</option>
            <option value="B"<?= $b_selected ?>>B</option>
            <option value="C"<?= $c_selected ?>>C</option>
          </select>
        </div>
        <div class="mb-3 input-group">
          <label class="input-group-text w-25">Nazionalità</label>
          <select name="nazione" class="form-select">
            <option value="Italia"<?= $italia_selected ?>>Italia</option>
            <option value="Francia"<?= $francia_selected ?>>Francia</option>
            <option value="USA"<?= $usa_selected ?>>USA</option>
            <option value="Giappone"<?= $giappone_selected ?>>Giappone</option>
          </select>
        </div>
        <input type="submit" class="btn btn-primary me-3 w-25" name="btn" value="Calcola" />
        <span class="align-bottom"><?= $html ?></span>
      </form>
    </div>
  </body>
</html>