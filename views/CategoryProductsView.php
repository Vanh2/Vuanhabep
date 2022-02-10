<?php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="block2">
    <div class="container-xl">
    </div>
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
                        <a class="btn btn-primary dsrelative" data-bs-toggle="collapse" href="collapseExample"
                            role="button" aria-expanded="false" aria-controls="collapseExample">Tủ sấy bát
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
                <!-- Price -->
                <div class="container price-slider">
                    <div class="price">
                        <h2 class="title-price">Giá
                            <span class="chube">(đơn vị VNĐ)</span>
                        </h2>
                    </div>
                    <div class="row m20">
                        <div class="col-sm-12">
                            <div id="slider-range"></div>
                        </div>
                    </div>
                    <div class="row slider-labels ">
                        <div class="col-xs-6 caption width-half ">
                            <span id="slider-range-value1"></span>
                        </div>
                        <span class="divided2">-</span>
                        <div class="col-xs-6 text-right caption width-half ">
                            <span id="slider-range-value2"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form>
                                <input type="hidden" name="min-value" value="">
                                <input type="hidden" name="max-value" value="">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Price -->
                <div class="container-fluid p0">
                    <div class="hot-products">
                        <div class="products-title">
                            <h2 class="products-name">
                                <a href="">Sản phẩm yêu thích</a>
                            </h2>
                            <hr class="chiacat">
                        </div>
                        <div class="row-slick">
                            <?php foreach ($data as $rows) : ?>
                            <div class="col-12">
                                <div class="item">
                                    <div class="item-detail">
                                        <div class="detail-small">
                                            <div class="detail-small-img">
                                                <img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="">
                                            </div>
                                            <div class="detail-small-title">
                                                <h3 class="small-name">
                                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"
                                                        class="name-sec6"
                                                        title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                                                </h3>
                                                <span class="card-price"><?php echo number_format($rows->price); ?>đ
                                                    <span
                                                        class="card-price-compare"><?php echo number_format($rows->discount); ?>đ</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-detail">
                                        <div class="detail-small">
                                            <div class="detail-small-img">
                                                <img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="">
                                            </div>
                                            <div class="detail-small-title">
                                                <h3 class="small-name">
                                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"
                                                        class="name-sec6"
                                                        title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                                                </h3>
                                                <span class="card-price"><?php echo number_format($rows->price); ?>đ
                                                    <span
                                                        class="card-price-compare"><?php echo number_format($rows->discount); ?>đ</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-detail">
                                        <div class="detail-small">
                                            <div class="detail-small-img">
                                                <img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="">
                                            </div>
                                            <div class="detail-small-title">
                                                <h3 class="small-name">
                                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"
                                                        class="name-sec6"
                                                        title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                                                </h3>
                                                <span class="card-price"><?php echo number_format($rows->price); ?>đ
                                                    <span
                                                        class="card-price-compare"><?php echo number_format($rows->discount); ?>đ</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-detail">
                                        <div class="detail-small">
                                            <div class="detail-small-img">
                                                <img src="assets/upload/products/<?php echo $rows->photo; ?>" alt="">
                                            </div>
                                            <div class="detail-small-title">
                                                <h3 class="small-name">
                                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"
                                                        class="name-sec6"
                                                        title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                                                </h3>
                                                <span class="card-price"><?php echo number_format($rows->price); ?>đ
                                                    <span
                                                        class="card-price-compare"><?php echo number_format($rows->discount); ?>đ</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- End Lựa chọn option -->
            </div>
            <!-- End Menu -->
            <!-- Price -->

            <!-- Hết bên trái -->
            <!-- Bên phải -->
            <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                <div class="row">
                    <?php foreach ($data as $rows) : ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-6">
                        <div class="card-item">
                            <img src="assets/upload/products/<?php echo $rows->photo; ?>" class="card-item-img" alt="">
                            <img src="assets/frontend/img/sale.jpg" class="sale" alt="">
                            <div class="action1">
                                <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">
                                    <button class="btn-view">Thêm vào giỏ hàng</button>
                                </a>
                            </div>
                            <div class="action2">
                                <a href="" class="search">
                                    <i class="bi bi-search"></i>
                                </a>
                            </div>
                            <div class="card-item-info">
                                <h4 class="card-name">
                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"
                                        class="name" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                                </h4>
                                <span class="card-price"><?php echo number_format($rows->price); ?>đ
                                    <span class="card-price-compare"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Hết bên phải -->
        </div>
    </div>
</div>