<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/frontend/css/trangchu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/frontend/js/trangchu.js"></script>

    <title>Thiết bị nhà bếp Ranox</title>
</head>

<body>

    <?php include "views/HeaderView.php"; ?>
    <!-- Banner -->
    <div class="container-fluid" style="padding: 0;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://bizweb.dktcdn.net/100/424/911/themes/817776/assets/slider_1.jpg?1634223422268"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://bizweb.dktcdn.net/100/424/911/themes/817776/assets/slider_2.jpg?1634223422268"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://bizweb.dktcdn.net/100/424/911/themes/817776/assets/slider_3.jpg?1634223422268"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End Banner -->
    <?php echo $this->view; ?>
    <!-- Section8 -->
    <div class="section8">
        <div class="section8-body">
            <div class="container-xl">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-12">
                        <a href="" class="banner">
                            <img src="assets/frontend/img/section8/banner_mail.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-12 second">
                        <div class="description">
                            <div class="description-top">
                                <h2>
                                    KHUYẾN MẠI LÊN TỚI 5O% DÀNH RIÊNG CHO BẠN
                                </h2>
                                <p class="title">
                                    Không muốn bỏ lỡ những chương trình khuyến mại hấp dẫn từ Ranox?
                                </p>
                                <div class="register1">
                                    <a href="">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section8 -->
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-all">
            <div class="footer-policy">
                <div class="block-first">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
                                <div class="policy-content one">
                                    <div class="policy-left">
                                        <img src="assets/frontend/img/footer/item1.jpg" alt="">
                                    </div>
                                    <div class="policy-right">
                                        <div class="policy-title">SẢN PHẨM CHÍNH HÃNG</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
                                <div class="policy-content two">
                                    <div class="policy-left">
                                        <img src="assets/frontend/img/footer/item2.jpg" alt="">
                                    </div>
                                    <div class="policy-right">
                                        <div class="policy-title">BẢO HÀNH CHUYÊN NGHIỆP</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12 col-12">
                                <div class="policy-content three">
                                    <div class="policy-left">
                                        <img src="assets/frontend/img/footer/item3.jpg" alt="">
                                    </div>
                                    <div class="policy-right">
                                        <div class="policy-title">TƯ VẤN MIỄN PHÍ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-second">
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                                <div class="logo">
                                    <a href="index.php?controller">
                                        <img src="assets/frontend/img/logo.jpg" alt="">
                                    </a>
                                </div>
                                <ul class="information">
                                    <li>
                                        <span class="icon-left">
                                            <i class="bi bi-geo-alt"></i>
                                        </span>
                                        <span class="icon-right">
                                            Số nhà 22, ngõ 908 Kim Giang, Thanh Liệt, Thanh Trì, Hà Nội
                                        </span>
                                    </li>
                                    <li>
                                        <span class="icon-left">
                                            <i class="bi bi-phone"></i>
                                        </span>
                                        <span class="icon-right">
                                            <a href="tel:0965563433">09 6556 3433</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="icon-left">
                                            <i class="bi bi-envelope"></i>
                                        </span>
                                        <span class="icon-right">
                                            <a href="mailto:bepranox@gmail.com ">bepranox@gmail.com </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-sm-12 col-12">
                                <h4 class="menu">CHÍNH SÁCH</h4>
                                <ul class="list-menu">
                                    <li class="list-item">
                                        <a href="">Chinh sách bảo mật</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="">Chinh sách thanh toán</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="">Chinh sách vận chuyển</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="">Chinh sách bảo hành</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="">Chinh sách đổi trả hàng</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="">Dịch vụ hậu mãi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</body>

</html>