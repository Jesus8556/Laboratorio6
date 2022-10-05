<?php
    $precio = $_POST['precio'];
    $cantidad= $_POST['gaseosas'];

    $descuento= (5/100) * $precio;
    $especial = (7/100) * $precio * $cantidad;
    $caramelos = 2 * $cantidad;
    $precionormal = $precio * $cantidad;

    $total =  $precionormal - $descuento - $especial;
    echo "El precio original de la gaseosa es de: " .$precionormal;
    echo "<br>";
    echo "El descuento del importe es de:" .$descuento;
    echo "<br>";
    echo "El descuento especial es de: " .$especial;
    echo "<br>";
    echo "El nuevo precio de la gaseosa es: " .$total;
    echo "<br>";
    echo "El numero de caramelos es de: " .$precionormal;



?>