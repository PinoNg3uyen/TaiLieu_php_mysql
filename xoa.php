<?php
$conn = new mysqli("localhost", "root", "", "db_nguyenmanhcuong");

if ($conn->connect_error) {
    die("ko kt nối đc: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $ma_phong = $_GET['id'];

    $sql = "DELETE FROM tb_quanly WHERE MaPhong = '$ma_phong'";

    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php");
        exit();
    } else {
        echo "lỗi xóa thất bại " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>