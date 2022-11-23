<?php

include_once "utils.php";

$a = "";
$b = "";
$op = "";
$html = "";
$somma_selected = "";
$sottr_selected = "";
$molti_selected = "";
$divis_selected = "";

if (isset($_POST)) {
  $a = $_POST["a"];
  $b = $_POST["b"];
  $op = $_POST["operazione"];

  if ($op == "+") {
    $html = "La somma tra ".format_num($a)." e ".format_num($b)." è uguale a ".format_num(($a+$b));
    $somma_selected = "selected";
  }
  if ($op == "-"){
   $html = "La sottrazione tra ".format_num($a)." e ".format_num($b)." è uguale a ".format_num(($a-$b));
   $sottr_selected = "selected";
  }
  if ($op == "*"){
    $html = "La moltiplicazione tra ".format_num($a)." e ".format_num($b)." è uguale a ".format_num(($a*$b));
    $molti_selected = "selected";
  }
  if ($op == "/" && $b != 0){
    $html = "La divisione tra ".format_num($a)." e ".format_num($b)." è uguale a ".format_num(($a/$b));
    $divis_selected = "selected";
  }
  if ($op == "/" && $b == 0){
    $html = "La divisione tra ".format_num($a)." e ".format_num($b)." è uguale a non calcolabile";
    $divis_selected = "selected";
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
      crossorigin="anonymous" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
      defer></script>
    <title>form</title>
  </head>

  <body>
    <div class="container">
      <h1>Titolo della pagina</h1>
      <form action="" method="post">
        <div class="mb-3">
          <label class="form-label">A</label>
          <input type="number" name="a" class="form-control" step="0.01" />
        </div>
        <div class="mb-3">
          <label class="form-label">B</label>
          <input type="number" name="b" class="form-control" step="0.01" />
        </div>
        <select class="form-select mb-3" name="operazione">
          <option value="+" <?php echo $somma_selected ?>>Somma</option>
          <option value="-" <?php echo $sottr_selected ?>>Sottrazione</option>
          <option value="*" <?php echo $molti_selected ?>>Moltiplicazione</option>
          <option value="/" <?php echo $divis_selected ?>>Divisione</option>
        </select>
        <input type="submit" class="btn btn-primary mb-3" name="btn" value="Calcola"></input>
      </form>
      <?= $html ?>
    </div>
  </body>
</html>
