<?php
    $precio_base = $_POST['precio_base'];
    $unidades = $_POST['unidades'];

    $precio_nuevo = $precio_base - ($precio_base * 0.05);
    $importe_bruto = $precio_nuevo * $unidades;
    $descuento = $importe_bruto * 0.07;
    $importe_total = $importe_bruto - $descuento;

    $caramelos = $unidades * 2;

    $mensaje = "Nuevo precio de la gaseosa por unidad: " . $precio_nuevo . 
    " - \nImporte de compra: " . $importe_bruto . 
    " - \nImporte de descuento: " . $descuento . 
    " - \nImporte a pagar: " . $importe_total . 
    " - \nCaramelos regalados: " . $caramelos;
    
    echo $mensaje;

?>