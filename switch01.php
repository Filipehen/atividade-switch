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
        <label for="time">Digite Seu time:</label>
        <input type="text" id="time" name="time">
        <input type="submit" value="Enviar">
    </form>


    <?php
     if(isset ($_POST['time'])) {
     $time = $_POST['time'];

    switch ($time) {

        case "flamengo":
            echo " seu time é o Flamengo";
            break;
            case "atletico":
                echo " seu time é o Atletico";
                break;
                case "palmeiras":
                    echo " seu time é o Palmeiras";
                    break;
                    case "santos":
                        echo " seu time é o Santos";
                        break;
                     default:
                     echo "Seu time não existe";
    }
     }
    ?>
</body>
</html>