<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<div id="quanlygiohang">
    <h2 style="color: red">Tình Trạng Đơn Hàng</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Đơn Đặt Hàng</th>
            <th scope="col">Tình Trạng Đơn Đặt Hàng</th>
        </tr>
        </thead>

<?php
/**
 * Created by PhpStorm.
 * User: DINHIT
 * Date: 7/22/2018
 * Time: 1:32 PM
 */

$id = $_SESSION["SSodienthoaiKH"];
$sql = "SELECT MaDonDatHang ,MaTinhTrangDonDatHang,TenTinhTrangDonDatHang 
FROM ((SELECT q.MaDonDatHang, q.MaTinhTrangDonDatHang ,m.TenTinhTrangDonDatHang, 
l.SoDienThoai FROM dondathang q, khachhang l, tinhtrangdondathang m 
WHERE q.MaTinhTrangDonDatHang = m.MaTinhTrangDonDatHang AND l.SoDienThoai = '$id') 
UNION (SELECT q.MaDonDatHang, q.MaTinhTrangDonDatHang ,m.TenTinhTrangDonDatHang, 
l.SoDienThoai FROM dondathang q, khachhang l, tinhtrangdondathang m 
WHERE q.MaTinhTrangDonDatHang = m.MaTinhTrangDonDatHang ORDER BY q.MaDonDatHang 
DESC LIMIT 0,1)) t";
$result = DataProvider::ExecuteQuery($sql);
while ($row = mysqli_fetch_array($result)) {
    ?>
            <tr>
                <td scope="col"><?php echo $row["MaDonDatHang"]; ?></td>
                <td scope="col"><?php echo $row["TenTinhTrangDonDatHang"]; ?></td>
            </tr>
    <?php
}
?>
    </table>
    </div>

