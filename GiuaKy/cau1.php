<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function DTBM($CC, $GK,$Thi)
        {
            return  ($CC*20 + $GK*20 + $Thi*60) / 100 ;
 
        }
            echo(DTBM(8,10,10));
    ?>
</body>
</html>