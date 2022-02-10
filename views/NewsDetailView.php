<?php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="container-xl">
    <div class="row">
        <!-- Bên trái -->
        <!-- Menu -->
        <div class="col-xl-3 col-lg-3 col-md-12 col-12 left">
            <div class="title-head">
                <h2 class="chuto">
                    <span>Danh mục</span>
                </h2>
                <hr class="chiacat">
            </div>
            <ul class="danhsach">
                <li class="danhsach-item">
                    <a href="index.php?controller=products&action=category&id=1">Chậu rửa bát</a>
                </li>
                <li class="danhsach-item">
                    <a href="index.php?controller=products&action=category&id=2">Vòi rửa bát</a>
                </li>
                <li class="danhsach-item">
                    <a href="index.php?controller=products&action=category&id=3">Combo chậu và vòi rửa</a>
                </li>
                <li class="danhsach-item">
                    <a class="btn btn-primary dsrelative" data-bs-toggle="collapse" href="collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">Tủ sấy bát
                        đĩa</a>
                    <i class="bi bi-caret-down"></i>
                    <ul class="collapse card card-body" id="collapseExample">
                        <li><a class="" href="index.php?controller=products&action=category&id=5">Tủ sấy bát
                                gia đình</a></li>
                        <li><a class="" href="index.php?controller=products&action=category&id=6">Tủ sấy bát
                                công nghiệp</a></li>
                    </ul>
                </li>
                <li class="danhsach-item">
                    <a href="index.php?controller=products&action=category&id=7">Máy rửa bát</a>
                </li>
                <li class="danhsach-item">
                    <a href="index.php?controller=products&action=category&id=8">Bếp từ</a>
                </li>
                <li class="danhsach-item">
                    <a href="index.php?controller=products&action=category&id=9">Máy hút mùi</a>
                </li>
                <li class="danhsach-item">
                    <a href="index.php?controller=products&action=category&id=10">Máy lọc nước</a>
                </li>
                <li class="danhsach-item">
                    <a href="index.php?controller=products&action=category&id=11">Lò nướng</a>
                </li>
                <li class="danhsach-item">
                    <a href="index.php?controller=products&action=category&id=12">Lò vi sóng</a>
                </li>
                <li class="danhsach-item">
                    <a href="index.php?controller=products&action=category&id=13">Thiết bị, vật dụng
                        khác</a>
                </li>
            </ul>
            <!-- End Lựa chọn option -->
        </div>
        <!-- End Menu -->
        <!-- Price -->

        <!-- Hết bên trái -->
        <!-- Bên phải -->
        <div class="col-xl-8 col-lg-8 col-md-12 col-12">
            <h2><?php echo $record->name; ?></h2>
            <p><?php echo $record->description; ?></p>
            <p><?php echo $record->content; ?></p>
        </div>
        <!-- Hết bên phải -->
    </div>
</div>