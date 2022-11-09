<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo "Array"; ?></title>
</head>

<body>

    <?php

        //bubble sort
        $array = [1,5,9,8,7,4,6,3,2,0];
        shuffle($array);
        $array_l = count($array);
        echo "<pre>"; print_r($array); echo "</pre>";

        for ($i = 0; $i < $array_l; $i++) {
            for ($j = $i + 1; $j < $array_l; $j++) {
                if ($array[$i] > $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }

        echo "<pre>"; print_r($array); echo "</pre>";

    ?>

</body>

</html>
