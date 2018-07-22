<script type="text/javascript" src=../js/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/jquery/jquery-3.3.1.js"></script>
<header id="header">
    <div class="top-header">
        <div class="row">
            <div class="col-md-4">
                <div class="row img-row">
                    <a href="https://facebook.com/canhdinhit" target="_blank"><img
                                src="images/icon/icons8-facebook-30.png"
                                alt=""></a>&nbsp;&nbsp;
                    <a href="#"><img src="images/icon/icons8-instagram-30.png" alt=""></a>&nbsp;&nbsp;
                    <a href="#"><img src="images/icon/icons8-twitter-26.png" alt=""></a>&nbsp;&nbsp;
                </div>
            </div>
            <div class="col-md-4">
                <a href="index.php"><img class="header_img" src="images/banner/FlowerCorner.png"></a>
            </div>
            <div class="col-md-4">
                <form class="form-inline" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm"
                           id="timkiem" aria-label="Search">
                    <div id="nhacloi"></div>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm</button>
                </form>
                <br>
                <div>
                    <a href="index.php?c=10&k=10">
                        <?php
                        if (isset($_SESSION["SHoTenKH"]) == null) {
                            echo '<a href="index.php?c=10&k=1">
                        <img src="images/icon/createaccount.png" alt="" width="40" height="40" style="margin-left: auto">
                    </a>';
                        } else {
                            echo $_SESSION["SHoTenKH"];
                            echo '<a href="index.php?c=10&k=202">
                        <img src="images/icon/exit-128.png" style="width: 40px;height: 40px; margin-right: auto">
                    </a>';
                        }
                        ?>
                    </a>&nbsp;&nbsp;&nbsp;
                    <a href="index.php?c=5">
                        <img src="images/icon/icons8-add-shopping-cart-40.png"
                             style="width: 40px;height: 40px; margin-right: auto">
                    </a>&nbsp;&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>
    <div class="menu-header">
        <ul class="nav justify-content-center" id="menu_top">
            <li class="nav-item">
                <a class="nav-link" href="#">Ý nghĩa loài hoa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Lời chúc hay</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cách cắm hoa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Qùa Tặng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="click()" id="click">Hỗ trợ trực tuyến</a>
            </li>
        </ul>
    </div>
</header>
