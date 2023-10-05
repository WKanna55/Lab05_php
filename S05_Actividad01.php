<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01 Operacionde con PHP</title>
</head>
<body>
    <form method="post" action="">
    Valor 1:<br> <input type="text" name="valor1"><br>
    Valor 2:<br> <input type="text" name="valor2"><br>

    <input type="submit" name="Producto" value="Calcular">
    <input type="reset" name="Cancelar" value="Cancelar">
    </form>
    <?php
        $numero1 = $_POST['valor1'];
        $numero2 = $_POST['valor2'];
        $producto = $numero1 * $numero2;
        echo "El Producto de la operacion es: ".$producto; 
    ?>
</body>
</html>