<?php
        $numero1= $_POST['importe'];
        $numero2= $_POST['hijos'];
        $bonificacion = 50 * $numero2;
        $SueldoBruto = $bonificacion + 600 + (7.5 / 100) * $numero1;
        $descuento = (11 / 100) * $SueldoBruto;
        $Total = $SueldoBruto - $descuento;

        echo "El sueldo total es de: " .$Total ;
        echo "<br>";
        echo "El descuento es de: " .$descuento;
        echo "<br>";
        echo "La bonificacion es de: " .$bonificacion;
        echo "<br>";


        

?>