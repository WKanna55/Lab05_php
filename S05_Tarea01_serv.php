<?php
    $hijos= $_POST['num_hijos'];
    $total_ventas = $_POST['total_vendido'];
    $sueldo_basico = 600;
    $bonificacion = $hijos * 50;
    $comision_ventas = $total_ventas * 0.075;
    $sueldo_bruto = $sueldo_basico + $comision_ventas
                    + $bonificacion;
    $descuento = $sueldo_bruto * 0.11;
    $sueldo_neto = $sueldo_bruto - $descuento;
    $mensaje = "La comision es: " . $comision_ventas." - \n
    La bonificacion es: " . $bonificacion . " - \n
    El sueldo bruto es: " . $sueldo_bruto . " - \n
    El descuento efectuado es: " . $descuento . " - \n
    El sueldo neto es: " . $sueldo_neto . "\n";

    echo $mensaje;
?>