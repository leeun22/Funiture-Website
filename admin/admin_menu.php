
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="admin_menu.css" rel="stylesheet" />
    <!-- <script src="https://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>MENU ADMIN</title>
</head>

<body>
    <!--THANH MENU NGANG-->
    <table class="bg_menu_vertical" width="100%">
        <tr>
            <td class="column_search_vertical">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="search" id="search" placeholder="Search.." name="search">
                        <button class="iconsearch" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </td>
            <td class="column_logout_menu">
                <div class="logout">
                    <img src="images/logout.png" width="30px" height="30px" /> &nbsp;
                    <a class="txt_logout" href="index.php"> Đăng Xuất</a>
                </div>
            </td>
        </tr>
    </table>

    <!--THANH MENU DỌC-->
    <table width="100%" style="border: 0" cellspacing="0">
        <tr>
            <td width="14.5%">
                <div class="sidenav" style="width:220px;">
                    <a id="sidenav-logo" href="admin.php">
                        <img src="images/LOGO-removebg-new.png" width="100px" />
                    </a>
                    <hr id="hr-sidenav">
                    <a id="sidenav-name" href="admin.php"> <b>NỘI THẤT ĐỒ GỖ</b></a> <br />
                    <br />
                    <a href="?admin=quanly">Quản lý thành viên</a>
                    <a href="?admin=customer">Quản lý khách hàng</a>
                    <a href="?admin=order">Quản lý đơn hàng</a>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="window.location.href='#'">Sản phẩm
                            <i class="fa fa-caret-down"> </i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Thêm sản phẩm</a>
                            <a href="#">Sửa sản phẩm</a>
                            <a href="#">Xóa sản phẩm</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="window.location.href='?admin=product_cate&id_cate=1'">Bàn Ghế Gỗ 
                            <i class="fa fa-caret-down"> </i>
                        </button>
                        <div class="dropdown-content">
                            <a href="?admin=product_cate_add">Thêm sản phẩm</a>
                            <a href="?admin=product_cate">Sửa sản phẩm</a>
                            <a href="?admin=product_cate">Xóa sản phẩm</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="window.location.href='?admin=bobanan&id_cate=2'">Bộ bàn ăn
                            <i class="fa fa-caret-down"> </i>
                        </button>
                        <div class="dropdown-content">
                            <a href="?admin=bobanan_add">Thêm sản phẩm</a>
                            <a href="?admin=bobanan">Sửa sản phẩm</a>
                            <a href="?admin=bobanan">Xóa sản phẩm</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="window.location.href='?admin=giuongngu&id_cate=3'">Giường ngủ
                            <i class="fa fa-caret-down"> </i>
                        </button>
                        <div class="dropdown-content">
                            <a href="?admin=giuongngu_add">Thêm sản phẩm</a>
                            <a href="?admin=giuongngu">Sửa sản phẩm</a>
                            <a href="?admin=giuongngu">Xóa sản phẩm</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="window.location.href='#'">Kệ ti vi
                            <i class="fa fa-caret-down"> </i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Thêm sản phẩm</a>
                            <a href="#">Sửa sản phẩm</a>
                            <a href="#">Xóa sản phẩm</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="window.location.href='#'">Tủ quần áo
                            <i class="fa fa-caret-down"> </i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Thêm sản phẩm</a>
                            <a href="#">Sửa sản phẩm</a>
                            <a href="#">Xóa sản phẩm</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="window.location.href='#'">Tủ giày dép
                            <i class="fa fa-caret-down"> </i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Thêm sản phẩm</a>
                            <a href="#">Sửa sản phẩm</a>
                            <a href="#">Xóa sản phẩm</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="window.location.href='#'">Bàn trang điểm
                            <i class="fa fa-caret-down"> </i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Thêm sản phẩm</a>
                            <a href="#">Sửa sản phẩm</a>
                            <a href="#">Xóa sản phẩm</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="window.location.href='?admin=phongtho&id_cate=8'">Phòng thờ
                            <i class="fa fa-caret-down"> </i>
                        </button>
                        <div class="dropdown-content">
                            <a href="?admin=phongtho_add">Thêm sản phẩm</a>
                            <a href="?admin=phongtho">Sửa sản phẩm</a>
                            <a href="?admin=phongtho">Xóa sản phẩm</a>
                        </div>
                    </div>
                </div>
            </td>

        </tr>
    </table>
</body>

</html>