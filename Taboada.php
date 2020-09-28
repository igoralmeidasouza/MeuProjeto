<!DOCTYPE html>
<html>

<title>Taboada</title>

<body>
<h1>Taboada do 1 ao 10</h1>
<?php
    $a = 0;
        while ($a <= 10) {
            for ($i = 0; $i <= 10;) {
            
                echo "$a * $i = ".$a * $i. "<br>";
            $i++; }
                echo "<br>";
        $a++;
        }
?>
</body>
</html>