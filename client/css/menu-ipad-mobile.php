<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="./css/menu-ipad-mobile.css" rel="stylesheet" />
    <!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <title>Menu Ipad Mobile</title>
</head>

<body>
    <div class="menu-ipad-mobile">
        <!-- Icon Menu (3 thanh) -->
        <div class="head-menu">
            <div class="menu-icon">
                <span class="menu-icon_line menu-icon_line-left"></span>
                <span class="menu-icon_line"></span>
                <span class="menu-icon_line menu-icon_line-right"></span>
            </div>

            <div class="logo">
                <a href="?go=home"> <img src="./images/LOGO/LOGO-revovebg.png" alt="image-logo"> </a>
            </div>

            <div class="save-cart-account">
                <!-- Icon Save -->
                <a class="Save" title="Sản phẩm đã lưu">
                    <i class="far fa-bookmark" style="font-size:19px;"></i>
                    <p class="notificationBadge">0</p>
                </a>

                <!-- Icon Cart -->
                <div class="Cart">
                    <a href="?go=cart-detail">
                        <button class="titleCart">
                            <i class="fab fa-opencart fa-lg" style="font-size:21px;"></i>
                            <p class="notificationBadge"> <?php echo total_items($cart) ?> </p>
                        </button>
                    </a>

                    <div class="contentCart">
                        <!-- Giỏ hàng xem nhanh -->
                        <?php include("./quick-view-cart-detail.php") ?>
                    </div>
                </div>


                <!-- customer -->
                <div class="customer-icon-ipad">
                    <?php
                        // Sd biến truy vấn đến database để lấy ra các trường.
                        // Nếu tồn tại biến $user['email_customer'] thì thực hiện hành động này 
                        if (isset($user['email_customer'])) {
                    ?>

                        <!-- <button onclick="dropbtnProfileCustomerIpad()" class="dropbtnIpad"> <img src="<?php echo $user['avatar_customer'] ?>" class="avatar"> <i class="fas fa-angle-down" id="dropdown-avatar"></i> </button> -->
                        <button onclick="dropbtnProfileCustomerIpad()" class="dropbtnIpad"> <img src="./images/customer/avatar_profile.png" class="avatar"> <i class="fas fa-angle-down" id="dropdown-avatar"></i> </button>

                        <div id="myDropdownIpad" class="dropdown-content-Ipad">
                            <!-- <a href="?go=login-form" id="loginCustomer" style="display: block;">Đăng nhập</a> -->
                            <table>
                                <tr>
                                    <td>
                                        <!-- <img src="<?php echo $user['avatar_customer'] ?>" class="avatar2"> &ensp; -->
                                        <img src="./images/customer/avatar_profile.png" class="avatar2"> &ensp;
                                    </td>
                                    <td>
                                        <span><?php echo $user['username']; ?></span> <br />
                                        <h6 style="font-size: 13px; font-weight: normal;"> <?php echo $user['email_customer']; ?> </h6>
                                    </td>
                                </tr>
                            </table>

                            <a href="#acount_customer">Quản lý tài khoản của bạn</a>
                            <hr id="hr-drp-profile-customer">

                            <div class="cart-profile-customer">
                                <a href="?go=cart-detail">
                                    <button class="titleCart">
                                        <i class="fab fa-opencart fa-lg" style="font-size:21px;"></i>
                                        <p class="notificationBadge"> <?php echo total_items($cart) ?> </p>
                                        <strong>Giỏ hàng của bạn</strong>
                                    </button>
                                </a>
                            </div>
                            <!-- <a href="#"> Giỏ hàng của bạn</a> -->
                            <a href="?go=checkout"> <i class='fas fa-money-check' style="font-size: 21px;"></i>Thanh toán</a>
                            <a href="./logout_customer.php"> <i class="fas fa-sign-out-alt" style="font-size:21px;"></i>Đăng xuất</a>
                        </div>

                    <?php }
                    // Ngc lại, nếu ko tồn tại biến $user['email_customer'], thì thực hiện hành động này.
                    else { ?>
                        <button onclick="dropbtnProfileCustomerIpad()" class="dropbtnIpad">
                            <i class="fas fa-user" style="font-size:24px;"></i> <i class="fas fa-angle-down" id="dropdown-avatar"></i>
                        </button>

                        <div id="myDropdownIpad" class="dropdown-content-Ipad">
                            <!-- Gán cho url của đăng nhập 1 action để nó phân biệt đc khi nào là đăng nhập từ ngoài, khi nào là đăng nhập từ trang checkout -->
                            <a href="?go=login-signup-customer&action=home" id="loginCustomer" style="display: block;"> <i class="fas fa-user" style="font-size:22px"></i> &ensp; &nbsp; Đăng nhập</a>
                            <a href="?go=login-signup-customer" id="loginCustomer" style="display: block;"> <i class="fas fa-user-plus" style="font-size:22px"></i> &ensp; Đăng ký</a>
                        </div>

                    <?php } ?>
                </div>
                
                <script>
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function dropbtnProfileCustomerIpad() {
                    document.getElementById("myDropdownIpad").classList.toggle("showIpad");
                }

                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                    if (!event.target.matches('.dropbtnIpad')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content-Ipad");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('showIpad')) {
                        openDropdown.classList.remove('showIpad');
                        }
                    }
                    }
                }
                </script>
            </div>
        </div>

        <!-- Box Menu -->
        <div class="nav-bar">
            <!-- Box Menu Hidden-->
            <div class="nav-bar-content">
                <!-- Box Content Menu -->
                <ul id="accordion-menu" class="nav-list-menu">
                    <!-- Content Menu -->
                    <li class="nav-list-item">
                        <div class="link"> <a href="?go=home">Trang Chủ</a> <i class="ti-home"></i></div>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="#">Nội Thất Phòng Khách</a> <i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li><a href="?go=product-category&id_cate=1">Bàn Ghế Gỗ</a></li>
                            <li><a href="?go=product-list&id_list=1">&emsp; Bàn Salon Gỗ</a></li>
                            <li><a href="?go=product-list&id_list=2">&emsp; Bàn Sofa Gỗ</a></li>
                            <li><a href="#">Kệ TiVi</a></li>
                            <li><a href="#">Tủ Giày Dép</a></li>
                        </ul>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="#">Nội Thất Phòng Ngủ</a> <i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li><a href="?go=product-category&id_cate=3">Giường Ngủ</a></li>
                            <li><a href="#">Tủ Quần Áo</a></li>
                            <li><a href="#">Bàn Trang Điểm</a></li>
                        </ul>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="#">Nội Thất Phòng Bếp</a> <i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li><a href="?go=product-category&id_cate=2">Bộ Bàn Ăn</a></li>
                            <li><a href="?go=product-list&id_list=5">&emsp; Bộ Bàn Ăn Hiện Đại</a></li>
                            <li><a href="?go=product-list&id_list=6">&emsp; Bộ Bàn Ăn Cổ Điển</a></li>
                        </ul>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="#">Nội Thất Phòng Thờ</a> <i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li><a href="?go=product-list&id_list=21">Tủ Thờ</a></li>
                            <li><a href="?go=product-list&id_list=22">Án Gian</a></li>
                            <li><a href="?go=product-list&id_list=23">Sập Thờ</a></li>
                            <li><a href="?go=product-list&id_list=24">Bàn Thờ Treo Tường</a></li>
                            <li><a href="#">Bàn Thờ Thần Tài</a></li>
                            <li><a href="#">Hoành Phi Câu Đối</a></li>
                            <li><a href="#">Lục Bình Gỗ</a></li>
                            <li><a href="#">Tấm Ám Khói</a></li>
                        </ul>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="#">Nội Thất Văn Phòng</a> <i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li><a href="#">Bàn Họp MDF</a></li>
                            <li><a href="#">Bàn Họp Gỗ Tự Nhiên</a></li>
                        </ul>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="#">Thanh Lý Và Sale</a> <i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li><a href="#">Bàn Họp MDF</a></li>
                            <li><a href="#">Bàn Họp Gỗ Tự Nhiên</a></li>
                        </ul>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="?go=news">Tin Tức</a> <i class="fa fa-chevron-down"></i></div>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="?go=gioithieu">Về Chúng Tôi</a></div>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="?go=address">Tìm Cửa Hàng</a></div>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="?go=support">Bạn Cần Hỗ Trợ</a></div>
                    </li>
                    <li class="nav-list-item">
                        <div class="link" id="menu-search">
                            <form action="#">
                                <input type="search" id="search" placeholder="Search.." name="search">
                                <button class="btnSearch" type="submit" title="btnSearch"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="#" title="phamminhphong2015@gmail.com"><i class="fa fa-envelope"></i> Email </a> </div>
                    </li>
                    <li class="nav-list-item">
                        <div class="link"> <a href="#"> (+84) 096 822 0298</a> <i class="material-icons" title="096 822 0298">phone_in</i> </div>
                    </li>
                    <li class="nav-list-item">
                        <div class="link">
                            <div class="icon-contact-menu">
                                <a href="https://www.facebook.com/noithatminhphong2015" title="https://www.facebook.com/noithatminhphong2015"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.youtube.com/channel/UC_P45E4A2-kWhzhmjSUAa2g" title="https://www.youtube.com/channel/UC_P45E4A2-kWhzhmjSUAa2g"><i class="fa fa-youtube"></i></a>
                                <a href="https://zalo.me/0968220298" title="0968220298"><img src="./images/icon-mxh/zalo_icon_brown.svg" alt="icon-zalo" style="width:20px" /></a>
                                <a href="https://www.tiktok.com/@noithatminhphong" title="https://www.tiktok.com/@noithatminhphong"><i class="fab fa-tiktok"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <!-- Script Menu-Ipad-Moblie -->
    <script src="./javascript/menu-ipad-moblie.js"> </script>
</body>

</html>