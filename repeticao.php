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
        <label for="valor1">Digite o seu numero:</label>
        <input type="text" id="valor1" name="valor1">
        <input type="submit" value="Enviar">
    </form>

    <?php 
    if($_POST){
        $valor1 = $_POST['valor1'];

        for($i = 1; $i <= 10; $i++) {
            echo $valor1 . " X " . $i . " = " . $valor1 * $i;
            echo'<br>';


}
break;
switch ($valor1) {
case 1:
    echo "voce esta na tabuadada:" . $valor1


}
    }
    ?>


</body>
</html>