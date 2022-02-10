<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/frontend/css/trangchu.css">
    <link rel="stylesheet" href="assets/frontend/css/trangtrong.css">
    <link rel="stylesheet" href="assets/frontend/css/price.css">
    <link rel="stylesheet" href="assets/frontend/css/chitiet.css">
    <link rel="stylesheet" href="assets/frontend/css/lienhe.css">
    <link rel="stylesheet" href="assets/frontend/css/reg-login.css">
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
    <!-- Header -->
    <?php include "HeaderView.php"; ?>
    <!-- End Header -->
    <div class="body-wrap">
        <!-- Block1 -->
        <div class="block1">
            <div class="container-xl">
                <div class="breadcrumb1"
                    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                </div>
            </div>
        </div>
        <!-- End Block1 -->
        <!-- Block2 -->
        <?php echo $this->view; ?>
        <!-- End Block2 -->
    </div>
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
                                    <a href="">
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