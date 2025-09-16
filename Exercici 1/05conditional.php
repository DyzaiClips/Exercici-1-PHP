<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EL meu primer Formulari</h1>

    <form action="" method="post">
        <p>
            <label for="">Escriu un Numero</label>
            <input type="num" name="numero">
        </p>
        <input type="submit" value="Fes Clic per enviar">

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['numero'])) {
        $numero = $_POST['numerp'];
        $numerosecret = 1;
        $result = $numerosecret==$numero ? "Perfecte" : "Malament";
        echo $result;
    }   

    ?>
</body>
</html>