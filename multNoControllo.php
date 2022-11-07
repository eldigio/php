<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo "Multiplo senza controllo"; ?></title>
</head>

<body>

    <?php
        
        //$pari = 1;  //1 + 0     5 * (1+0)
        //$disp = 2;  //1 + 1     5 * (1+1)
        $n = 5;
        $p = 1 + ($n % 2);

        for ($i = $p; $i <= 5*$p; $i = $i + $p) {
            $mult = $n * $i;
            echo $n . "x$i = " . $mult . "<br>";
        }
    ?>

</body>

</html>
