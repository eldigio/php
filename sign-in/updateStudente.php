<?php
require_once "utils.php";
require_once "php/config.php";

$html = "";

$sql = "SELECT * FROM studenti";
if($reusult = $connection->query($sql)) {
  foreach($row = $reusult->fetch_array(MYSQLI_ASSOC) as $key => $value) {
    $html .= "<tr>
      <td>$key"; if($key == "id") $html .= $icon_pk;
      $html .= "
      </td><td><input class='form-control' /></td>
    </tr>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <title>Update</title>
  </head>
  <body>
    <div class="container">
      <h1>Tabella Studenti(Modifica)</h1>
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th scope="col">Colonna</th>
              <th scope="col">Valore</th>
            </tr>
          </thead>
          <tbody><?=$html?></tbody>
        </table>
      </div>
    </div>
  </body>
</html>