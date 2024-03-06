<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exemplo de switch em PHP</h1>

<form method="POST" action="">
    <label for="diasemana">Digite o dia da semana:</label>
    <input type="text" id="diasemana" name="diasemana">
    <input type="submit" value="Enviar">


</form>
<?php
if(isset ($_POST['diasemana']))  {
    $diasemana = $_POST['diasemana'];
    switch ($diasemana) {
        case "Segunda":
            echo "Você está na segunda-feira";
            break;
        case "Terça":
            echo "Você está na terça-feira";
            break;
        case "Quarta":
            echo "Você está na quarta-feira";
            break;
        case "Quinta":
            echo "Você está na quinta-feira";
            break;
        case "Sexta":
            echo "Você está na sexta-feira";
            break;
        case "Sábado":
            echo "Você está na sábado";
            break;
        case "Domingo":
            echo "Você está na domingo";
            break;
        default:
            echo "Dia inválido";
            break;
    }
}
?>
</body>
</html>