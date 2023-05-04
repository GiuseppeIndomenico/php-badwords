<?php
$par = trim($_POST["par"]);
$cen = trim($_POST["cen"]);
$parCen = str_replace($cen, "***", $par);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Scrittura</title>
</head>

<body class="bg-dark text-light">
    <div class="d-flex align-items-center justify-content-center mt-5 flex-column">


        <h1>
            <?php echo $parCen ?>
        </h1>
        <p class="text-danger">
            lunghezza frase: <?php echo strlen($parCen) ?>
        </p>
    </div>
</body>

</html>