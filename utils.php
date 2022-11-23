<?php

$gender = ["M" => "Maschio", "F" => "Femmina"];

function dateFormat (string $date, string $format) {
  return date_format(date_create_from_format('Y-m-d', $date), $format);
}

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

?>