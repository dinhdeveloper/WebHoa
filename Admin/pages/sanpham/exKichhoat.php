<?php
if(isset($_GET["id"])){
    $maSanPham = $_GET["id"];

    $sql = "UPDATE SanPham SET BiXoa = 1 - BiXoa WHERE MaSanPham = $maSanPham";

    DataProvider::ExecuteQuery($sql);
    DataProvider::ChangeURL("index.php?c=4");
} else {
    DataProvider::ChangeURL("index.php?c=404");
}
?>