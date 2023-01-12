<?php
require_once "../php/config.php";
require_once "../utils.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$email = $_POST["email"];
$password = $_POST["password"];
$telefono = $_POST["telefono"];
$codice_fiscale = $_POST["codice_fiscale"];
// $data_nascita = $_POST["data_nascita"];
// $_POST["data_nascita"] == null ? $data_nascita = null : $data_nascita = $_POST["data_nascita"];
$data_nascita = $_POST["data_nascita"] ?? null;

$sql = "UPDATE
            `studenti`
        SET
            `nome` = :nome,
            `cognome` = :cognome,
            `email` = :email,
            `telefono` = :telefono,
            `codice_fiscale` = :codice_fiscale,
            `data_nascita` = :data_nascita
        WHERE
            id = :id";


$sth = $conn->prepare($sql);
$res = $sth->execute([
    "nome" => $nome,
    "cognome" => $cognome,
    "email" => $email,
    "telefono" => $telefono,
    "codice_fiscale" => $codice_fiscale,
    "data_nascita" => $data_nascita,
    "id" => $id
]);

header("location: index.php");
