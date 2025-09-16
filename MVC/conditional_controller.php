<?php

    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['numero'])) {
        $numero = $_POST['numerp'];
        $numerosecret = 1;
        $result = $numerosecret==$numero ? "Perfecte" : "Malament";
        echo $result;
    }   

    ?>
