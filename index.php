<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>prova</title>
</head>

<body class="bg-dark text-light">
    <div class="d-flex align-items-center justify-content-center mt-5">

        <form action="scrivi.php" method="post">
            <label for="par">scrivi paragrafo qui</label>
            <input placeholder='paragrafo qui' type="text" name="par">
            <label for="cen"> scrivi la Parola da censurare</label>
            <input placeholder='censura qui' name='cen' type="text">
            <button class="btn btn-success">Stampa</button>
            <button class="btn btn-danger" type="reset">annulla</button>
        </form>
    </div>
</body>

</html>