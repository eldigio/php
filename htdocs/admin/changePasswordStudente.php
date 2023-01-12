<?php
require_once "../php/config.php";
require_once "../utils.php";
checkStudenti();
?>

<?php require_once "../partials/head.php" ?>

<body class="mx-5 px-5">
  <div class="container-fluid d-flex flex-column gap-5">
    <!-- Form change password -->
    <form action="updatePasswordStudente.php?id=<?= $_GET["id"] ?>" method="post">
      <h1 class="fs-3 my-5">Change Password</h1>
      <div class="my-5">
        <label for="currentPassword" class="form-label">Current Password</label>
        <input type="currentPassword" name="currentPassword" class="form-control">
      </div>
    </form>
  </div>
</body>
<?php require_once "../partials/foot.php" ?>