<?php include_once("./dbconnect.php"); ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="./css/tab-bar-mobile.css" rel="stylesheet" />
    <!-- Font Google - Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
    <!--FontAwesome 5.15.4 -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <title>Tab Bar Mobile</title>

</head>

<body>

    <div class="tab-bar-mobile">
        <div class="tab-titile">
            <a href="index.php">
                <button class="tablinks-title-mobile" onclick="openTabMobile(event, 'Home')">
                    <span class="material-symbols-outlined" style="font-size:26px;">home</span>
                    <p>Trang chủ</p>
                </button>
            </a>

            <a href="#">
                <button class="tablinks-title-mobile" onclick="openTabMobile(event, 'Save')">
                    <i class="far fa-bookmark" style="font-size:18px;"></i>
                    <p>Đã lưu</p>
                    <!-- <p class="notificationBadge">3</p> -->
                </button>
            </a>

            <a href="?go=cart-detail">
                <button class="tablinks-title-mobile" onclick="openTabMobile(event, 'Cart')">
                    <i class="fab fa-opencart fa-lg" style="font-size:19px; margin-bottom: 8px;"></i>
                    <span class="notificationBadgeMobile"> <?php echo total_items($cart) ?> </span>
                    <p>Giỏ hàng</p>
                </button> 
            </a>

            <?php
            // Sd biến truy vấn đến database để lấy ra các trường.
            // Nếu tồn tại biến $user['email_customer'] thì thực hiện hành động này 
            if (isset($user['email_customer'])) {
            ?>

            <a href="#">
                <!-- <button class="tablinks-title-mobile" onclick="openTabMobile(event, 'Account')">
                    <img src="<?php echo $user['avatar_customer'] ?>" class="avatar">
                    <p> <?php echo $user['username']; ?> </p>
                </button> -->
                <button class="tablinks-title-mobile" onclick="openTabMobile(event, 'Account')">
                    <img src="./images/customer/avatar_profile.png" class="avatar">
                    <p> <?php echo $user['username']; ?> </p>
                </button>
            </a>

            <?php }
            // Ngc lại, nếu ko tồn tại biến $user['email_customer'], thì thực hiện hành động này.
            else { ?>
                <a href="?go=login-signup-customer">
                    <button class="tablinks-title-mobile" onclick="openTabMobile(event, 'Account')">
                        <i class="far fa-user" style="font-size:17px;"></i>
                        <p>Tài khoản</p>
                    </button>
                </a>
            <?php } ?>

        </div>

        <div id="Home" class="tabcontent-mobile">
           <!-- <h3>Home</h3> -->
        </div>

        <div id="Save" class="tabcontent-mobile">
            <!-- <h3>Save</h3> -->
        </div>

        <div id="Cart" class="tabcontent-mobile">
            <!-- <h3>Cart</h3> -->
            <?php /*include("cart-detail.php");*/ ?>
        </div>

        <div id="Account" class="tabcontent-mobile">
            <!-- <h3>Account</h3> -->
        </div>
    </div>

    <script src="./javascript/tab-bar-mobile.js"></script>
</body>

</html>