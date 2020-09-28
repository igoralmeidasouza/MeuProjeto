<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Taboada</title>

</head>
<body>
    <h2>Taboada</h2>
    
    <?php for($i=1;$i<=10;$i++){  ?>
    <?php    for($j=1;$j<=10;$j++){ ?>
    <br>
    <?php    echo($i."*".$j."=".$i*$j); ?>
    <?php } ?>
    <?php } ?>
    
</body>
</html>