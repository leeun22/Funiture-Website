<?php include("dbconnect.php"); ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" href="./css/gioithieu.css" rel="stylesheet" />
    <title>ABOUT US</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!---LỢI ÍCH-->
    <div class="MAIN">
        <div class="container introduce">
            <div class="introduce-logo">
                <h6>NỘI THẤT MINH PHONG </h6>
                <hr>
                <h6 style="font-size: 20px; margin-bottom:70px">Những lợi ích chúng tôi đem đến cho khách hàng của mình</h6>
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
        <div id="scrollR_GT" class="app-container">
            <div class="app-overlay"></div> <!--bóng đen mờ-->
            <!--Khối text-->
            <div class="app-text-content">
                <div class="app-heading">
                    <p>MINH PHONG</p>
                    <div class="boder-bottom"></div> <!--Gạch ngang-->
                    <h3>Giới thiệu về <span style="color:#dab94e;">chúng tôi</span></h3>
                </div>
                <div class="app-content">
                    <p id="loadText_GT"> &emsp;&ensp; <span>Nội Thất Minh Phong</span> chuyên sản xuất đồ gỗ nội thất cho các hộ gia đình
                        với những sản phẩm có đường nét chạm khắc tinh xảo, cầu kì đến đơn giản,
                        tinh tế, tiện ích đảm bảo với khách hàng rằng mỗi sản phẩm đều được <span>chăm
                            chút</span> đến từng đường vân gỗ để tạo nên một <span>sản phẩm hoàn hảo nhất.</span>
                        Để đáp ứng nhu cầu khách hàng, Nội Thất Minh Phong có rất <span>đa dạng</span> những sản phẩm
                        gỗ như: gỗ hương đỏ lào, gỗ gõ đỏ, gỗ gụ, gỗ hương nam phi, gỗ xoan đào, gỗ sồi…
                        Với những sản phẩm như: bàn ghế, giường tủ, bàn ăn, bàn thờ, tủ thờ có chất lượng cao,
                        đánh bóng nguyên vân gỗ quý để khách hàng lựa chọn. Đến với chúng tôi khách hàng hoàn toàn có thể yên tâm,
                        tin tưởng tìm kiếm được những sản phẩm tốt với giá cả cạnh tranh rẻ nhất trên thị trường. Chúng tôi luôn mong
                        muốn mang lại cho khách hàng sự tiện nghi thoải mái trong chính ngôi nhà thân yêu của mình.
                        
                    </p>
                </div>
            </div>
        </div>


    <!-- <script>
        window.onscroll = function()  {
            scrollLoadAboutUss()
        }
        // Load Text when scroll down: 1280px, speed: 50s
        var i = 0;
        var txt = ' Chúng tôi cam kết: - Đặt chữ Tín lên làm đầu, sản phẩm Rẻ - Bền - Đẹp - Tư vấn, thiết kế mẫu mã theo yêu cầu khách hàng - Sản xuất theo đơn đặt hàng - Bảo hành với từng sản phẩm sản xuất ra - Sản xuất những sản phẩm có chất lượng tốt nhất, thoả mãn tối đa nhu cầu khách hàng với chữ tín đặt lên hàng đầu.';
        var speed = 50;

        function scrollLoadAboutUss() {
            if (document.body.scrollTop > 700) {
                if (i < txt.length) {
                    document.getElementById("loadText").innerHTML += txt.charAt(i);
                    i++;
                    setTimeout(scrollLoadAboutUss, speed);
                }
            }
        }
    </script> -->
</body>

</html>