<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lógica de programação</title>
</head>
<body>
    <h2>Informe o valor em Metros</h2>
    <form action="calculo.php" method="POST">


        <input type="number" name="numero" id="numero">

        <select name="opcao" id="opcao_select" >
            <option value="m">M</option>
            <option value="mm">mm</option>
            <option value="cm">Cm</option>
            <option value="km">Km</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["opcao"])  && isset($_POST["numero"])) {
            $valorDoBotao = $_POST["opcao"];
            $numero = $_POST["numero"];
        }
    }

?>