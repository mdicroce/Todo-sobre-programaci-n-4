<?php phpinfo();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Special Greet</title>
</head>
<body>
    <form action="action.php" method="POST">
        <table align="center">
            <thead>Práctico N° 4.1</thead>
            <tr>
                <th>
                    <h3>Saludando</h3>
                </th>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione un idioma</b></p>
                    <!-- Agrego los labels para que al clickearlos se seleccione el radio -->
                    <input type="radio" id="arg" name="lang" value="es">
                    <label for="arg"> Argentino</label> 

                    <input type="radio" id="eng" name="lang" value="en">
                    <label for="eng"> Ingles</label>

                    <input type="radio" id="por" name="lang" value="pr">
                    <label for="por"> Portugues</label>
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione una acción</b></p>
                    <!-- Agrego los labels para que al clickearlos se seleccione el radio -->
                    <input type="radio" id="hiId" name="msg" value="sayHi">
                    <label for="hiId">Saludar</label>

                    <input type="radio" id="byeId" name="msg" value="sayGoodBye">
                    <label for="byeId">Despedirse</label>

                    <input type="radio" id="otherId" name="msg" value="sayOther"> 
                    <label for="otherId">Otro Mensaje</label>

                    <textarea name="otherMsg" placeholder="Mensaje|Message|Mensagem"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Procesar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>