<?php
    $parameters = array();

    if ($_SERVER['REQUEST_METHOD'] == "POST")
        $parameters = $_POST;
    else
        $parameters = $_GET;

    foreach($parameters as $parameterName=>$parameterValue)
    {
        echo $parameterName . ': ' . $parameterValue . '<br>' ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./baseStyle.css">
</head>
<style>
    *{
        text-align:center;
    }
    .externalBox{
        margin: 0 auto;
        width: 50%;
        border: solid 1px #384047;
        padding: 30px;
    }
    .externalBox table{
        width: 100%;
    }
    th, td , theader{
        padding:10px;
    }
    .cabecera{
        background-color: #5fcf80;
        color: #384047;
        width: 100%;
        
    }
</style>
<body>
    <div class="externalBox">
        <table>
            <?php 
                echo '<tr> <theader class="cabecera"> YOUR BASIC INFO </th> </tr>';
                foreach ($parameters as $key => $value) {
                    
                    echo '<tr> <td> ' .$key . '</td>' ;
                    switch ($key)
                    {
                        case "sex":
                            if ($value != "m" || $value != "f")
                            {
                                echo '<td> [ Unspecified ] </td>';
                            }
                        break;
                        default :
                            if ($value)
                            {
                                echo '<td>' . $value . '</td>';
                            }
                            else{
                                echo '<td> [ Unspecified ] </td>';
                            }
                        break;
                    }
                }
            ?>
        </table>
        <a href="index.php">Go back</a>
    </div>
</body>
</html>