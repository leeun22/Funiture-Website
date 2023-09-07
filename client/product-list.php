<?php
include_once("dbconnect.php");
// include_once("library/fun_sp.php"); k cần include lại vì đã thêm trong url, thì tự động khi chạy tới url sẽ gọi tới function
if (isset($_SESSION['noti_carts']) && $_SESSION['noti_carts'] == 1) {
?>    
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"&times;></button>
        <strong>Thông báo! </strong>Sản phẩm đã được thêm vào giỏ hàng.
        <a href="?go=cart-detail"><button class="btn btn-danger">Xem chi tiết</button></a>
    </div>
<?php
    unset($_SESSION['noti_carts']);
    }
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" href="./css/product-menu.css" rel="stylesheet" />
    <title>Product List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!--BÀN GHẾ GỖ-->
    <div class="container khampha" id="section3">
        <?php
            if (isset($_GET['id_list']) && !empty($_GET['id_list'])) {
                $id= $_GET['id_list'];
                //Lấy ra tất cả các sp
                $row = loadall_list_product($id);
        ?>
        <div class="title-main">
            <p id="title-kp">
                <?php 
                    switch ($_GET['id_list']) {
                        case "1":
                        echo "SALON GỖ";
                        break;
                        case "2":
                        echo "SOFA GỖ";
                        break;
                        case "4":
                        echo "BÀN HỌP GỖ MDF";
                        break;
                        case "5":
                        echo "BỘ BÀN ĂN HIỆN ĐẠI";
                        break;
                        case "6":
                        echo "BỘ BÀN ĂN CỔ ĐIỂN";
                        break;
                        case "10": 
                        echo "GIƯỜNG NGỦ GỖ TỰ NHIÊN";
                        break;
                        case "11":
                        echo "GIƯỜNG NGỦ GỖ MDF";
                        break;
                        case "21":
                        echo "TỦ THỜ GỖ";
                        break;
                        case "22":
                        echo "ÁN GIAN GỖ";
                        break;
                        case "23":
                        echo "SẬP THỜ GỖ";
                        break;
                        case "24":
                        echo "BÀN THỜ TREO TƯỜNG";
                        break;
                        default:
                        echo "Không tìm thấy id_cate yêu cầu !";
                    }
                ?>
            </p> <br>
            <hr id="hr-kp"> <br>
            <!-- <p id=title-kp-2> Khám phá những <span>sản phẩm</span> <br>được nhiều người ưa chuộng nhất của chúng tôi </p> -->
        </div>

        <div class="row place">
            <?php
                foreach ($row as $key => $value_list) {
            ?>
                <div class="col-md-4 place_1">
                    <div class="title-img">
                        <img id="img_place" src="<?php echo $value_list['img_product'] ?>" />

                        <i class="far fa-bookmark"></i>
                    </div>

                    <div class="title-cap">
                        <a href="?go=product-detail&id_product=<?php echo $value_list['id_product'] ?>" id="title-cap-name"> <?php echo $value_list['name_product'] ?></a>
                        <div class="rate-price">
                            <div class="rate-star">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                            <div class="title-price">
                                <span id="reduced-price"><?php echo number_format($value_list['price_product'],0,' ','.') ?>₫</span>
                                <span id="initial-price"><?php echo number_format($value_list['price_product'],0,' ','.') ?>₫</span>
                            </div>
                        </div>
                        <div class="title-btn">
                            <a href="?go=cart&id_product=<?php echo $value_list['id_product'] ?>&id_list=<?php echo $value_list['id_list'] ?>&action=addListtoCart"> <button class="btn-add-cart">THÊM VÀO GIỎ</button> </a>
                            <a href="?go=product-detail&id_product=<?php echo $value_list['id_product'] ?>"> <button class="btn-detail-product">XEM CHI TIẾT</button> </a>
                        </div>
                    </div>
                </div>

            <?php
                }
            }
            ?>
         
        </div>
    </div>

</body>

</html>
