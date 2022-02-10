<?php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<div class="container-xl">
    <div class="row">
        <div class="col-xl-5 col-md-5 col-12">
            <div class="login-form">
                <form method="post" action="index.php?controller=account&action=registerPost">
                    <div class="form">
                        <h1 class="title-head">ĐĂNG KÝ</h1>
                        <p>Đã có tài khoản,
                            <a href="index.php?controller=account&action=login">đăng nhập tại đây</a>
                        </p>
                        <fieldset class="form-group">
                            <input name="name" type="name" placeholder="Họ và tên" require>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="password" type="password" placeholder="Mật khẩu" require>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="email" type="email" placeholder="Email" require>
                        </fieldset>
                        <fieldset class="form-group">
                            <input name="phone" type="text" placeholder="Số điện thoại" require>
                        </fieldset>
                        <div class="perform">
                            <input class="button" type="submit" value="Đăng ký"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>