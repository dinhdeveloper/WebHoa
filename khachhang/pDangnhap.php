<?php
$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$sql = "SELECT MaKhachHang,HoTen,SoDienThoai FROM khachhang WHERE MaKhachHang = $id";
$result = DataProvider::ExecuteQuery($sql);
?>
<div id="login-page">
    <div class="container">
        <form class="form-login" action="index.php?c=10&k=201" method="post">
            <h2 class="form-login-heading"><strong>ĐĂNG NHẬP</strong></h2>
            <input type="hidden" name="id">
            <div class="login-wrap">
                <input type="text" name="sodienthoai" class="form-control" id="sodienthoai"
                       placeholder="Số Điện Thoại" autofocus>
                <br>
                <div id="kiemtrauser"></div>
                <br>
                <input type="password" name="matkhau" class="form-control" id="password" placeholder="Mật khẩu"><br>
                <div id="kiemtrapass"></div>
                <br>
                <button type="submit" class="btn btn-primary" name="login">Đăng Nhập</button>
                <a href="../../WebHoa/khachhang/pTaotaikhoan.php">
                    <button type="button" class="btn btn-primary" name="">Đăng Ký</button>
                </a>
            </div>
        </form>
    </div>
</div>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.backstretch.min.js"></script>
