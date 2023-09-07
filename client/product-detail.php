<?php
include_once("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <link rel="stylesheet" type="text/css" href="./css/product-detail.css" />
    <!-- <link re;="stylesheet" type="text/css" href="./css/demo-dropdown.css" /> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Đã khai báo Font Awesome 5 Icons ở header.php -->
</head>

<body>
    <div class="container">
        <div class="product-detail">
            <?php
            if (isset($_GET['id_product']) && !empty($_GET['id_product'])) {
                $id = $_GET['id_product'];
                //Lấy ra tất cả các sp theo biến id
                $row_detail = loadall_detail_product($id);

                // Thực thi truy vấn lấy tất cả ảnh sp trong bảng images_product thuộc id theo yêu cầu
                $sql = "SELECT * FROM `images_product` WHERE `id_product`='$id'";
                $query = mysqli_query($conn, $sql);
                $data = [];
                while ($row_images = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                    $data[] = array(
                        'id_images' => $row_images['id_images'],
                        'id_product' => $row_images['id_product'],
                        'image' => $row_images['image'],
                    );
                }
                // print_r($data);

            ?>

            <h5 id="title-detail-h5">CHI TIẾT SẢN PHẨM</h5>
            <hr class="hr-title-detail-pro">

            <?php
                foreach ($row_detail as $key => $row_detail) {
            ?>
                <div class="row row-images">
                    <div class="col-md-7 col-images">
                        <div class="product-images">
                            <div class="product-images-column">
                                <img class="images-dot" src="<?php echo $row_detail['img_product'] ?>" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                            </div>

                            <div class="product-images-column">
                                <img class="images-dot" src="<?php echo $row_detail['img_product'] ?>" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                            </div>
                            <div class="product-images-column">
                                <img class="images-dot" src="<?php echo $row_detail['img_product'] ?>" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                            </div>
                        </div>

                        <div class="product-slides">
                            <div class="product-mySlides">
                                <div class="numbertext">1 / 6</div>
                                <img id="myimage" src="<?php echo $row_detail['img_product'] ?>" style="width:100%" alt="The Woods">
                                <div id="myresult" class="img-zoom-result"></div>
                            </div>

                            <div class="product-mySlides">
                                <div class="numbertext">2 / 6</div>
                                <img id="myimage" src="<?php echo $row_detail['img_product'] ?>" style="width:100%" alt="The Woods">
                            </div>

                            <div class="product-mySlides">
                                <div class="numbertext">3 / 6</div>
                                <img id="myimage" src="<?php echo $row_detail['img_product'] ?>" style="width:100%" alt="The Woods">
                            </div>

                            <div class="product-pre">
                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                            </div>
                            <div class="product-next">
                                <a class="next" onclick="plusSlides(1)">❯</a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-5">
                        <div class="product-infor-detail">
                            <form method="POST" action="?go=cart-bought-now">
                                <div class="product-name">
                                    <strong> <?php echo $row_detail['name_product'] ?> </strong>
                                </div>
                                <div class="product-code">
                                    Mã sản phẩm: <?php echo $row_detail['code_product'] ?>
                                </div>
                                <div class="product-vote">
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star</i>
                                    <i class="material-icons">star_half</i>
                                </div>
                                <div class="product-price">
                                    <?php echo number_format($row_detail['price_product'], 0, ' ', '.') ?>₫
                                </div>
                                <div class="product-material">
                                    <b>Vật liệu</b>
                                    <span> <?php echo $row_detail['material_product'] ?> </span>
                                </div>
                                <div class="product-size">
                                    <b>Kích thước</b>
                                    <span> <?php echo $row_detail['size_product'] ?> </span>
                                </div>
                                <div class="product-quantity">
                                    <!-- Gán cho thẻ input 1 sự kiện onclick, khi ng dg nhấp vào thẻ input đó thì thực hiện sự kiện onclick bắt 1 hàm -->
                                    <!-- handle: xử lý -->
                                    <input type="button" value="-" class="minus-quantity" onclick="handleMinus()">
                                    <!-- Phần hiển thị slg (nhập slg) để kiểu text r thiết lập chỉ cho nhập number. Nếu dg input dạng number thì kí tự e vẫn nhập đc -->
                                    <input type="text" name="quantity" id="quantity" step="1" min="1" max="5" value="1" title="Quantity">
                                    <input type="button" value="+" class="plus-quantity" onclick="handlePlus()">
                                </div>
                                <input type="hidden" name="id_product" value="<?php echo $row_detail['id_product'] ?>">
                                <span class="product-button">
                                    <button type="submit" name="submit" class="btnBought"> MUA NGAY </button>

                                    <a href="?go=cart&id_product=<?php echo $row_detail['id_product'] ?>&action=addProDetailtoCart">
                                        <button type="button" class="btnAddCart"> THÊM VÀO GIỎ </button>
                                    </a>
                                </span>

                                <div class="hotline">
                                    Liên hệ tư vấn và đặt mua: <span>096 822 0298</span>
                                </div>

                                <div class="product-save">
                                    <i class="far fa-bookmark"> &nbsp;</i> Lưu sản phẩm yêu thích
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php include "product-detail-dropdown.php" ?>

                <?php
                    }
                }
                ?>
            </div>
        </div>

    </div>

    <!-- JS next ảnh = click vào ảnh muốn xem -->
    <script>
        //Khai báo biến slideIndex
        let slideIndex = 1;
        //Khai báo hàm showSlides truyền vào biến đó
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("product-mySlides");
            let dots = document.getElementsByClassName("images-dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

    <!-- JS Images Zoom -->
    <script>
        function imageZoom(imgID, resultID) {
            var img, lens, result, cx, cy;
            img = document.getElementById(imgID);
            result = document.getElementById(resultID);
            /*create lens:*/
            lens = document.createElement("DIV");
            lens.setAttribute("class", "img-zoom-lens");
            /*insert lens:*/
            img.parentElement.insertBefore(lens, img);
            /*calculate the ratio between result DIV and lens:*/
            cx = result.offsetWidth / lens.offsetWidth * 1 / 4;
            cy = result.offsetHeight / lens.offsetHeight * 1 / 4;
            /*set background properties for the result DIV:*/
            result.style.backgroundImage = "url('" + img.src + "')";
            result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
            /*execute a function when someone moves the cursor over the image, or the lens:*/
            lens.addEventListener("mousemove", moveLens);
            img.addEventListener("mousemove", moveLens);
            /*and also for touch screens:*/
            lens.addEventListener("touchmove", moveLens);
            img.addEventListener("touchmove", moveLens);

            function moveLens(e) {
                var pos, x, y;
                /*prevent any other actions that may occur when moving over the image:*/
                e.preventDefault();
                /*get the cursor's x and y positions:*/
                pos = getCursorPos(e);
                /*calculate the position of the lens:*/
                x = pos.x - (lens.offsetWidth / 2);
                y = pos.y - (lens.offsetHeight / 2);
                /*prevent the lens from being positioned outside the image:*/
                if (x > img.width - lens.offsetWidth) {
                    x = img.width - lens.offsetWidth;
                }
                if (x < 0) {
                    x = 0;
                }
                if (y > img.height - lens.offsetHeight) {
                    y = img.height - lens.offsetHeight;
                }
                if (y < 0) {
                    y = 0;
                }
                /*set the position of the lens:*/
                lens.style.left = x + "px";
                lens.style.top = y + "px";
                /*display what the lens "sees":*/
                result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
            }

            function getCursorPos(e) {
                var a, x = 0,
                    y = 0;
                e = e || window.event;
                /*get the x and y positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x and y coordinates, relative to the image:*/
                x = e.pageX - a.left;
                y = e.pageY - a.top;
                /*consider any page scrolling:*/
                x = x - window.pageXOffset;
                y = y - window.pageYOffset;
                return {
                    x: x,
                    y: y
                };
            }
        }
    </script>
    <script>
        // Initiate zoom effect:
        imageZoom("myimage", "myresult");
    </script>

    <!-- JS QUANTITY -->
    <script src="./javascript/minus-plus-quantity.js"></script>

</body>

</html>