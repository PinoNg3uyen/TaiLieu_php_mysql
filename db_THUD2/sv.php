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
    <h1>Danh sach sinh vien </h1>
    <table class="table table-hover">
        <tr>
            <th>Ma sinh vien</th>
            <th>Ho sinh vien</th>
            <th>Ten sinh vien</th>
            <th>Ngay sinh</th>
            <th>Gioi tinh</th>
            <th>Ma lop</th>
            <th> chuc nag </th>
            
        </tr>

        <?php
         $a = new  mysqli("localhost",'root','','db_ngmanhcuong') or die('ket noi that bai');
         mysqli_query ($a, "SET NAMES 'UTF8'");
                 $BangSV = mysqli_query($a,'Select * from tb_sv');
                 
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
                echo "<tr>";
            }
        }
    ?>

        
    </table>
    <tr>
        <td><label for="">Nhap ho sinh vien</label></td>
        <td> <input type="text" name="txtHo"></td>
        <td><label for="">Nhap ten  sinh vien</label></td>
        <td> <input type="text" name="txtHo"></td>
        <td><label for="">Nhap gioi tinh</label></td>
        <td> <input type="checkbox" name="txtsinhvien"></td>
    </tr>
        
</form>
</div>
</body>
</html>