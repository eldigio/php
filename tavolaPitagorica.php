<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title><?php echo "Tavola Pitagorica"; ?></title>
</head>

<body class="p-1">

    <table class="table table-sm table-bordered border-danger">
        <?php

            function tabellina($_num) {
                for ($i = 1; $i <= 10; $i++) {
                    echo nl2br("<td class='text-center'>" . $_num * $i . "</td>");
                }
            }

            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>" . tabellina($i) . "</tr>";
            }

        ?>
    </table>

</body>

</html>
