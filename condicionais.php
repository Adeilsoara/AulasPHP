<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Idade: <input type="number" name="idade" /><br />
        <button type="submit" name="submit" value="Testar">Testar</button>
    </form>

    <?php
        $idade = $_POST["idade"];
        echo "<br>";
        echo ($idade < 18) ? "Não pode dirigir" : "Já pode dirigir";
    ?>

</body>

</html>