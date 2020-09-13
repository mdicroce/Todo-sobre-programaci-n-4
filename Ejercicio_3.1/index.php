<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejercicio 1</h1>
    <?php
        $name = 'juan.maria.pepe.andrea.jorgelina.cecilia';
        $nombresSeparados = explode(".",$name);
        echo var_dump($nombresSeparados) . "<br>";
        sort($nombresSeparados);
        echo var_dump($nombresSeparados) . "<br>";
        $newArray = array();
        foreach ($nombresSeparados as $value) {
            ucfirst($value);
            array_unshift($newArray,$value);
        }
        echo '<b>$newArray</b>' . var_dump($newArray) . "<br>"  ;
        $c_newArray = count($newArray);
        $keys = array();
        for ($i = 0; $i < $c_newArray ; $i++)
        {
            array_unshift($keys,$i);
        }
        $arrayAssociative = array_combine($keys,$newArray);

        echo "<br>" . var_dump($arrayAssociative);

        
    ?>
<h1>Ejercicio 2</h1>
    <?php 
        function ejer2($valorBuscado, $arreglo)
        {
            $bandera = false;
            foreach ($arreglo as $value) {
                if ($value == $valorBuscado)
                {
                    $bandera = true;
                }
            }
            if ($bandera)
            {
                echo "ENCONTRAMOS $valorBuscado en el arreglo";
            }
            else
            {
                echo "Lo sentimos, no existe $valorBuscado en el arreglo";
            }
        }
        ejer2(99,array(2,9,4,1));
    ?>
    <h1>Ejercicio 3</h1>
    <?php 
        function ejer3($keyBuscada, $arreglo)
        {
            $flag = false;
            foreach ($arreglo as $key => $value) {
                if ($keyBuscada == $key){
                    $flag = true;
                    echo $value;
                    return $value;
                }
            }
            if (!$flag)
            {
                echo "no existe una key asociada a $keyBuscada";
            }
        }
        ejer3("3", array(1 => 1, "3" => 3, 2 => 2));
    ?>
    <h1>Ejercicio 4</h1>
    <?php
        function ejer4($array)
        {
            $arregloAux = array();
            foreach ($array as $key => $value){
                array_unshift($arregloAux,$key);
            }
            echo implode(",",$arregloAux);
        }
        ejer4($arrayAssociative);
    ?>
</body>
</html>