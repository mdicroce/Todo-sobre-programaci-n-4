<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Activity.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad">
        <label for="sexo">Sexo</label>
        <input type="text" name="sexo" id="sexo">
        <button type="submit">Send</button>
    </form>

    <?php 
        $total_sale = 0;
        $type_sale = "";
        if ($total_sale < 200){
            if ($type_sale == "mascotas")
            {
                echo "No se puede realizar el env&iacute;o.";
            }
            else{
                echo "Los gastos de env&iacute;o son 80 pesos.";
            }
        }
        else if($total_sale >= 200 && $total_sale < 600)
        {
            echo "Los gastos de env&iacute;o son 80 pesos.";
        }
        else{
            echo "Los gastos de env&iacute;o son gratuitos.";
            if ($total_sale > 2000)
            {
                echo "Codigo de descuento: " . "CODEDESC33";
            }
        }
    ?>
    <?php 
        $a = 0;
        $b = 0;
        $c = 0;
        $d = 0;
        echo var_dump(mayorDeTodos(100,99,9,11));
        function mayorDeTodos($a, $b, $c, $d){
            if ($a > $b)
            {
                if($a > $c)
                {
                    if($a >$d){
                        return $a;
                    }
                    else
                    {
                        return $d;
                    }
                }
                else{
                    if ($c > $d) {
                        return $c;
                    }
                    else{
                        return $d;
                    }
                }
            }
            else
            {
                if ($b > $c) {
                    if ($b > $d)
                    {
                        return $b;
                    }
                    else{
                        return $d;
                    }
                }
                else
                {
                    if ($c > $d)
                    {
                        return $c;
                    }
                    else {
                        return $d;
                    }
                }

            }
        }
    ?>
</table>
</body>
</html>