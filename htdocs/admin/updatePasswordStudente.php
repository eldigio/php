<?php
require_once "../php/config.php";
require_once "../utils.php";

pp($_POST);
$currentPassword = $_POST["currentPassword"];
$id = $_GET["id"];

$sql = "UPDATE studenti SET password = :currentPassword where id = :id";
$stmt = $conn->prepare($sql);
$res = $stmt->execute(["currentPassword" => sha1($currentPassword), "id" => $id]);

header("Location: /admin");
