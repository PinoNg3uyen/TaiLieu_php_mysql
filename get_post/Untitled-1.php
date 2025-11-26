<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        NhapTen <input type="text" name="tt" value=""/> <br/>
        <input type="submit" name="btnGiui" value="Giui"/>
    </form>
</body>
<?php session_start();
if (isset($_POST['save-session']))
{
    $_SESSION['tt'] = $_POST['btnGiui'];
}
?>
</html>