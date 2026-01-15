<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>QUẢN LÝ KHÁCH SẠN</h2>

    <div class="form-container">
        <form action="admin.php" method="POST">
            <div style="display: flex; gap: 20px;">
                <div>
                    <div class="form-group">
                        <label>Mã phòng</label>
                        <input type="text" name="ma_phong">
                    </div>
                    <div class="form-group">
                        <label>Ngày thuê</label>
                        <input type="date" name="ngay_thue">
                    </div>
                    <div class="form-group">
                        <label>Giá phòng</label>
                        <input type="text" name="gia_phong">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label>Tên phòng</label>
                        <input type="text" name="ten_phong">
                    </div>
                    <div class="form-group">
                        <label>Ngày trả</label>
                        <input type="date" name="ngay_tra">
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <button type="submit" name="add" class="btn-submit">Thêm mới</button>
            </div>
        </form>
    </div>
  <table border="1" style="width: 100%; border-collapse: collapse; text-align: center; margin-top: 20px;">
    <thead>
        <tr >
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
                        <a href='xoa.php?id=" . $hang['MaPhong'] . "';'>Xóa</a> | 
                        <a href='sua.php?id=" . $hang['MaPhong'] . "'>Sửa</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Không có dữ liệu trong bảng</td></tr>";
        }
        
        mysqli_close($conn);
    ?>
    </tbody>
</table>
</body>
</html>