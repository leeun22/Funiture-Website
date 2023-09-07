<?php
// include_once("library/fun_sp.php"); k cần include lại vì đã thêm trong url, thì tự động khi chạy tới url sẽ gọi tới function
// if (isset($_SESSION['noti_carts']) && $_SESSION['noti_carts'] == 1) {
?>
<!-- <div class="alert alert-success">
//         <button type="button" class="close" data-dismiss="alert" aria-hidden="true"&times;></button>
//         <strong>Thông báo! </strong>Sản phẩm đã được thêm vào giỏ hàng.
//         <a href="?go=cart-detail"><button class="btn btn-danger">Xem chi tiết</button></a>
//     </div> -->
<?php
// unset($_SESSION['noti_carts']);
// }
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" href="./css/home-lienhe.css" rel="stylesheet" />
    <link type="text/css" href="./css/home.css" rel="stylesheet" />
    <link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Font GG-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <title>Home</title>
</head>

<body>
    <div id="quangcao">
        <?php include("slider.php"); ?>
        <?php /**include("quangcao.php"); */ ?>
    </div>

    <!---LỢI ÍCH-->
    <div class="MAIN">
        <div id="scrollR" class="container introduce">
            <div class="introduce-logo">
                <img src="images/LOGO/LOGO.png">
                <hr>
                <h3>NỘI THẤT ĐỒ GỖ</h3>
            </div>
            <div class="row introduce-benefit">
                <div class="col-md-3 introduce-benefit-at-tc-gia-dv">
                    <img src="images/LOGO/Safety icon.jpg">
                    <h5>AN TOÀN HƠN</h5>
                    <P>An toàn là ưu tiên hàng đầu của chúng tôi</P>
                </div>
                <div class="col-md-3 introduce-benefit-at-tc-gia-dv">
                    <img src="images/LOGO/Customization.jpg">
                    <h5>TÙY CHỈNH HƠN</h5>
                    <P>Điều chỉnh phù hợp với nhu cầu của bạn</P>
                </div>
                <div class="col-md-3 introduce-benefit-at-tc-gia-dv">
                    <img src="./images/LOGO/Best price.png">
                    <h5>GIÁ TỐT NHẤT</h5>
                    <P>Không tăng thêm chi phí & giá trị tốt nhất cho đồng tiền</P>
                </div>
                <div class="col-md-3 introduce-benefit-at-tc-gia-dv">
                    <img src="./images/LOGO/More service 2.png">
                    <h5>DỊCH VỤ KHÁC</h5>
                    <P>Cảm thấy an toàn và được hỗ trợ khi chọn sản phẩm của chúng tôi</P>
                </div>
            </div>
        </div>

        <!--GIỚI THIỆU-->

        <div class="app-container" id="section1">
            <div class="app-overlay"></div> <!--bóng đen mờ-->
            <!--Khối text-->
            <div class="app-text-content">
                <div class="app-heading">
                    <p>MINH PHONG</p>
                    <div class="boder-bottom"></div> <!--Gạch ngang-->
                    <h3>Giới thiệu về <span style="color:#dab94e;">chúng tôi</span></h3>
                </div>
                <div class="app-content">
                    <p id="loadText">
                        &emsp;&ensp; <span>Nội Thất Minh Phong</span> chuyên sản xuất đồ gỗ nội thất cho các hộ gia đình
                        với những sản phẩm có đường nét chạm khắc tinh xảo, cầu kì đến đơn giản,
                        tinh tế, tiện ích đảm bảo với khách hàng rằng mỗi sản phẩm đều được <span>chăm
                            chút</span> đến từng đường vân gỗ để tạo nên một <span>sản phẩm hoàn hảo nhất.</span>
                        Để đáp ứng nhu cầu khách hàng, Nội Thất Minh Phong có rất <span>đa dạng</span> những sản phẩm gỗ như:
                        gỗ hương đỏ lào, gỗ gõ đỏ, gỗ gụ, gỗ hương nam phi, gỗ xoan đào, gỗ sồi… Với những sản phẩm như: bàn ghế, giường tủ, bàn ăn, bàn thờ, tủ thờ có chất lượng cao, đánh bóng nguyên vân gỗ quý để khách hàng lựa chọn...
                    </p>
                    <a href="?go=gioithieu">CHI TIẾT</a>
                </div>
            </div>
        </div>

        <!--SP BÁN CHẠY-->
        <?php include("feature-product-slide.php") ?>

        <!--BỘ BÀN ĂN-->
        <div class="container khampha" id="section2">
            <div class="khampha-background">
                <div class="title-main">
                    <p id="title-kp">BỘ BÀN ĂN</p> <br>
                    <hr id="hr-kp"> <br>
                    <p id=title-kp-2> Khám phá những <span>sản phẩm</span> nổi bật của chúng tôi </p>
                </div>

                <div class="row place">
                    <?php
                    $i = 0;
                    // $img_path="images/";
                    foreach ($listSome_banan as $row_banan) {
                        extract($row_banan);
                        // $imgsp = $img_path.$img;
                        if (($i == 2) || ($i == 5) || ($i == 8)) {
                            $mr = "";
                        } else {
                            $mr = "mr";
                        }
                    ?>
                        <div class="col-xxl-3 place_1  ' . $mr . '">
                            <div class="title-img">
                                <!-- Responsive (img) width, height px trc, sau đó css fix width, height %. -->
                                <img id="img_place" src="<?php echo $row_banan['img_product'] ?>">

                                <i class="far fa-bookmark"></i>
                            </div>

                            <div class="title-cap">
                                <a href="?go=product-detail&id_product=<?php echo $row_banan['id_product'] ?>" id="title-cap-name"> <?php echo $row_banan['name_product'] ?> </a>
                                <div class="rate-price">
                                    <div class="rate-star">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                    </div>
                                    <div class="title-price">
                                        <span id="reduced-price"> <?php echo number_format($row_banan['price_product'], 0, ' ', '.') ?>₫</span>
                                        <span id="initial-price"> <?php echo number_format($row_banan['price_product'], 0, ' ', '.') ?>₫</span>
                                    </div>
                                </div>
                                <div class="title-btn">
                                    <!-- <button onclick="myNotificationCartBA()" class="btn-add-cart">THÊM VÀO GIỎ</button> -->
				    <a href="?go=cart&id_product=<?php echo $row_banghe['id_product'] ?>"> <button class="btn-add-cart">THÊM VÀO GIỎ</button> </a>
                                    <a href="?go=product-detail&id_product=<?php echo $row_banan['id_product'] ?>"> <button class="btn-detail-product">XEM CHI TIẾT</button> </a>
                                </div>
                                <!-- Box thông báo sp đc thêm vào giỏ hàng thành công -->
                               <!-- <div id="box-notification">
                                    <img src="./images/icons8-checkmark.svg">
                                    <span>Thêm vào giỏ hàng thành công !</span>
                                    <span class="btn-delete-noti"> &times; </span> <br>
                                    <a href="?go=cart-detail"> <button class="check-cart">XEM GIỎ HÀNG</button> </a>
                                </div> -->
                            </div>
                        </div>

                    <?php
                        $i += 1;
                        // include("./library/fun_noticart.php");
                    }
                    ?>
                </div>

                <div class="titleMore">
                    <a href="?go=product-category&id_cate=<?php echo $row_banan['id_cate'] ?>"> <button class="btn-more">XEM THÊM</button> </a>
                </div>
            </div>
        </div>

        <!--BÀN GHẾ GỖ-->
        <div class="container khampha" id="section3">
            <!-- <div class="khampha-background"> -->
            <div class="title-main">
                <p id="title-kp">BÀN GHẾ GỖ</p> <br>
                <hr id="hr-kp"> <br>
                <p id=title-kp-2> Khám phá những <span>sản phẩm</span> <br>được nhiều người ưa chuộng nhất của chúng tôi </p>
            </div>

            <div class="row place">

                <?php
                $i = 0;
                // $img_path="images/";
                foreach ($listSome_bobanghe as $row_banghe) {
                    extract($row_banghe);
                    // $imgsp = $img_path.$img;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                ?>
                    <div class="col-xxl-3 place_1  ' . $mr . '">
                        <div class="title-img">
                            <img id="img_place" src="<?php echo $row_banghe['img_product'] ?>">

                            <i class="far fa-bookmark"></i>
                        </div>

                        <div class="title-cap">
                            <a href="?go=product-detail&id_product=<?php echo $row_banghe['id_product'] ?>" id="title-cap-name"> <?php echo $row_banghe['name_product'] ?> </a>
                            <div class="rate-price">
                                <div class="rate-star">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <div class="title-price">
                                    <span id="reduced-price"> <?php echo number_format($row_banghe['price_product'], 0, ' ', '.') ?>₫ </span>
                                    <span id="initial-price"> <?php echo number_format($row_banghe['price_product'], 0, ' ', '.') ?>₫ </span>
                                </div>
                            </div>
                            <div class="title-btn">
                                <a href="?go=cart&id_product=<?php echo $row_banghe['id_product'] ?>"> <button class="btn-add-cart">THÊM VÀO GIỎ</button> </a>
                                <a href="?go=product-detail&id_product=<?php echo $row_banghe['id_product'] ?>"> <button class="btn-detail-product">XEM CHI TIẾT</button> </a>
                            </div>
                        </div>
                    </div>
                <?php
                    $i += 1;
                    // include("./library/fun_noticart.php");
                }
                ?>
            </div>

            <div class="titleMore">
                <a href="?go=product-category&id_cate=<?php echo $row_banan['id_cate'] ?>"> <button class="btn-more">XEM THÊM</button> </a>
            </div>
            <!-- </div> -->
        </div>

        <!--GIƯỜNG NGỦ-->
        <div class="container khampha" id="section3">
            <div class="khampha-background">
                <div class="title-main">
                    <p id="title-kp">GIƯỜNG NGỦ</p> <br>
                    <hr id="hr-kp"> <br>
                    <p id=title-kp-2> Khám phá những <span>sản phẩm</span> <br>được nhiều người ưa chuộng nhất của chúng tôi </p>
                </div>

                <div class="row place">
                    <?php
                    $i = 0;
                    // $img_path="images/";
                    foreach ($listSome_giuongngu as $row_giuongngu) {
                        extract($row_giuongngu);
                        // $imgsp = $img_path.$img;
                        if (($i == 2) || ($i == 5) || ($i == 8)) {
                            $mr = "";
                        } else {
                            $mr = "mr";
                        }
                    ?>
                        <div class="col-xxl-3 place_1  ' . $mr . '">
                            <div class="title-img">
                                <img id="img_place" src="<?php echo $row_giuongngu['img_product'] ?>">

                                <i class="far fa-bookmark"></i>
                            </div>

                            <div class="title-cap">
                                <a href="?go=product-detail&id_product=<?php echo $row_giuongngu['id_product'] ?>" id="title-cap-name"> <?php echo $row_giuongngu['name_product'] ?> </a>
                                <div class="rate-price">
                                    <div class="rate-star">
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                    </div>
                                    <div class="title-price">
                                        <span id="reduced-price"> <?php echo number_format($row_giuongngu['price_product'], 0, ' ', '.') ?>₫ </span>
                                        <span id="initial-price"> <?php echo number_format($row_giuongngu['price_product'], 0, ' ', '.') ?>₫ </span>
                                    </div>
                                </div>
                                <div class="title-btn">
                                    <a href="?go=cart&id_product=<?php echo $row_giuongngu['id_product'] ?>"> <button class="btn-add-cart">THÊM VÀO GIỎ</button> </a>
                                    <a href="?go=product-detail&id_product=<?php echo $row_giuongngu['id_product'] ?>"> <button class="btn-detail-product">XEM CHI TIẾT</button> </a>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i += 1;
                        // include("./library/fun_noticart.php");
                    }
                    ?>
                </div>

                <div class="titleMore">
                    <a href="?go=product-category&id_cate=<?php echo $row_giuongngu['id_cate'] ?>"> <button class="btn-more">XEM THÊM</button> </a>
                </div>
            </div>
        </div>

        <!--BAN THO-->
        <div class="container khampha" id="section4">
            <div class="title-main">
                <p id="title-kp">BÀN THỜ</p> <br>
                <hr id="hr-kp"> <br>
                <p id=title-kp-2> Khám phá những <span>sản phẩm</span> <br>được nhiều người ưa chuộng nhất của chúng tôi </p>
            </div>

            <div class="row place">
                <?php
                $i = 0;
                // $img_path="images/";
                foreach ($listSome_bantho as $row_bantho) {
                    extract($row_bantho);
                    // $imgsp = $img_path.$img;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                ?>
                    <div class="col-xxl-3 place_1  ' . $mr . '">
                        <div class="title-img">
                            <img id="img_place" src="<?php echo $row_bantho['img_product'] ?>">

                            <i class="far fa-bookmark"></i>
                        </div>

                        <div class="title-cap">
                            <a href="?go=product-detail&id_product=<?php echo $row_bantho['id_product'] ?>" id="title-cap-name"> <?php echo $row_bantho['name_product'] ?> </a>
                            <div class="rate-price">
                                <div class="rate-star">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <div class="title-price">
                                    <span id="reduced-price"> <?php echo number_format($row_bantho['price_product'], 0, ' ', '.') ?>₫ </span>
                                    <span id="initial-price"> <?php echo number_format($row_bantho['price_product'], 0, ' ', '.') ?>₫ </span>
                                </div>
                            </div>
                            <div class="title-btn">
                                <a href="?go=cart&id_product=<?php echo $row_bantho['id_product'] ?>"> <button class="btn-add-cart">THÊM VÀO GIỎ</button> </a>
                                <a href="?go=product-detail&id_product=<?php echo $row_bantho['id_product'] ?>"> <button class="btn-detail-product">XEM CHI TIẾT</button> </a>
                            </div>
                        </div>
                    </div>
                <?php
                    $i += 1;
                }
                ?>
            </div>

            <div class="titleMore">
                <a href="?go=product-category&id_cate=<?php echo $row_bantho['id_cate'] ?>"> <button class="btn-more">XEM THÊM</button> </a>
            </div>
        </div>

        <!--TIN TUC-->
        <div class="container khampha" id="section5">
            <div class="khampha-background">
                <div class="title-main">
                    <p id="title-kp">TIN TỨC</p> <br>
                    <hr id="hr-kp"> <br>
                    <p id=title-kp-2> Nơi cung cấp những <span>thông tin</span> bạn cần biết </p>
                </div>

                <div class="row place">
                    <?php
                    foreach ($list_news as $row_ftnews) {
                    ?>
                        <div class="col-xxl-3 place_1">
                            <div class="title-img">
                                <img id="img_place" src="<?php echo $row_ftnews['img_new'] ?>">
                            </div>
                            <div class="place-btn">
                                <a href="?go=news-detail#"> <button class="btn-detail">XEM CHI TIẾT</button> </a>
                            </div>
                            <div class="place-cap">
                                <a href="?go=news-detail#" id="name-news"><b><?php echo $row_ftnews['name_new'] ?></b></a>
                                <p id="des-news"><?php echo $row_ftnews['description_short'] ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="titleMore">
                    <a href="?go=product-news"> <button class="btn-more" id="resbtnMorre">XEM THÊM</button> </a>
                </div>

            </div>
        </div>

        <!--Liên Hệ-->
        <div class="contact" id="section6">
            <div class="contact-overlay"></div>

            <div class="contact-text">
                <h2 class="contact-title">LIÊN LẠC</h2>
                <hr id="hr-contact"> <br>
                <div class="contact-section">
                    <p class="contact-section-heading">
                        Nếu bạn có bất kỳ câu hỏi nào, <br> vui lòng <span>liên hệ với</span>
                        chúng tôi. Chúng tôi ở đây để hỗ trợ bạn !
                    </p> <br>
                </div>

                <div class="container contact-content">
                    <div class="row contact-row">
                        <div class="col-lg-5 contact-content-info">
                            <p><i class="ti-location-pin" id="contact-content-icon"></i>Liên Hà, Đông Anh, Hà Nội</p>
                            <p><i class="ti-facebook" id="contact-content-icon"></i><a href="https://www.facebook.com/noithatminhphong2015" style="color: white;">Nội Thất Minh Phong</a></p>
                            <p><i class="ti-mobile" id="contact-content-icon"></i>Phone: 096 822 0298</p>
                            <p><i class="ti-email" id="contact-content-icon"></i>Email: phamminhphong2015@gmail.com</p>
                            <iframe class="contact-content-ban-do" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3129.225983302949!2d105.89780748761406!3d21.14054362199358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135071ff56d7b45%3A0xc79a0468624f214d!2zTuG7mWkgdGjhuqV0IG1pbmggcGhvbmc!5e0!3m2!1svi!2s!4v1622994294413!5m2!1svi!2s" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-lg-7 contact-content-form">
                            <form action="contact_submit.php" method="POST" name="user">
                                <div class="contact-content-form-name">
                                    <input type="text" name="fullname" placeholder="Name" required id="" class="form-control">
                                </div>
                                <div class="contact-content-form-email">
                                    <input type="email" name="email" placeholder="Email" required id="" class="form-control">
                                </div>
                                <div class="contact-content-form-message">
                                    <input type="text" name="comments" placeholder="Message" required id="" style="height: 180px;" class="form-control">
                                </div>
                                <input type="submit" name="submit" value="SEND" class="contact-content-form-submit">
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- RIGHT SCROLL -->
    <!-- <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");
        // get the content: tạo biến nhận giá trị id để thực hiện cuộn
        let myRightscroll = document.getElementById("scrollR");

        // When the user scrolls down 250px from the top of the document, show the content
        window.onscroll = function() {
            scrollFunctionRight()
            scrollFunction()
            scrollFunctionMenu()
            scrollLoadAboutUs()
        };

        function scrollFunctionRight() {
            if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
                myRightscroll.style.display = "block";
            } else {
                myRightscroll.style.display = "none";
            }
        }

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            //smooth scrolling
            document.querySelector('body').scrollIntoView({
                behavior: 'smooth'
            });
            // document.body.scrollTop = 0;
            // document.documentElement.scrollTop = 0;
        }

        var navbar = document.getElementById("scrollMenu");
        var sticky = navbar.offsetTop;

        function scrollFunctionMenu() {
            if (window.pageYOffset >= sticky) {
                // add class sticky on the navbar when scroll window, class sticky will be visible
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }

        // Load Text when scroll down: 1280px, speed: 50s
        var i = 0;
        var txt = ' gỗ hương đỏ lào, gỗ gõ đỏ, gỗ gụ, gỗ hương nam phi, gỗ xoan đào, gỗ sồi… Với những sản phẩm như: bàn ghế, giường tủ, bàn ăn, bàn thờ, tủ thờ có chất lượng cao, đánh bóng nguyên vân gỗ quý để khách hàng lựa chọn...';
        var speed = 50;

        function scrollLoadAboutUs() {
            if (document.body.scrollTop > 1280) {
                if (i < txt.length) {
                    document.getElementById("loadText").innerHTML += txt.charAt(i);
                    i++;
                    setTimeout(scrollLoadAboutUs, speed);
                }
            }
        }
    </script> -->
</body>

</html>