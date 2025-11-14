
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title>Ghi danh </title>
  <style>
    table{margin:20px auto;width:70%;border-collapse:collapse}
    td{padding:6px;vertical-align:middle}
    .result{width:70%;margin:10px auto;padding:10px;border:1px solid #ccc;background:#f9f9f9}
  </style>
</head>
<body>
<form method="post" action="">
  <table align="center" width="60%">
    <tr><td colspan="6" align="center"><h1>Thông tin ghi danh</h1></td></tr>

    <tr>
      <td>Mã ghi danh</td>
      <td><input type="text" name="ma" required></td>
      <td>(*)</td>
    </tr>

    <tr>
      <td>Họ và chữ lót</td>
      <td><input type="text" name="ho" required></td>
      <td>(*)</td>

      <td>Tên</td>
      <td><input type="text" name="ten" required></td>
      <td>(*)</td>
    </tr>

    <tr>
     <td>Ngày sinh</td>
            <td>
            <input type="text" name="ngaysinh" id="ngaysinh" placeholder="dd/mm/yyyy"> </td>
      <td>(*)</td>

      <td>Giới tính</td>
      <td>
        <label><input type="radio" name="gioitinh" value="Nam" checked> Nam</label>
        <label><input type="radio" name="gioitinh" value="Nữ"> Nữ</label>
      </td>
      <td>(*)</td>
    </tr>

    <tr>
      <td>Email</td>
      <td><input type="email" name="email" required></td>
      <td>(*)</td>

      <td>Điện thoại liên hệ</td>
      <td><input type="text" name="dienthoai" required></td>
      <td></td>
    </tr>

    <tr>
      <td>Ngành đăng ký</td>
      <td>
        <select name="nganh" required>
          <option value="">--Chọn--</option>
          <option value="Lập trình máy tính">Lập trình máy tính</option>
          <option value="Quản trị mạng">Quản trị mạng</option>
          <option value="Quản trị cơ sở dữ liệu">Quản trị cơ sở dữ liệu</option>
          <option value="Thiết kế đồ họa">Thiết kế đồ họa</option>
        </select>
      </td>
      <td>(*)</td>

      <td>Đăng ký túc xá</td>
      <td><input type="checkbox" name="tucxa"></td>
      <td></td>
    </tr>

    <tr>
      <td colspan="6" align="center">
        <button type="submit" style="width:100px">Lưu</button>
      </td>
    </tr>
  </table>
</form>
<?php
function xuat($v){ return htmlspecialchars(trim($v), ENT_QUOTES, 'UTF-8'); }

$luu = $_SERVER['REQUEST_METHOD'] === 'POST';
if ($luu) {
    $ma = xuat($_POST['ma'] ?? '');
    $ho = xuat($_POST['ho'] ?? '');
    $ten = xuat($_POST['ten'] ?? '');
    $ngaysinh = xuat($_POST['ngaysinh'] ?? '');
    $gioitinh = xuat($_POST['gioitinh'] ?? '');
    $email = xuat($_POST['email'] ?? '');
    $dienthoai = xuat($_POST['dienthoai'] ?? '');
    $nganh = xuat($_POST['nganh'] ?? '');
    $tucxa = isset($_POST['tucxa']) ? 'Có' : 'Không';
}
?>

<?php if ($luu): ?>
  <div class="result">
    <h3>Thông tin vừa nhập</h3>
    <p><strong>Mã ghi danh:</strong> <?= $ma ?></p>
    <p><strong>Họ và chữ lót:</strong> <?= $ho ?></p>
    <p><strong>Tên:</strong> <?= $ten ?></p>
    <p><strong>Ngày sinh:</strong> <?= $ngaysinh ?></p>
    <p><strong>Giới tính:</strong> <?= $gioitinh ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Điện thoại:</strong> <?= $dienthoai ?></p>
    <p><strong>Ngành đăng ký:</strong> <?= $nganh ?></p>
    <p><strong>Đăng ký túc xá:</strong> <?= $tucxa ?></p>
  </div>
<?php endif; ?>

</body>
</html>