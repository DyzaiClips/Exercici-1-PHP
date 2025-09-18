<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EL meu primer Formulari</h1>

    <form action="" method="get">
        <p>
            <label for="">Escriu un Numero</label>
            <input type="text" name="numero">
        </p>
        <input type="submit" value="Fes Clic per enviar">

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['numero'])) {
        $numero = $_GET['numerp'];
        echo"el numero que has enviat es el $numero";
        
    }   

    ?>
</body>
</html>