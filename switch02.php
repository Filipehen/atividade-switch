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
        <label for="mesesdoano">Digite o mes:</label>
        <input type="text" id="mes" name="mes">
        <input type="submit" value="Enviar">
    </form>

    <?php 
    if(isset ($_POST['mes'])) {
    $mes = $_POST['mes'];

 
    switch ($mes) {
    case "janeiro":
    echo "O mes é janeiro";
    break;

    case "fevereiro":
        echo "O mes é fevereiro";
        break;
    case "março":
        echo "O mes é março";
        break;

        case "abril":
         echo "O mes é abril";
         break;

         case "maio":
          echo "O mes é maio";
          break;

          case "junho":
            echo "O mes é junho";
            break;

            case "julho":
             echo "O mes é julho";
             break;

             case "agosto":
              echo "O mes é agosto";
              break;

              case "setembro":
               echo "O mes é setembro";
               break;

               case "outubro":
                echo "O mes é outubro";
                break;

                case "novembro":
                 echo "O mes é novembro";
                 break;

                 case "dezembro":
                  echo "O mes é dezembro";
                  break;

                  echo "O mes é invalido";
                  break;

                  default:
                  echo "O mes é invalido";
    }
}
    ?>


</body>
</html>