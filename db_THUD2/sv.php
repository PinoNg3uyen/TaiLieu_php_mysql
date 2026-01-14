<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
<h1 align="center">Them sinh vien</h1>
    <table class="table table-hover">
        <tr>
            <td><label for="">Nhap ho sinh vien:</label></td>
            <td><input type="text" name="txtHo"></td>
            <td><label for="">Nhap ten sinh vien:</label></td>
            <td><input type="text" name="txtTen"></td>
        </tr>
        <tr>
            <td><label for="">Nhap ngay sinh:</label></td>
            <td><input type="date" name="dtNS"></td>
            <td><label for="">Nhap gioi tinh:</label></td>
            <td><input type="radio" name="ckGT" value="1">Nam<input type="radio" name="ckGT" value="0">Nu</td>
            <td><label for="">Nhap ma lop:</label></td>
            <td><input type="text" name="txtMaLop"></td>
        </tr>
        <tr>
            <th><input type="submit" name="btnThem" value="Them"></th>
        </tr>
    </table>
    <?php
    $CSDL = new mysqli('localhost','root','','db_s5thud2') or die('KT');
        if(isset($_POST["btnThem"]))
        {
            $Ho = $_POST["txtHo"];
            $Ten = $_POST["txtTen"];
            $DS = $_POST["dtNS"];
            if($_POST["ckGT"])
            {
                $GT = $_POST["ckGT"];
            }
            else
            {
                $GT = 0;
            }
            $MaLop = $_POST["txtMaLop"];

            mysqli_query($CSDL,"Insert into tb_sv(HoSV,TenSV,NgaySInh,GT,MaLop) values('$Ho','$Ten','$DS',$GT,'$MaLop')") or die('KT');
        header("location:on.php");
        }
    ?>
    <h1 align="center">Danh sach sinh vien </h1>
    <table class="table table-hover">
        <tr>
            <th>Ma sinh vien</th>
            <th>Ho sinh vien</th>
            <th>Ten sinh vien</th>
            <th>Ngay sinh</th>
            <th>Gioi tinh</th>
            <th>Ma lop</th>
            <th>Chuc nang</th>
        </tr>

        <?php
        $BangSV = mysqli_query($CSDL,'Select * from tb_sv');
query( $CSDL"SET NAMES utf8");   

        if(mysqli_num_rows($BangSV) > 0)
            
        {
            while($hang = mysqli_fetch_assoc($BangSV))
            {
                echo "<tr>";
                echo ("<td>".$hang['MaSV']."</td>");
                echo ("<td>".$hang['HoSV']."</td>");
                echo ("<td>".$hang['TenSV']."</td>");
                echo ("<td>".$hang['NgaySInh']."</td>");
                echo ("<td>".$hang['GT']."</td>");
                echo ("<td>".$hang['MaLop']."</td>");
                echo ("<td><button type='button' class='btn btn-danger'>Xoa</button> <button type='button' class='btn btn-primary'>Sua</button></td>");
                echo "<tr>";
            }
        }
    ?>
    </table>
</form>
</div>
</body>
</html>