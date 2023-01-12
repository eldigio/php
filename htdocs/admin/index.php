<?php
require_once "../php/config.php";
require_once "../utils.php";
checkStudenti();
?>

<?php require_once "../partials/head.php" ?>

<body class="mx-5 px-5">
  <div class="container-fluid d-flex flex-column gap-5">
    <!-- Table group -->
    <div class="row mt-3">
      <div class="d-flex justify-content-between my-3">
        <h1 class="">Tabella Studenti</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#studentiModal">
          Nuovo Studente
        </button>
        <!-- Modal -->
        <div class="modal fade" id="studentiModal" tabindex="-1" aria-labelledby="studentiModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Inserisci studente + close btn -->
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="studentiModalLabel">Inserisci Studente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <!-- Form(post)-->
              <div class="modal-body">
                <form action="createStudente.php" method="post">
                  <!-- nome -->
                  <div class="input-group my-2">
                    <span class="input-group-text w-25 text-capitalize">nome</span>
                    <input type="text" class="form-control" name="nome" />
                  </div>
                  <!-- cognome -->
                  <div class="input-group my-2">
                    <span class="input-group-text w-25 text-capitalize">cognome</span>
                    <input type="text" class="form-control" name="cognome" />
                  </div>
                  <!-- email -->
                  <div class="input-group my-2">
                    <span class="input-group-text w-25 text-capitalize">email</span>
                    <input type="email" class="form-control" name="email" />
                  </div>
                  <!-- password -->
                  <div class="input-group my-2">
                    <span class="input-group-text w-25 text-capitalize">password</span>
                    <input type="password" class="form-control" name="password" />
                  </div>
                  <!-- codice fiscale -->
                  <div class="input-group my-2">
                    <span class="input-group-text w-25 text-capitalize">codice fiscale</span>
                    <input type="text" class="form-control" name="codice_fiscale" />
                  </div>
                  <!-- data di nascita -->
                  <div class="input-group my-2">
                    <span class="input-group-text w-25 text-capitalize">data nascita</span>
                    <input type="date" class="form-control" name="data_nascita" value="<?php echo date('Y-m-d') ?>" />
                  </div>
                  <!-- close btn + add btn -->
                  <div class="d-flex justify-content-between mt-3">
                    <button type="button" class="btn btn-secondary w-25" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary w-25">Add</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- table to display data -->
      <div class="table-responsive my-5">
        <table class="table table-sm table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Cognome</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Telefono</th>
              <th scope="col">Codice Fiscale</th>
              <th scope="col">Data Nascita</th>
              <th scope="col">Data Registrazione</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody><?php include_once "readStudente.php" ?></tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<?php require_once "../partials/foot.php" ?>
