<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
</head>
<body>
    <?php
    $voto = $_GET['voto'];

    if (!isset($_COOKIE['voto'])) {
        
        setcookie("voto", $voto,time()+3600*24*31);
 
        $msg = "Obrigado por votar";

    }
    else{

        $msg = "Você já votou uma vez.";
        
    }
    echo "Você votou no: ",$voto;
    echo "<br><br>";
    echo $msg;

    ?>
</body>
</html>