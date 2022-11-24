<?php

$gender = ["M" => "Maschio", "F" => "Femmina"];

// function dateFormat (string $date, string $format) {
//   return date_format(date_create_from_format("Y-m-d", $date), $format);
// }

function format_date (string $date) {
  return date("d-M-Y", strtotime($date));
}

function person_age (string $dataNascita) {
  $today = date("Y-m-d");
  $diff = date_diff(date_create($dataNascita), date_create($today));
  return $diff->format("%y");
}

$patente = [
  "Italia" => [
    "A" => 16,  //2006
    "B" => 18,  //2004
    "C" => 21   //2001
  ],
  "Francia" => [
    "A" => 18,  //2004
    "B" => 19,  //2003
    "C" => 20   //2002
  ],
  "USA" => [
    "A" => 16,  //2006
    "B" => 21,  //2001
    "C" => 20   //2002
  ],
  "Giappone" => [
    "A" => 15,  //2007
    "B" => 17,  //2005
    "C" => 18   //2004
  ],
];

$comuni = [
  "ABR" => "Abruzzo",
  "BAS" => "Basilicata",
  "CAL" => "Calabria",
  "CAM" => "Campania",
  "EMR" => "Emilia-Romagna",
  "FVG" => "Friuli Venezia Giulia",
  "LAZ" => "Lazio",
  "LIG" => "Liguria",
  "LOM" => "Lombardia",
  "MAR" => "Marche",
  "MOL" => "Molise",
  "PIE" => "Piemonte",
  "PUG" => "Puglia",
  "SAR" => "Sardegna",
  "SIC" => "Sicilia",
  "TOS" => "Toscana",
  "TAA" => "Trentino-Alto Adige",
  "UMB" => "Umbria",
  "VDA" => "Valle d'Aosta",
  "VEN" => "Veneto",
];

function format_num (int $num) {
  return number_format($num, 2, ",", "'");
}