<?php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="container-xl">
    <div class="row">
        <?php foreach ($data as $rows) : ?>
        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
            <!-- Card-item -->
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
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="name"
                            title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                    </h4>
                    <span class="card-price"><?php echo number_format($rows->price); ?>đ
                        <span class="card-price-compare"><?php echo number_format($rows->discount); ?></span>
                    </span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>