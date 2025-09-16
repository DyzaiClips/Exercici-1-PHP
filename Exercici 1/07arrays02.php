<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Arrays Associatius</h1>

<?php
    $capitals = [
        'Framce'=>'Paris',
        'Spain'=>'Madrid',
        'Italy'=>'Rome',
        'German'=>'Berlin'
    ]; 

    $capitals['Greek']='Athenas';

    $franceCapital = $capitals['France'];

    echo "<pre>";
    print_r( $capitals );
    echo "</pre>";

    $existeix = in_array('Andorra' , $capitals)? "Andorra esta introduida" : "L'has d'introduir"
?>

</body>

</html>