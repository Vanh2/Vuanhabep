    <!-- Header -->
    <header class="header">
        <div class="container-fluid">
            <div class="container-xl">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fisrt">
                            <form name="" action="index.php?controller=search&action=search" method="post">
                                <div class="search">
                                    <i class="bi bi-search"></i>
                                    <input type="search" name="key" placeholder="Tìm kiếm..." autocomplete="off">
                                    <button style="display:none;" id="btn-search" type="submit"></button>
                                </div>
                            </form>
                            <div class="logo">
                                <a href="index.php">
                                    <img src="https://bizweb.dktcdn.net/100/424/911/themes/817776/assets/logo.png?1634223422268"
                                        alt="">
                                </a>
                            </div>
                            <div class="user">
                                <div class="account">
                                    <a href="">
                                        <span>Tài khoản
                                            <i class="bi bi-person"></i>
                                        </span>
                                    </a>
                                    <?php if (isset($_SESSION["customer_email"])) : ?>
                                    <div class="group">
                                        <div class="login">
                                            <a
                                                href="index.php?controller=account&action=login"><?php echo $_SESSION["customer_email"]; ?></a>
                                        </div>
                                        <div class="login">
                                            <a href="index.php?controller=account&action=logout">Đăng xuất</a>
                                        </div>
                                    </div>
                                    <?php else : ?>
                                    <div class="group">
                                        <div class="login">
                                            <a href="index.php?controller=account&action=login">Đăng nhập</a>
                                        </div>
                                        <div class="register">
                                            <a href="index.php?controller=account&action=register">Đăng ký</a>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="cart">
                                    <a href="index.php?controller=cart">
                                        <span>Giỏ hàng
                                            <i class="bi bi-basket"></i>
                                        </span>
                                        <!-- <div class="cart-content">
                                        </div> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr class="divided">
                    </div>
                </div>
                <div class="row-second">
                    <div class="col-lg-3">
                        <div class="menu-left">
                            <div class="title-menu dropdown">
                                <span class="title toggle">Danh mục sản phẩm</span>
                                <i class="bi bi-list"></i>
                            </div>
                            <div class="menu-full">
                                <ul class="menu-full-size ">
                                    <li class="menu-item-left">
                                        <a href="index.php?controller=products&action=category&id=1">Chậu rửa bát</a>
                                    </li>
                                    <li class="menu-item-left">
                                        <a href="index.php?controller=products&action=category&id=2">Vòi rửa bát</a>
                                    </li>
                                    <li class="menu-item-left">
                                        <a href="index.php?controller=products&action=category&id=3">Combo chậu và vòi
                                            rửa</a>
                                    </li>
                                    <li class="menu-item-left">
                                        <a href="index.php?controller=products&action=category&id=5">Tủ sấy bát đĩa</a>
                                    </li>
                                    <li class="menu-item-left">
                                        <a href="index.php?controller=products&action=category&id=7">Máy rửa bát</a>
                                    </li>
                                    <li class="menu-item-left">
                                        <a href="index.php?controller=products&action=category&id=8">Bếp từ</a>
                                    </li>
                                    <li class="menu-item-left">
                                        <a href="index.php?controller=products&action=category&id=9">Máy hút mùi</a>
                                    </li>
                                    <li class="menu-item-left">
                                        <a href="index.php?controller=products&action=category&id=10">Máy lọc nước</a>
                                    </li>
                                    <li class="menu-item-left">
                                        <a href="index.php?controller=products&action=category&id=11">Lò nướng</a>
                                    </li>
                                    <li class="menu-item-left">
                                        <a href="index.php?controller=products&action=category&id=12">Lò vi sóng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="menu-right">
                            <ul class="menu-list">
                                <li class="menu-item-right">
                                    <a href="">Giới thiệu</a>
                                </li>
                                <li class="menu-item-right">
                                    <a href="">Sản phẩm
                                        <i class="bi bi-arrow-down-short"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=1">Chậu rửa
                                                bát</a>
                                        </li>
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=2">Vòi rửa bát</a>
                                        </li>
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=3">Combo chậu và
                                                vòi rửa</a>
                                        </li>
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=5">Tủ sấy bát
                                                đĩa</a>
                                            <i class="bi bi-arrow-right-short"></i>
                                            <ul>
                                                <li>
                                                    <a href="index.php?controller=products&action=category&id=5">Tủ sấy
                                                        bát gia đình</a>
                                                </li>
                                                <li>
                                                    <a href="index.php?controller=products&action=category&id=6">Tủ sấy
                                                        bát công nghiệp</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=7">Máy rửa bát</a>
                                        </li>
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=8">Bếp từ</a>
                                        </li>
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=9">Máy hút mùi</a>
                                        </li>
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=10">Máy lọc
                                                nước</a>
                                        </li>
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=11">Lò nướng</a>
                                        </li>
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=12">Lò vi sóng</a>
                                        </li>
                                        <li class="sub-item">
                                            <a href="index.php?controller=products&action=category&id=13">Thiết bị, vật
                                                dụng khác</a>
                                            <i class="bi bi-arrow-right-short"></i>
                                            <ul>
                                                <li><a href="index.php?controller=products&action=category&id=13">Phụ
                                                        kiện</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-right">
                                    <a href="">Thiết kế nội thất</a>
                                    <i class="bi bi-arrow-down-short"></i>
                                    <ul class="sub-menu">
                                        <li class="sub-item">
                                            <a href="">Thiết kế nội thất phòng bếp</a>
                                        </li>
                                        <li class="sub-item">
                                            <a href="">Mẫu phòng bếp đẹp</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-right">
                                    <a href="index.php?controller=news">Tin tức</a>
                                </li>
                                <li class="menu-item-right">
                                    <a href="index.php?controller=contact">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->