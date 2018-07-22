<?php
if (isset($_POST['login'])) {
    $id = $_POST["id"];
    $phone = $_POST['sodienthoai'];
    $pass = $_POST['matkhau'];
    //$sql = "SELECT MaNhanVien FROM nhanvien WHERE TenDangNhap='$ddminusername' AND MatKhau='$pass' ";
    $sql = "SELECT * FROM khachhang WHERE SoDienThoai = '$phone' AND MatKhau = '$pass'";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
    if ($row > 0) {
        $extra = "index.php";
        $_SESSION['SHoTenKH'] = $row['HoTen'];
        $_SESSION['SDiaChiKH'] = $row['DiaChi'];
        $_SESSION['SSodienthoaiKH'] = $row['SoDienThoai'];
        $_SESSION['SMaKhachHangKH'] = $row['MaKhachHang'];
        echo "<script>window.location.href='" . $extra . "'</script>";
        exit();
    } else {
        echo '<script>alert("Vui lòng nhập đủ trường thông tin")</script>';
//        $_SESSION['action1'] = "Số điện thoại hoặc mật khẩu sai";
        $extra = "index.php?c=10&k=1";
        echo "<script>window.location.href='" . $extra . "'</script>";
        exit();
    }
}

?>