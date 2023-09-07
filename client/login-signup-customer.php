<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="./css/login-signup-customer.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Đăng nhập tài khoản khách hàng</title>
</head>

<body>  
    <div class="container login-signup">
        <h4><strong>Vui lòng đăng nhập để mua hàng !</strong></h4>

        <section id="formHolder">

            <div class="row">

                <!-- Brand Box -->
                <div class="col-sm-6 brand">
                    <a href="#" class="logo"> <img src="./images/LOGO/LOGO-revovebg.png" /> </a>
                    <!-- <a href="#" class="logo">Đăng nhập / Đăng ký </a> -->

                    <div class="heading">
                        <!-- <h2>MINH PHONG</h2> -->
                        <p>NỘI THẤT ĐỒ GỖ</p>
                    </div>

                    <!-- Một thông báo khi submit thành công -->
                    <div class="success-msg">
                        <p>Great! You are one of our members now</p>
                        <a href="#" class="profile">Your Profile</a>
                    </div>
                </div>


                <!-- Form Box -->
                <div class="col-sm-6 form">
                    <?php
                        // Thực hiện hđ action bằng cách bắt key của $_GET['action'] qua url 
                        $action = (isset($_GET['action'])) ? $_GET['action'] : '';
                    ?>
                    <!-- Login Form -->
                    <div class="login form-peice switched">
                        <form class="login-form" action="login-customer.php" method="POST">
                            <div class="login-form-title">Log in</div>
                            <div class="form-group">
                                <label for="loginemail">Địa chỉ Email / Phone</label>
                                <input type="text" name="loginEmailPhone" id="loginEmail" class="loginEmailPhone" required>
                                <!-- Thông báo lỗi -->
                                <span class="error"></span>
                            </div>

                            <div class="form-group">
                                <label for="loginPassword">Mật khẩu</label>
                                <input type="password" name="loginPassword" id="loginPassword" class="loginPassword" required>
                                <span class="error"></span>
                            </div>

                            <!-- Tạo 1 input ẩn bắt key action -->
                            <input type="hidden" name="actionLogin" value="<?php echo "$action" ?>" >
                            
                            <div class="CTA">
                                <input type="submit" name="submit" value="Đăng nhập">
                                <a href="#" class="switchCTA">Tôi chưa có tài khoản !</a>
                            </div>
                        </form>
                    </div>
                    <!-- End Login Form -->


                    <!-- Signup Form -->
                    <div class="signup form-peice">
                        <form class="signup-form" action="signup-customer.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="fullname">Họ tên</label>
                                <input type="text" name="fullname" id="fullname" class="fullname" required>
                                <!-- Thông báo lỗi -->
                                <span class="error"></span>
                            </div>

                            <div class="form-group">
                                <label for="email">Địa chỉ Email</label>
                                <input type="email" name="email" id="email" class="email" required>
                                <span class="error"></span>
                            </div>

                            <div class="form-group">
                                <label for="usename">Tên đăng nhập</label>
                                <input type="text" name="username" id="username" class="username" required>
                                <span class="error"></span>
                            </div>

                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" name="phone" id="phone" class="phone" required>
                                <span class="error"></span>
                            </div>

                            <div class="form-group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" name="password" id="password" class="pass" required>
                                <span class="error"></span>
                            </div>

                            <div class="form-group">
                                <label for="passwordCon">Xác nhận mật khẩu</label>
                                <input type="password" name="passwordCon" id="passwordCon" class="passConfirm" required>
                                <span class="error"></span>
                            </div>

                            <div class="CTA">
                                <!-- Ko hiểu vì lý do gì mà ko thể thực hiện hành động input hay button? a href thì vẫn nhận (Lý do: File JS) -->
                                <input type="submit" name="submit" value="Đăng ký" id="submit">
                                <a href="#" class="switchCTA">Tôi đã có tài khoản !</a>
                            </div>
                        </form>
                    </div>
                    <!-- End Signup Form -->
                </div>
            </div>

        </section>

    </div>

    <script src="./javascript/login-signup-customer.js"></script>

</body>

</html>