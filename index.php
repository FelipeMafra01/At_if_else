<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    $temperatura = $_GET['temp'];
    ?>


<div class="resultado">

<?php 
    
    if ($temperatura < 0){
        echo "congelante";
    }
    elseif($temperatura >= 0 && $temperatura < 15 ){
        echo "muito frio";
    }
    elseif($temperatura >= 15 && $temperatura < 25){
        echo "razoavel";
    }
    else{
        echo "ta muito calor";    
    }

    ?>

</div>

</body>
</html>