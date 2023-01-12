<?php

$connection = new mysqli("127.0.0.1", "root", "", "cyber_valley");

$conn = new PDO("mysql:host=127.0.0.1;dbname=cyber_valley", "root", "");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
