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
         $a = new  mysqli("localhost",'root','','db_s5thud2') or die('ket noi that bai');
         if(mysqli_num_rows($BangSV) > 0)
         {
             while($hang = mysqli_fetch_assoc( $BangSV))
             {
                 echo $hang['MaSV'] . "\t" . $hang['HoSV'] . " " . $hang['TenSV'] . "<br>";
             }
         }
    ?>
</body>
</html>