<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "cyber_valley";

$connection = new mysqli($host, $user, $pass, $db);

if($connection === false) {
  die("error: " . $connection->connect_error);
}