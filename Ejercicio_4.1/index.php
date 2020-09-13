<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Special Greet</title>
</head>
<body>
    <form action="funcionality.php" method="get">
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
                    <input type="radio" id="argID" name="lang" value="arg" required> 
                    <label for="argID">Argentino</label> 
                    <input type="radio" id="engID" name="lang" value="ing" required> 
                    <label for="engID">Ingles</label> 
                    <input type="radio" id="PorID" name="lang" value="port" required>
                    <label for="PorID">Portugues </label> 
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione una acción</b></p>
                    <input type="radio" name="action" id="hiID" value="sayHi" required> 
                    <label for="hiID">Saludar</label>
                    <input type="radio" name="action" id="byeID" value="sayBye" required>
                    <label for="byeID">Despedirse</label> 
                    <input type="radio" id="aID" name="action" value="getMessage" required>
                    <label for="aID">Otro Mensaje</label> 
                    <textarea name="message" placeholder="Mensaje|Message|Mensagem" value=""></textarea>
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