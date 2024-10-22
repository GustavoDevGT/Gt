<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Média</title>
    <style>
         body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: gray;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            width:30%;
            height:30%;
            background-color: white;
            margin: 2%;
            padding: 1%;
            border-radius: 5%;
        }
        form{
            display: flex;
            flex-direction: column;
        }
        h2{
            padding: 0;
            margin: 0;
        }
        form{
            text-align: center;
            margin: 5%;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h2>Verificação de Média</h2>
        <form method="post" action="">
            <label for="nota1">Nota 1:</label>
            <input type="number" name="nota1" step="0.01" id="nota1" required><br>
            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" step="0.01" id="nota2" required><br>
            <label for="nota3">Nota 3:</label>
            <input type="number" name="nota3" step="0.01" id="nota3" required><br>
            <input type="submit" value="Calcular Média">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valor1 = $_POST["nota1"];
                $valor2 = $_POST["nota2"];
                $valor3 = $_POST["nota3"];    
                $media = ($valor1 + $valor2 + $valor3) / 3;
            if ($media >= 7){
                echo "A media foi : $media e esta acima do esperado";
            }
            else{
                echo "A media foi : $media e esta abaixo do esperado";
            }
        }
        ?>
    </div>
</body>
</html>
