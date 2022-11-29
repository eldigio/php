<?php
require_once "utils.php";

$html1 = "";
$html2 = "";

$arr = [];
$arrName = [];
$arrValue = [];
$arrItems = [];
$filterArr = [array_keys($items["item 1"])];
// getting all names and values(can be duplicate)
foreach ($items as $key => $item) {
  $arrItems[] = $item;
  foreach ($item as $name => $value) {
    $arrName[] = $name;
    $arrValue[] = $value;
  }
}

// loop for group by names
for ($i = 0; $i < count($arrName); $i++) $arr[$arrName[$i]][] = $arrValue[$i];
$newArr = [];
// formatting keys and values from grouped array as values with their sum, putting in html  
foreach ($arr as $key => $value) {
  $newArr[$key] = array_sum($arr[$key]);
  $html1 .= $key . ": " . array_sum($arr[$key]) . "\n";
}


echo "<pre>";
// print_r(array_diff_key($arrNameUnique, $arrItems[0]));
print_r($filterArr);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
      defer
    ></script>
    <title>form</title>
  </head>

  <body>
    <div class="container">
      <h1 class="my-4">Totali per ogni materia prima</h1>
      <pre><?= $html1 ?></pre>
      <h1 class="my-4">Elenco dei materiali per tipo di composizione</h1>
      <pre><?= $html2 ?></pre>
    </div>
  </body>
</html>