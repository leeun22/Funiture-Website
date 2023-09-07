<?php include("dbconnect.php"); ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" href="./css/sanpham-menu.css" rel="stylesheet" />
    <title>BỘ BÀN ĂN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!--SP Bộ Bàn Ăn-->
    <div class="khampha" id="section2">
        <div class="title-main">
            <p id="title-kp">BỘ BÀN ĂN</p> <br>
            <hr id="hr-kp"> <br>
            <!-- <p id=title-kp-2> Khám phá những <span>sản phẩm</span> nổi bật của chúng tôi </p> -->
        </div>

        <div class="place">
            <?php
            $i = 0;
            // $list_banan = loadall_sanpham_banan();
            // $img_path="images/";
            foreach ($list_banan as $row_banan) {
                extract($row_banan);
                // $imgsp = $img_path.$img;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                ?>
                
                <div class="place_1  ' . $mr . '">
                <div class="title-img"> 
                    <img id="img_place" src="<?php echo $row_banan['img_product'] ?>">
                    
                    <i class="far fa-bookmark"></i> 
                </div>

                <div class="title-cap">
                    <span id="title-cap-name"> <?php echo $row_banan['name_product'] ?> </span>
                    <div class="rate-price">
                        <div class="rate-star">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star_half</i>
                        </div>
                        <div class="title-price">
                            <span id="reduced-price"> <?php echo number_format($row_banan['price_product'],0,' ','.') ?>₫</span>
                            <span id="initial-price"> <?php echo number_format($row_banan['price_product'],0,' ','.') ?>₫</span>
                        </div>
                    </div>
                    <div class="title-btn">
                        <button class="btn-add-cart"> <a href="?go=cart&id_product=<?php echo $row_banan['id_product'] ?>">THÊM VÀO GIỎ </a></button>
                        <button class="btn-detail-product"> <a href="?go=product-detail&id_product=<?php echo $row_banan['id_product'] ?>">XEM CHI TIẾT</a></button>
                    </div>
                </div>     
            </div> 
            <?php
                $i += 1;
                }
            ?>
        </div>
    </div>
</body>

</html>

<!-- <div class="khampha" id="section2">
            <div class="title-main">
                <p id="title-kp">BỘ BÀN ĂN</p> <br>
                <hr id="hr-kp"> <br> <br>
            </div>

            <div class="place">
                <div class="place_1">
                    <img id="img_place" src="images/banhd/bàn ăn đá ghế grace 8tr.jpg">
                    <div class="title-place">CHI TIẾT</div>
                    <div class="title-cap">
                        <p id="title-cap-name">Bàn Ăn Mặt Đá Grace Bọc Da 6 Ghế</p>
                        <p id="title-cap-price">8000000₫</p>
                        <button class="title-cap-button">MUA HÀNG</button>
                    </div>     
                </div>
                <div class="place_2">
                    <img id="img_place" src="images/banhd/hd4.jpg">
                    <div class="title-place">CHI TIẾT</div>
                    <div class="title-cap">
                        <p id="title-cap-name">Bộ Bàn Ăn Chân Trụ Mặt Đá Trắng Ghế Bọc Vải Nhung Siêu Đẹp</p>
                        <p id="title-cap-price">5500000₫</p>
                        <button class="title-cap-button">MUA HÀNG</button>
                    </div>  
                </div>
                <div class="place_3">
                    <img id="img_place" src="images/banhd/nâu.jpg">
                    <div class="title-place">CHI TIẾT</div>
                    <div class="title-cap">
                        <p id="title-cap-name">Bàn Ăn Mặt Đá Vân Hiện Đại 6 Ghế Bọc Da Nâu Mật</p>
                        <p id="title-cap-price">4500000₫</p>
                        <button class="title-cap-button">MUA HÀNG</button>
                    </div>  
                </div>
                <div class="place_4">
                    <img id="img_place" src="images/banhd/hd1.jpg">
                    <div class="title-place">CHI TIẾT</div>
                    <div class="title-cap">
                        <p id="title-cap-name">Bộ Bàn Ăn Mặt Đá Phù Hợp Với Chung Cư Nhỏ 4 Ghế</p>
                        <p id="title-cap-price">4500000₫</p>
                        <button class="title-cap-button">MUA HÀNG</button>
                    </div>  
                </div>
                <div class="place_5">
                    <img id="img_place" src="images/banhd/hd2.jpg">
                    <div class="title-place">CHI TIẾT</div>
                    <div class="title-cap">
                        <p id="title-cap-name">Bộ Bàn Ăn Chữ Nhật 6 Ghế Giảm Giá Sốc</p>
                        <p id="title-cap-price">4500000₫</p>
                        <button class="title-cap-button">MUA HÀNG</button>
                    </div>  
                </div>
                <div class="place_6">
                    <img id="img_place" src="images/banhd/hd3.jpg">
                    <div class="title-place">CHI TIẾT</div>
                    <div class="title-cap">
                        <p id="title-cap-name">Bộ Bàn Ăn Mặt Đá Tròn Hiện Đại 6 Ghế</p>
                        <p id="title-cap-price">5500000₫</p>
                        <button class="title-cap-button">MUA HÀNG</button>
                    </div>  
                </div>
            </div>
        </div> -->