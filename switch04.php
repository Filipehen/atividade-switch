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
    <label for="profissao">Digite sua profissao:</label>
    <input type="text" id="profissao" name="profissao">
    <input type="submit" value="Enviar">
</form> 

<?php

if(isset ($_POST['profissao'])) {
    $profissao = $_POST['profissao'];
switch ($profissao) {
    case "professor":
        echo "Professor";
        break;

        case "Jogador":
        echo "Jogador";
        break;
        
        case "Estudante":
            echo "Estudante";
            break;
            case "Desenvolvedor":
                echo "Desenvolvedor";
                break;
                default:
                echo "Profissao nao encontrada";
                break;
 


}
}
?>

</body>
</html>