<!-- Hàm tính tổng số lượng sản phẩm có trong giỏ hàng -->
<?php
include_once "./dbconnect.php";
// Kiểm tra biến $_SESSION['user'] có tồn tại ko, nếu có nhận biến đó, nếu ko gán nó vào mảng rỗng.
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];

// Kiểm tra có tồn tại biến $SESSION['cart'] hay k.
$cart = (isset($_SESSION['carts'])) ? $_SESSION['carts'] : [];
function total_items($cart)
{
  $total = 0;
  foreach ($cart as $key => $value) {
    $total += $value['quantity'];
  }
  return $total;
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link type="text/css" href="./css/header.css" rel="stylesheet" />
  <link type="text/css" href="./css/search.css" rel="stylesheet" />
  <!-- <link type="text/css" href="./css/view-cart-detail.css" rel="stylesheet" /> -->
  <title>LeThiHongNhungPM2405 - HEADER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Font Awesome 4 Icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Google Icons-->
  <link rel="stylesheet" href="./themify-icons/themify-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!--FontAwesome 5.15.4 -->
</head>
</head>

<body>

  <!-- ICON SOCIAL BAR -->
  <div class="icon-bar">
    <a href="https://www.facebook.com/noithatminhphong2015" class="facebook">Facebook <i class="fa fa-facebook"></i></a>
    <a href="https://www.youtube.com/channel/UC_P45E4A2-kWhzhmjSUAa2g" class="youtube">YouTube <i class="fa fa-youtube"></i></a>
    <a href="https://zalo.me/0968220298" class="zalo">Zalo <span><img src="images/icon-mxh/zalo_icon_white.svg" style="width:20px" /></span> </a>
    <a href="https://www.tiktok.com/@noithatminhphong" class="tiktok">TikTok <i class="fab fa-tiktok"></i></a>
    <a href="#" class="gmail" title="phamminhphong2015@gmail.com">Email <i class="fa fa-envelope"></i></a>
  </div>

  <!-- Top button -->
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-angle-up'></i></button>

  <!-- Header -->
  <div class="header">
    <!-- MENU PHỤ KHI RESPONSIVE -->
    <?php include("./menu-ipad-mobile.php"); ?>

    <div class="container-head">
      <div class="header-hotline">
        <div class="phone-icon"> <i class="material-icons">phone_in_talk</i> </div>

        <div class="hotline">
          Hotline: 096 822 0298
        </div>
      </div>

      <div class="header-icon">
        <!-- admin -->
        <div class="admin-icon">
          <a href="../admin/index.php"> <i class='fas fa-user-cog' style="font-size:24px"></i> </a>

          <div class="title-icon-admin">
            <i class="fas fa-caret-up"></i>
            <p>Đăng Nhập Admin</p>
          </div>
        </div>

        <!-- customer -->
        <div class="customer-icon">
          <?php
          // Sd biến truy vấn đến database để lấy ra các trường.
          // Nếu tồn tại biến $user['email_customer'] thì thực hiện hành động này 
          if (isset($user['email_customer'])) {
          ?>

            <!-- <button onclick="dropbtnProfileCustomer()" class="dropbtn"> <img src="<?php echo $user['avatar_customer'] ?>" class="avatar"> <i class="fas fa-angle-down" id="dropdown-avatar"></i> </button> -->
            <button onclick="dropbtnProfileCustomer()" class="dropbtn"> <img src="./images/customer/avatar_profile.png" class="avatar"> <i class="fas fa-angle-down" id="dropdown-avatar"></i> </button>
            
            <div id="myDropdown" class="dropdown-content">
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
            <button onclick="dropbtnProfileCustomer()" class="dropbtn">
              <i class="fas fa-user" style="font-size:24px;"></i> <i class="fas fa-angle-down" id="dropdown-avatar"></i>
            </button>

            <div id="myDropdown" class="dropdown-content">
              <!-- Gán cho url của đăng nhập 1 action để nó phân biệt đc khi nào là đăng nhập từ ngoài, khi nào là đăng nhập từ trang checkout -->
              <a href="?go=login-signup-customer&action=home" id="loginCustomer" style="display: block;"> <i class="fas fa-user" style="font-size:22px"></i> &ensp; &nbsp; Đăng nhập</a>
              <a href="?go=login-signup-customer" id="loginCustomer" style="display: block;"> <i class="fas fa-user-plus" style="font-size:22px"></i> &ensp; Đăng ký</a>
            </div>

            <div class="title-icon-customer">
              <i class="fas fa-caret-up"></i>
              <p>Tạo Tài Khoản</p>
            </div>
          <?php } ?>
        </div>

        <div class="flag-icon colIconHidden">
          <img src="images/vietnam.png" width="33px" height="31px" style="vertical-align: middle;" />
        </div>
      </div>

    </div>

    <script>
      /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
      function dropbtnProfileCustomer() {
        document.getElementById("myDropdown").classList.toggle("show");
      }

      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }

        // Kiểm tra nếu tồn tại biến $_SESSION('user') thì ẩn nút đăng nhập, ngược lại thì hiển thị.
        // var hiddenLogin = document.getElementById("loginCustomer");
        // if (isset($_SESSION['user'])) {
        //   // $user = $_SESSION['user'];
        //   hiddenLogin.style.display = "none";
        // } else {
        //   hiddenLogin.style.display = "block";
        // }
      }
    </script>

    <div class="container-body">

      <div class="col-head-content">

        <a href="?go=gioithieu" class="colConHidden">Giới thiệu</a>
        <a href="?go=address" class="colConHidden">Tìm cửa hàng</a>
        <a href="?go=#" class="colConHidden" id="khuyenmai">Khuyến mãi</a>
        <a href="?go=news" class="colConHidden">Tin tức</a>
      </div>

      <div class="col-head-logo">
        <a href="?go=home"> <img src="./images/LOGO/LOGO.png"> </a>
        <hr style="width:60px; background-color:darkgoldenrod;border-width: 2px;" />
      </div>

      <div class="col-head-icon">

        <!-- Search -->
        <div class="search-container colSearchHidden">
          <form action="/action_page.php">
            <input type="search" id="search" placeholder="Search.." name="search">
            <button class="iconsearch" type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>

        <div class="icon-body-header">
          <!-- Icon Search -->
          <button class="iconsearchBlock" type="submit"><i class="fa fa-search"></i></button>
          
          <!-- Icon Support -->
          <button id="myBtn_Support" class="colIconHidden"> <img src="images/support.png" title="Bạn cần hỗ trợ ?" height="27px" style="cursor:pointer;" /> </button>
          
          <!-- Icon Map -->
          <a href="?go=address" class="icon-location colIconHidden" title="Địa chỉ"> <i class="ti-location-pin" style="font-size:24px;"></i> </a>
         
          <!-- Icon Save -->
          <a href="#" class="Save" title="Sản phẩm đã lưu">
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
        </div>

      </div>
    </div>

    <div class="col-head-name">
      <a class="head-name" href="?go=home">NỘI THẤT ĐỒ GỖ</a>
    </div>
    
  </div>

  <!-- FORM SUPPORT -->
  <div id="mySupport" class="support">
    <div class="row-support">
      <!-- Modal content -->
      <div class="container-support">
        <div class="container-cont-sp">
          <h3>BẠN CẦN HỖ TRỢ</h3>
          <span class="close" style="color:#ab6a2d">&times;</span>
        </div>

        <div class="container-form-support">
          <form action="support_submit.php" method="POST" name="user">
            <label for="name">Họ và tên</label>
            <input type="text" id="fullname" name="fullname" placeholder="Your name.." required>

            <label for="phone">Điện thoại</label>
            <input type="tel" id="phone" name="phone" placeholder="Your telephone.." required min="10" max="12">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email.." required>

            <label for="comments">Comments</label>
            <textarea id="comments" name="comments" placeholder="Write something.." style="height:100px"></textarea>

            <input type="submit" name="submit" value="Gửi">
          </form>
        </div>
      </div>

    </div>
  </div>

  <!-- SUPPORT JS -->
  <script src="./javascript/support.js"></script>

  <!-- TOP BUTTON -->
  <!-- <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function($T) {
     $T = scrollFunction();
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script> -->

</body>

</html>