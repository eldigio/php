<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>numLettere</title>
</head>

<body class="bg-neutral-400 py-10">
  <div class="bg-neutral-50 container mx-auto border-2 border-black rounded-xl px-5 py-10 flex justify-center items-center flex-col gap-y-10">
    <h1 class="text-3xl">Numeri in lettere (da 0 a 20)</h1>
    <?php

    $num = $_POST["num"];

    $numeri = ["zero", "uno", "due", "tre", "quattro", "cinque", "sei", "sette", "otto", "nove", "dieci", "undici", "dodici", "tredici", "quattordici", "quindici", "sedici", "diciassette", "diciotto", "diciannove", "venti"];

    echo '<p class="text-2xl capitalize">' . $numeri[$num] . "</p>";

    ?>
  </div>
</body>

</html>