<?php
require_once "../php/config.php";
require_once "../utils.php";

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$email = $_POST["email"];
$password = $_POST["password"];
$codice_fiscale = $_POST["codice_fiscale"];

$sql = "INSERT INTO `studenti`(`nome`, `cognome`, `email`, `password`, `codice_fiscale`)
        VALUES ('$nome','$cognome', '$email', '$password', '$codice_fiscale')";
$connection->query($sql);
$connection->close();

header("location: index.php");
