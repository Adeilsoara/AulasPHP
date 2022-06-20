<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos Get e Post</title>
</head>
<body>
    <?php
        if(isset($_GET['nome'])){
            echo "Informação enviada via Get:".$_GET['nome'] ;
        }

        if(isset($_POST['nome2'])){
            echo "Informação enviada via Post: ".$_POST['nome2'] ;
        }
           
    ?>

    <h1>Método Get</h1>
    <form action="" method="get">
        <input type="text" name="nome" id="">
        <input type="submit" value="Enviar">
    </form>

    <h1>Método Post</h1>
    <form action="" method="post">
        <input type="text" name="nome2" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>