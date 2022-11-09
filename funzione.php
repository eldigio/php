<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo "Funzione" . date(" d/m/Y G:i:s");    //date("r")?></title>
</head>

<body>

    <?php

        function potenza ($base, $esponente) {
            $totale = 1;
            for ($i = 0; $i < $esponente; $i++) {
                $totale *= $base;
            }
            return $totale;
        }

        echo nl2br("Funzione Potenza\n");
        $a = 2;
        $b = 8; 
        echo nl2br("$a^$b = " .  potenza($a, $b) . "\n");

        echo nl2br("Potenze di un byte\n");
        $base = 2;
        for ($i = 8; $i >= 0; $i--) {
            echo potenza($base, $i) . " ";
        }


        function molt_array($array, $molt = 2) {
            $new_array = [];
            foreach($array as $e) {
                $new_array[] = $e * $molt;
            }
            return $new_array;
        }

        /* print_r(molt_array([1,2,3,4,5], 5)); */

    ?>

</body>

</html>
