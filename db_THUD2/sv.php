<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <form action="" method="post">
        <h3>Thêm sinh viên mới</h3>
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <label class="form-label">Họ sinh viên</label>
                <input type="text" name="txtHo" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Tên sinh viên</label>
                <input type="text" name="txtTen" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Giới tính</label><br>
                <input type="radio" name="rdGT" VALUES="1" checked> Nam 
                <input type="radio" name="rdGT" VALUES="0"> Nữ
            </div>   
            <div class="col-md-4">
                <label class="form-label">Nhập mã lớp</label>
                <input type="text" name="txtMaLop" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Nhập ngày sinh</label>
                <input type="date" name="dtNS" class="form-control" required>
            </div>
            <div class="col-12">
                <button type="submit" name="btnThem" class="btn btn-primary">Thêm mới</button>
            </div>
        </div>

        <hr>
        <h1 class="mb-4">Danh sách sinh viên</h1>
        <table class="table table-hover table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Họ sinh viên</th>
                    <th>Tên sinh viên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Mã lớp</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $a = new mysqli("localhost", 'root', '', 'db_lop') or die('Kết nối thất bại');
                mysqli_query($a, "SET NAMES UTF8");

                if (isset($_POST['btnThem'])) {
                    $Ho = $_POST['txtHo'];
                    $Ten = $_POST['txtTen'];
                    $NgaySinh = $_POST['dtNS']; 
                    $GT = isset($_POST['rdGT']) ? $_POST['rdGT'] : 0;
                    $MaLop = $_POST['txtMaLop'];

                    $LenhChen = "INSERT INTO tb_sv (HoSV, TenSV, NgaySinh, GT, MaLop) 
                                 VALUES ('$Ho', '$Ten', '$NgaySinh', '$GT', '$MaLop')";
                    
                    if (mysqli_query($a, $LenhChen)) {
                    } else {
                        echo "<div class='alert alert-danger'>Lỗi: " . mysqli_error($a) . "</div>";
                    }
                }

                $BangSV = mysqli_query($a, "SELECT * FROM tb_sv");
                if (mysqli_num_rows($BangSV) > 0) {
                    while ($hang = mysqli_fetch_assoc($BangSV)) {
                        echo "<tr>";
                        echo "<td>" . $hang['MaSV'] . "</td>";
                        echo "<td>" . $hang['HoSV'] . "</td>";
                        echo "<td>" . $hang['TenSV'] . "</td>";
                        echo "<td>" . $hang['NgaySInh'] . "</td>";
                        echo "<td>" . ($hang['GT'] == 1 ? "Nam" : "Nữ") . "</td>";
                        echo "<td>" . $hang['MaLop'] . "</td>";
                        echo "<td>
                                <a href='#' class='btn btn-sm btn-warning'>Sửa</a>
                                <a href='#' class='btn btn-sm btn-danger'>Xóa</a>
                              </td>";
                        echo "</tr>"; 
                    }
                } else {
                    echo "<tr><td colspan='7'>Không có dữ liệu</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </form>
</div>
</body>
</html>