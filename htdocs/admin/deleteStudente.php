<?php
require_once "../php/config.php";
require_once "../utils.php";

$id = $_GET["id"];

$sql = "DELETE FROM studenti where id=$id";

$connection->query($sql);
$connection->close();

header("location: index.php");
