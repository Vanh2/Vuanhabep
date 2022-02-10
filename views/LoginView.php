<?php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="container-xl">
    <div class="row">
        <div class="col-xl-5 col-md-5 col-12">
            <div class="login-form">
                <form method="post" action="index.php?controller=account&action=loginPost">
                    <div class="form">
                        <h1 class="title-head">ĐĂNG NHẬP</h1>
                        <p>Nếu bạn chưa có tài khoản,
                            <a href="index.php?controller=account&action=register">đăng ký tại đây</a>
                        </p>
                        <fieldset class="form-group">
                            <input name="email" type="email" placeholder="Email" require>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="password" type="password" placeholder="Mật khẩu" require>
                        </fieldset>
                        <div class="perform">
                            <input type="submit" value="Đăng nhập"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>