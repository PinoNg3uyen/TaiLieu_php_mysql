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
                <button type="submit" name="add" class="btnThem">Thêm mới</button>
            </div>
        </form>
    </div>
 