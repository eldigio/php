<?php
require_once "../php/config.php";
require_once "../utils.php";

$sql = "SELECT * FROM studenti";
$sth = $conn->prepare($sql);
$res = $sth->execute();
// dd($result->fetch_assoc());

$users = $sth->fetchAll();
// pp($users);
?>

<?php foreach ($users as $user) : ?>
  <tr>
    <?php if ($user->id == $_GET["id"]) : ?>
      <form action="updateStudente.php" method="post">
        <td><input type="number" class="form-control" name="id" value="<?= $user->id ?>"></td>
        <td><input type="text" class="form-control" name="nome" value="<?= $user->nome ?>"></td>
        <td><input type="text" class="form-control" name="cognome" value="<?= $user->cognome ?>"></td>
        <td><input type="email" class="form-control" name="email" value="<?= $user->email ?>"></td>
        <td><a class="btn btn-danger fs-6 text-nowrap w-100" href="changePasswordStudente.php?id=<?= $user->id ?>">Change Password</a></td>
        <td><input type="text" class="form-control" name="telefono" value="<?= $user->telefono ?>"></td>
        <td><input type="text" class="form-control" name="codice_fiscale" value="<?= $user->codice_fiscale ?>"></td>
        <td><input type="text" class="form-control" name="data_nascita" value="<?= $user->data_nascita ?>"></td>
        <td><?= $user->data_registrazione ?></td>
        <td><button class="btn btn-primary">Save</td>
        <td><a class="btn btn-secondary" href="/admin" role="button"><?= $icon_back ?></td>
        <td><input type="hidden" name="id" value="<?= $user->id ?>"></td>
      </form>
    <?php endif ?>
    <?php if (isset($_GET["id"]) || $user->id !== $_GET["id"]) : ?>
      <td><?= $user->id ?></td>
      <td><?= $user->nome ?></td>
      <td><?= $user->cognome ?></td>
      <td><?= $user->email ?></td>
      <td><?= $user->password ?></td>
      <td><?= $user->telefono ?></td>
      <td><?= $user->codice_fiscale ?></td>
      <td><?= $user->data_nascita ?></td>
      <td><?= $user->data_registrazione ?></td>
      <td><a class="btn btn-warning" href="index.php?id=<?= $user->id ?>" role="button"><?= $icon_edit ?></a></td>
      <td><a class="btn btn-danger" href="deleteStudente.php?id=<?= $user->id ?>" role="button"><?= $icon_delete ?></a></td>
    <?php endif ?>
  </tr>
<?php endforeach ?>

<!--
  // echo '<form action="updateStudente.php" method="post">';
  // echo '<td><input type="number" class="form-control" name="id" value="' . $row['id'] . '"></td>';
  // echo '<td><input type="text" class="form-control" name="nome" value="' . $row['nome'] . '"></td>';
  // echo '<td><input type="text" class="form-control" name="cognome" value="' . $row['cognome'] . '"></td>';
  // echo '<td><input type="email" class="form-control" name="email" value="' . $row['email'] . '"></td>';
  // echo '<td><a class="btn btn-danger fs-6 text-nowrap w-100" href="changePasswordStudente.php?id=' . $row['id'] . '" role="button">Change Password</a></td>';
  // echo '<td><input type="text" class="form-control" name="telefono" value="' . $row['telefono'] . '"></td>';
  // echo '<td><input type="text" class="form-control" name="codice_fiscale" value="' . $row['codice_fiscale'] . '"></td>';
  // echo '<td><input type="text" class="form-control" name="data_nascita" value="' . $row['data_nascita'] . '"></td>';
  // echo '<td>' . $row['data_registrazione'] . '</td>';
  // echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
  // echo '<td><a class="btn btn-secondary" href="/admin" role="button">' . $icon_back . '</a></td>';
  // echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
  // echo '</form>';
  // } else { //else to display data
  // echo "<td>" . $row["id"] . "</td>";
  // echo "<td>" . $row["nome"] . "</td>";
  // echo "<td>" . $row["cognome"] . "</td>";
  // echo "<td>" . $row["email"] . "</td>";
  // echo "<td>" . $row["password"] . "</td>";
  // echo "<td>" . $row["telefono"] . "</td>";
  // echo "<td>" . $row["codice_fiscale"] . "</td>";
  // echo "<td>" . $row["data_nascita"] . "</td>";
  // echo "<td>" . $row["data_registrazione"] . "</td>";
  // echo '<td><a class="btn btn-warning" href="index.php?id=' . $row['id'] . '" role="button">' . $icon_edit . '</a></td>';
  // echo '<td><a class="btn btn-danger" href="deleteStudente.php?id=' . $row['id'] . '" role="button">' . $icon_delete . '</a></td>';
  // }
--->