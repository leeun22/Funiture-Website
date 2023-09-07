<?php include("dbconnect.php"); ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" href="./css/sanpham-menu.css" rel="stylesheet" />
    <title>GIƯỜNG NGỦ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!--GIUONG NGU-->
    <div class="khampha" id="section4">
        <div class="title-main">
            <p id="title-kp">GIƯỜNG NGỦ</p> <br>
            <hr id="hr-kp"> <br>
            <!-- <p id=title-kp-2> Khám phá những <span>sản phẩm</span> <br>được nhiều người ưa chuộng nhất của chúng tôi </p> -->
        </div>

        <div class="place">
            <?php
            $i = 0;
            // $img_path="images/";
            foreach ($list_giuongngu as $row_giuongngu) {
                extract($row_giuongngu);
                // $imgsp = $img_path.$img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo
                ' 
                <div class="place_1  ' . $mr . '">
                    <div class="title-img"> 
                        <img id="img_place" src="' . $img_giuongngu . '">
                    
                        <i class="far fa-bookmark"></i> 
                    </div>

                    <div class="title-cap">
                        <span id="title-cap-name"> ' . $name_giuongngu . '</span>
                        <div class="rate-price">
                            <div class="rate-star">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star_half</i>
                            </div>
                            <div class="title-price">
                                <span id="reduced-price">' . $price_giuongngu . '.000₫</span>
                                <span id="initial-price">' . $price_giuongngu . '.000₫</span>
                            </div>
                        </div>
                        <div class="title-btn">
                            <button class="btn-add-cart"> <a href="?go=order">THÊM VÀO GIỎ </a></button>
                            <button class="btn-detail-product">XEM CHI TIẾT</button>
                        </div>
                    </div>     
                </div> 
                
                ';
                $i += 1;
            }
            ?>

        </div>
    </div>
</body>

</html>