<?php
require_once "php/config.php";
require_once "utils.php";
$html = "";

$sql = "SELECT * FROM studenti";
if($result = $connection->query($sql)) {
  if($result->num_rows > 0) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $html .= "<tr>
        <td>" . $row["nome"] . " " . $row["cognome"] . "</td>
        <td>" . $row["data_nascita"] . "</td>
        <td>" . $row["codice_fiscale"] . "</td>
        <td>" . $row["email"] . "</td>
        <td><a href='updateStudente.php' class='btn btn-warning'>$icon_edit</a></td>
        <td><button class='btn btn-danger'>$icon_delete</button</td>
      </tr>";
    }
  } else echo "error: " . $connection->error;
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
    <title>Cyber Valley</title>
  </head>
  <body>
    <div class="container">
      <div class="d-flex justify-content-between mx-1 my-3">
        <h1 class="">Tabella Studenti</h1>
        <button class="btn btn-primary">Inserisci Studente</button>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-sm table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Data Nascita</th>
            <th scope="col">Codice Fiscale</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody><?=$html?></tbody>
      </table>
    </div>
  </body>
</html>