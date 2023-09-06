<?php

    require '../controller/controller.php' ;
    if(isset($_GET['product_id'])) {
        $dataID = getProductID($_GET['product_id']) ;
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $dataID -> name ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <div class="header">
            <img src="../images/Logo.svg" width="200px" height="auto" alt="">
            <form action="">
                <input type="text" placeholder="Tìm kiếm" required>
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div class="cart">
                <div>
                    <!-- <img src="images/Cart.svg"> -->
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>Giỏ hàng (<span style="padding:5px; background-color: orange; border-radius: 100%;">0</span>)</p>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <div class="wrapper-child">
            <div class="form">
                <form action="" method="POST" onsubmit="return validate_login();">
                    <h2>Login</h2>
                    <div class="form-group">
                        <label for="username">Username : <span id="username_err_login">
                                <?php
                                if (!empty($error['username_login'])) {
                                    echo $error['username_login'];
                                }
                                ?>
                            </span></label> <br>
                        <input type="text" name="username_login" id="username_login"> <br>
                    </div>
                    <div class="form-group">
                        <label for="password">Password : <span id="password_err_login">
                                <?php
                                if (!empty($error['password_login'])) {
                                    echo $error['password_login'];
                                }
                                ?>
                            </span></label> <br>
                        <input type="password" id="password_login" name="password_login"> <br>
                    </div>
                    <button type="submit" id="login" name="login">Log in</button>
                    <div class="up-in-forgot">
                        <a id="sign-up">Đăng kí</a>
                        <a id="forgot-pass">Quên mật khẩu</a>
                    </div>
                </form>
            </div>
            <div class="form">
                <form action="" method="POST" onsubmit="return validate_signup();">
                    <h2>Sign up</h2>
                    <div class="form-group">
                        <label for="username">Username : <span id="username_err_signup"></span></label> <br>
                        <input type="text" name="username_signup" id="username_signup"> <br>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email : <span id="email_err_signup"></span></label> <br>
                        <input type="email" id="email_signup" name="email_signup"> <br>
                    </div>
                    <div class="form-group">
                        <label for="password">Password : <span id="password_err_signup"></span></label> <br>
                        <input type="password" id="password_signup" name="password_signup"> <br>
                    </div>
                    <div class="form-group">
                        <label for="confirm_pass">Confirm password : <span id="confirmpass_err_signup"></span></label> <br>
                        <input type="password" id="confirm_pass_signup" name="confirm_pass"> <br>
                    </div>
                    <button type="submit" id="signup" name="signup">Sign up</button>
                    <div class="up-in-forgot">
                        <a id="log-in">Đăng nhập</a>
                        <a id="forgot-pass">Quên mật khẩu</a>
                    </div>
                </form>
            </div>
            <div class="form">
                <form action="" method="" onsubmit="return validate_forgot();">
                    <h2>Forgot password</h2>
                    <div class="form-group">
                        <label for="email">Email : <span id="email_err_forgot"></span></label> <br>
                        <input type="text" name="email" id="email_forgot"> <br>
                    </div>
                    <button type="submit" id="forgot_pass">Submit</button>
                    <div class="up-in-forgot">
                        <a id="log-in">Đăng nhập</a>
                        <a id="sign-up">Đăng kí</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="nav">
        <nav>
            <ul>
                <li><span style="padding-right: 3px;"><svg xmlns="http://www.w3.org/2000/svg" height=".8em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg></span>Danh mục sản phẩm
                    <ul class="sub-menu">
                        <li><a href="">Điện thoại</a></li>
                        <li><a href="">Laptop</a></li>
                        <li><a href="">Máy tính bảng</a></li>
                        <li><a href="">Tai nghe</a></li>
                        <li><a href="">Chuột máy tính</a></li>
                        <!-- <li><a href="">Máy chơi game</a></li>
                        <li><a href="">Tivi</a></li>
                        <li><a href="">Smartwatch</a></li> -->
                    </ul>
                </li>
                <li>Sản phẩm <i class="fa-sharp fa-solid fa-caret-down"></i>
                    <ul class="sub-menu">
                        <li><a href="">Điện thoại</a>
                            <ul class="sub-menu-2">
                                <li><a href="">Apple</a></li>
                                <li><a href="">Samsung</a></li>
                                <li><a href="">Xiaomi</a></li>
                            </ul>
                        </li>
                        <li><a href="">Tai nghe</a></li>
                        <li><a href="">Chuột máy tính</a></li>
                        <li><a href="">Bàn phím</a></li>
                    </ul>
                </li>
                <!-- <li><a href="">Tai nghe có dây</a></li>
                <li><a href="">Loa Bluetouth</a></li>
                <li><a href="">Akko</a></li>
                <li><a href="">Sony PS5</a></li> -->
                <li><a href="">Giới thiệu</a></li>
                <li><a href="">Tin tức</a></li>
                <li><a href="">Liên hệ</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        
        
    </div>
    <footer>
        <div class="footer">
            <div class="footer-form">
                <img src="../images/Logo.svg" width="250px" height="auto">
                <form action="">
                    <label for="">Nhận bản tin</label>
                    <div>
                        <input type="text" placeholder="Nhập email tại đây...">
                        <button type="submit">ĐĂNG KÍ</button>
                    </div>
                </form>
            </div>
            <hr>
            <div class="nav-footer">
                <div>
                    <h3>Thông tin liên hệ</h3>
                    <nav>
                        <ul>
                            <li>Địa chỉ: A12, Đinh Tiên Hoàng, Q. Hoàn Kiếm, <br>Hà Nội</li>
                            <li>Điện thoại: 0123 456 789</li>
                            <li>Email: contact@yourdomain.com</li>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h3>Thông tin</h3>
                    <nav>
                        <ul>
                            <li>Về chúng tôi</li>
                            <li>Điều khoản & điều kiện</li>
                            <li>Chính sách bảo mật</li>
                            <li>Chính sách thanh toán</li>
                            <li>Chính sách giao hàng</li>
                        </ul>
                    </nav>
                </div>
                <div>
                    <h3>Tổng đài hỗ trợ</h3>
                    <nav>
                        <ul>
                            <li>Gọi mua: 0123456789 (7:30 - 22:00)</li>
                            <li>Kỹ thuật: 0123456789 (7:30 - 22:00)</li>
                            <li>Khiếu nại: 0123456789 (8:00 - 21:30)</li>
                            <li>Bảo hành: 0123456789 (8:00 - 21:00)</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <hr>
            <p>&copy;Copyright 2022-2023 Vmart</p>
        </div>
    </footer>
    <button id="scroll-to-top"><i class="fa-solid fa-angle-up"></i></button>
    <script src="javascript/main.js"></script>
</body>

</html>