<?php
include_once("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" href="./css/product-menu.css" rel="stylesheet" />
    <title>Product Category</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!--BÀN GHẾ GỖ-->
    <div class="container khampha" id="section3">
        <?php
            if (isset($_GET['id_cate']) && !empty($_GET['id_cate'])) {
                $id= $_GET['id_cate'];
                //Lấy ra tất cả các sp
                $row = loadall_category_product($id);
        ?>
        <div class="title-main">
            <p id="title-kp">
                <?php 
                    switch ($_GET['id_cate']) {
                        case "1":
                        echo "BÀN GHẾ GỖ";
                        break;
                        case "2":
                        echo "BỘ BÀN ĂN";
                        break;
                        case "3":
                        echo "GIƯỜNG NGỦ";
                        break;
                        case "4":
                        echo "KỆ TI VI";
                        break;
                        case "5":
                        echo "TỦ QUẦN ÁO";
                        break;
                        case "6":
                        echo "TỦ GIÀY DÉP";
                        break;
                        case "7": 
                        echo "BÀN TRANG ĐIỂM";
                        break;
                        case "8":
                        echo "PHÒNG THỜ";
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
                
                foreach ($row as $key => $value_cate) {
            ?>
                <div class="col-md-4 place_1">
                    <div class="title-img">
                        <!-- Responsive (img) width, height px trc, sau đó css fix width, height %. -->
                        <img height="300" id="img_place" src="<?php echo $value_cate['img_product'] ?>" />

                        <i class="far fa-bookmark"></i>
                    </div>

                    <div class="title-cap">
                        <a href="?go=product-detail&id_product=<?php echo $value_cate['id_product'] ?>" id="title-cap-name"> <?php echo $value_cate['name_product'] ?></a>
                        <div class="rate-price">
                            <div class="rate-star">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                            <div class="title-price">
                                <span id="reduced-price"><?php echo number_format($value_cate['price_product'],0,' ','.') ?>₫</span>
                                <span id="initial-price"><?php echo number_format($value_cate['price_product'],0,' ','.') ?>₫</span>
                            </div>
                        </div>
                        <div class="title-btn">
                            <a href="?go=cart&id_product=<?php echo $value_cate['id_product'] ?>&id_cate=<?php echo $value_cate['id_cate'] ?>&action=addCatetoCart"> 
                                <button onclick="myNotificationCart()" class="btn-add-cart">THÊM VÀO GIỎ</button> 
                            </a>
                            <a href="?go=product-detail&id_product=<?php echo $value_cate['id_product'] ?>"> <button class="btn-detail-product">XEM CHI TIẾT</button> </a>
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
