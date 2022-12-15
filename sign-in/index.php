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
        <td>
        <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#editModal'>$icon_edit</button>
        <div class='modal fade' id='editModal' tabindex='-1' aria-labelledby='editModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h1 class='modal-title fs-5' id='editModalLabel'>Modal title</h1>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
              </div>
              <div class='modal-body'>
                <table class='table table-sm table-striped mx-auto text-center'>
                  <thead>
                    <tr>
                      <th>Colonna</th>
                      <th>Campo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td>ID</td><td><input type='text' class='form-control' value=" .  $row["id"]. " disabled></td></tr>
                    <tr><td>Nome</td><td><input type='text' class='form-control' value=" .  $row["nome"]. "></td></tr>
                    <tr><td>Cognome</td><td><input type='text' class='form-control' value=" .  $row["cognome"]. "></td></tr>
                    <tr><td>Email</td><td><input type='text' class='form-control' value=" .  $row["email"]. "></td></tr>
                    <tr><td>Password</td><td><input type='text' class='form-control' value=" .  $row["password"]. "></td></tr>
                    <tr><td>Telefono</td><td><input type='text' class='form-control' value=" .  $row["telefono"]. "></td></tr>
                    <tr><td>Codice Fiscale</td><td><input type='text' class='form-control' value=" .  $row["codice_fiscale"]. "></td></tr>
                    <tr><td>Data Nascita</td><td><input type='text' class='form-control' value=" .  $row["data_nascita"]. "></td></tr>
                    <tr><td>Data Registrazione</td><td><input type='text' class='form-control' value=" . $row["data_registrazione"] . " disabled></td></tr>
                  </tbody>
                </table>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                <button type='button' class='btn btn-primary'>Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <button class='btn btn-danger'>$icon_delete</button</td>
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