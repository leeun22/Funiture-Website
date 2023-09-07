<!DOCTYPE html>
<html lang="en">

<head>
    <title>Slide product hot | Swiper.js</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/feature-product-slide.css" rel="stylesheet">
    <link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Font GG-->
</head>

<body>

    <!-- Load All Product Hot Type Slide (SwiperJS) -->

    <div class="title-main">
        <p id="title-kp">SẢN PHẨM BÁN CHẠY</p> <br>
        <hr id="hr-kp"> <br>
        <p id=title-kp-2> Khám phá những <span>sản phẩm</span> nổi bật của chúng tôi </p>
    </div>

    <section class="slide-feature-product">
        <div class="swiper mySwiper container-productHot">
            <div class="swiper-wrapper content-productHot">

                <?php
                foreach ($list_productHot as $row_productHot) {
                    extract($row_productHot);
                ?>

                    <div class="swiper-slide ' . $mr . '">
                        <div class="card">
                            <div class="images">
                                <img id="img_place" src="<?php echo $row_productHot['img_product'] ?>">
                                <span class="discout"> -<?php echo $row_productHot['discount_percent'] ?>% </span>
                                <i class="far fa-bookmark"></i>
                            </div>

                            <div class="title-cap">
                                <a href="?go=product-detail&id_product=<?php echo $row_productHot['id_product'] ?>" id="title-cap-name"> <?php echo $row_productHot['name_product'] ?> </a>
                                <div class="rate-price">
                                    <div class="rate-star">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                    </div>
                                    <div class="title-price">
                                        <span id="reduced-price"> <?php echo number_format($row_productHot['discount_amout'], 0, ' ', '.') ?>₫ </span>
                                        <span id="initial-price"> <?php echo number_format($row_productHot['price_product'], 0, ' ', '.') ?>₫ </span>
                                    </div>
                                </div>

                                <div class="title-btn">
                                    <a href="?go=cart&id_product=<?php echo $row_productHot['id_product'] ?>"> <button class="btn-add-cart">THÊM VÀO GIỎ</button> </a>
                                    <a href="?go=product-detail&id_product=<?php echo $row_productHot['id_product'] ?>"> <button class="btn-detail-product">XEM CHI TIẾT</button> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
        </div>


        <!-- <div class="swiper-pagination"></div> -->
    </section>


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- initializing swiper slider -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            // Show 4 card trong 1 slide
            // Có khoảng cách giữa các card là 15px
            slidesPerView: 4,
            spaceBetween: 15,
            grabCursor: true,
            // Set chuyển động cho slide mỗi 2500s 1 lần next
            // Khi di chuột vào (pauseOnMouse) thì dừng slide
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            // Số card next trong 1 slide là 1 trên tổng 4 card
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            // Responsive Card theo kích thước màn hình bằng thuộc tính (breakpoints) 
            breakpoints: {
                // Từ 0px: 1 cột
                0: {
                    slidesPerView: 1,
                },
                // Từ 685px: 2 cột
                685: {
                    slidesPerView: 2,
                },
                // Từ 992px: 3 cột
                992: {
                    slidesPerView: 3,
                },
                // Từ 1450: 3 cột
                1450: {
                    slidesPerView: 4,
                },
            },
        });
    </script>
</body>

</html>