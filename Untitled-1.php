<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khách sạn</title>
</head>
<body>
    <h2>QUẢN LÝ KHÁCH SẠN</h2>

    <div class="form-container">
        <form action="" method="POST">
            <div style="display: flex; gap: 20px;">
                <div>
                    <div class="form-group">
                        <label>Mã phòng</label>
                        <input type="text" name="txtMaPhong">
                    </div>
                    <div class="form-group">
                        <label>Ngày thuê</label>
                        <input type="date" name="dtNgayThue">
                    </div>
                    <div class="form-group">
                        <label>Giá phòng</label>
                        <input type="text" name="txtGiaPhong">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label>Tên phòng</label>
                        <input type="text" name="txtTenPhong">
                    </div>
                    <div class="form-group">
                        <label>Ngày trả</label>
                        <input type="date" name="dtNgayTra">
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <button type="submit" name="btnThem">Thêm mới</button>
            </div>
        </form>
    </div>

    <table border="1" style="width: 100%; border-collapse: collapse; text-align: center; margin-top: 20px;">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Phòng</th>
                <th>Tên Phòng</th>
                <th>Ngày Thuê</th>
                <th>Ngày Trả</th>
                <th>Giá Phòng</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $conn = new mysqli("localhost", "root", "", "db_nguyenmanhcuong") or die("Kết nối thất bại");
            mysqli_query($conn, "SET NAMES 'UTF8'");

            // Xử lý thêm dữ liệu
            if (isset($_POST['btnThem'])) {
                $MaPhong = $_POST['txtMaPhong'];
                $TenPhong = $_POST['txtTenPhong'];
                $NgayThue = $_POST['dtNgayThue'];
                $NgayTra = $_POST['dtNgayTra'];
                $GiaPhong = $_POST['txtGiaPhong'];

                if (!empty($MaPhong)) {
                    $LenhChen = "INSERT INTO tb_quanly(MaPhong, TenPhong, NgayThue, NgayTra, GiaPhong) VALUES('$MaPhong', '$TenPhong', '$NgayThue', '$NgayTra', '$GiaPhong')";
                    mysqli_query($conn, $LenhChen) or die("Thêm thất bại");
                    
                  
                    echo "<script>window.location.href='admin.php';</script>";
                    exit;
                }
            }

            // Hiển thị dữ liệu
            $QL = mysqli_query($conn, "SELECT * FROM tb_quanly");
            if (mysqli_num_rows($QL) > 0) {
                while ($hang = mysqli_fetch_assoc($QL)) {
                    echo "<tr>";
                    echo "<td>" . $hang['STT'] . "</td>"; 
                    echo "<td>" . $hang['MaPhong'] . "</td>";
                    echo "<td>" . $hang['TenPhong'] . "</td>";
                    echo "<td>" . $hang['NgayThue'] . "</td>";
                    echo "<td>" . $hang['NgayTra'] . "</td>";
                    echo "<td>" . $hang['GiaPhong'] . "</td>";
                    echo "<td>
                            <a href='xoa.php?id=" . $hang['MaPhong'] . "'>Xóa</a> | 
                            <a href='sua.php?id=" . $hang['MaPhong'] . "'>Sửa</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Không có dữ liệu trong bảng</td></tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>