<?php 
    $nombreDefault = "Cosme Fulanito";
    $passWordDefault = "strongPassword!";
    $error;
    if (isset($_POST))
    {
        $userName = $_POST["userName"];
        $passWord = $_POST["passWord"];
    
        if ($userName == $nombreDefault)
        {
            if($passWord == $passWordDefault)
            {
                header("location: ./add-bill.php");
            }
            else{
                $error = "Contraseña incorrecta, intente nuevamente";
                include("./index.php");
            }
        }
        else
        {
            $error = "nombre de usuario incorrecto, intente nuevamente";
            include("./index.php");
        }
    }        
    else
    {
        $error = "No fue ingresado bien los datos";
        include("./index.php");
    }        
?>