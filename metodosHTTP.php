<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if (isset($_GET['name'])) {
        echo ("<h3> parametro enviado por get: ".$_GET['name']. "</h3>") ;
    }
    
    if (isset($_POST['name'])) {
        echo ("<h3> parametro enviado por post:". $_POST['name']. "</h3>");
    }
    
    ?>
    <h1>Usando Get</h1>
    <form action="" method="get">
        <input type="text" name="name" id="">
        <input type="submit" value="Submeter">
    </form>

    <h1>Usando Post</h1>
    <form action="" method="post">
        <input type="text" name="name" id="">
        <input type="submit" value="Submeter">
    </form>
</body>
</html>