<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CHECK OUT</title>
    <link type="text/css" href="./css/checkout.css" rel="stylesheet" />
</head>

<body>
    <div class="container background-checkout">
        <!-- Kiểm tra user đã đăng nhập hay chưa, nếu user đăng nhập r mới show trang checkout -->
        <?php
            // echo "<pre>";
            // print_r($_SESSION['user']);
            // echo "</pre>";

            include_once("./dbconnect.php");
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
        ?>
        <br>

        <form method="POST" action="order.php" name="order" class="order">
            <!-- Kiểm tra có product trong giỏ hàng chưa, nếu có r mới show trang checkout -->
            <?php
                $_SESSION['sum_price'] = 0;
                //Kiểm tra xem $_SESSION['carts'] có tồn tại hay k và trong giỏ phải có sp
                if (isset($_SESSION['carts']) && !empty($_SESSION['carts'])) {
            ?>
            
            <div class="row">
                <!-- ĐỊA CHỈ GIAO HÀNG -->
                <div class="col-md-6">
                    <div class="infor-address-customer">
                        <h5 class="title-infor-customer">ĐỊA CHỈ GIAO HÀNG</h5>

                        <div class="customer">
                            <label for="name">Họ và tên <span>*</span> </label> <br>
                            <input type="text" id="fullname" name="fullname" value="<?php echo $user['name_customer'] ?>" placeholder="Your name.." required>
                            <p id="infor-tag-p-1">
                                <label for="phone">Số điện thoại <span>*</span> </label> <br>
                                <input type="tel" id="phone" name="phone" value="0<?php echo $user['phone_customer'] ?>" placeholder="Your telephone.." required min="10" max="12">
                            </p>
                            <p id="infor-tag-p-2">
                                <label for="email">Địa chỉ email <span>*</span> </label> <br>
                                <input type="email" id="email" name="email" value="<?php echo $user['email_customer'] ?>" placeholder="Your email.." required>
                            </p>
                            <p id="infor-tag-p-1">
                                <label for="city">Tỉnh / Thành phố <span>*</span> </label> <br>
                                <input type="text" id="city" name="city" placeholder="Your city.." required>
                            </p>
                            <p id="infor-tag-p-2">
                                <label for="town">Quận / Huyện <span>*</span> </label> <br>
                                <input type="text" id="town" name="town" placeholder="Your town.." required>
                            </p>
                            </table>

                            <label for="address">Địa chỉ <span>*</span> </label> <br>
                            <input type="text" id="address" name="address" placeholder="Your address.." required>

                            <h5 style="margin-top:10px"> <strong>THÔNG TIN THÊM</strong> </h5>
                            <label for="notes">Lưu ý cho đơn hàng</label>
                            <textarea id="notes" name="notes" placeholder="Write something.." style="height:100px"></textarea>
                        </div>

                        <!-- PHƯƠNG THỨC THANH TOÁN -->
                        <div class="payment-methods" style="margin:30px 0">
                            <h5> <strong>PHƯƠNG THỨC THANH TOÁN</strong> </h5>

                            <div class="type-methods">
                                <div class="icon-payment-type">
                                    <div id="icon-banking">
                                        <img src="./images/payment/icons8-bidv.svg" style="width:36px;">
                                        <p>Chuyển khoản ngân hàng</p>
                                    </div> &emsp;
                                    <div id="icon-delivery">
                                        <i class='fas fa-money-check' style="font-size: 26px;"></i>
                                        <p>Thanh toán khi nhận hàng</p>
                                    </div>
                                </div>

                                <select name="paymentType" multiple="multiple" class="payment-type">
                                    <option value="1" class="tablinks" id="payment-banking" onclick="openPayment(event, 'infor-payment-banking')">
                                        
                                    </option>
                                    <option value="2" class="tablinks" id="payment-delivery" onclick="openPayment(event, 'infor-payment-delivery')">
                                        
                                    </option>
                                </select>
                            </div>

                            <div class="infor-methods">
                                <div class="tabcontent" id="infor-payment-banking">
                                    <p style="font-size: 21px;"><strong>Ngân hàng BIDV</strong></p>
                                    <p>Số tài khoản: 21410001084786</p>
                                    <p>Tên chủ tài khoản</p>
                                    <p>PHẠM NGỌC SON - NGÂN HÀNG PHÁT TRIỂN VÀ ĐẦU TƯ BIDV</p>
                                </div>
                                <div class="tabcontent" id="infor-payment-delivery">
                                    Khách hàng thanh toán bằng tiền mặt khi nhận hàng.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- TÓM TẮT ĐƠN HÀNG -->
                    <div class="order-summary">
                        <?php
                        foreach ($_SESSION['carts'] as $key => $value) {
                        ?>
                        <?php
                            // Tổng tiền trên 1 sản phẩm với n số lượng
                            $item_sum = $value['price_product'] * $value['quantity'];
                            // Lưu tổng tiền của sp thứ n vào sum_price, sau mỗi lần tính item_sum, sum_price sẽ cộng tiếp lên
                            $_SESSION['sum_price'] += $item_sum;
                            // Sau mỗi lần item_sum sẽ có một giá trị mới cộng dồn lên
                            $item_sum += $item_sum;
                        }
                        ?>

                        <div class="order-title">
                            <h5 id="title"><strong>TÓM TẮT ĐƠN HÀNG</strong></h5>
                        </div>
                        <hr id="hr-title-checkout" />
                        <div class="product-order">
                            <table border="0" width="100%" class="product-table">
                                <tr>
                                    <td>Thành Tiền</td>
                                    <td id="product-table-ID">
                                        <div class="totalPrice_Products">
                                            <?php echo number_format($_SESSION['sum_price'], 0, ' ', '.') ?>₫
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vận Chuyển</td>
                                    <td id="product-table-ID">Liên hệ phí vận chuyển sau</td>
                                </tr>
                                <tr>
                                    <td>Tổng Cộng</td>
                                    <td id="product-table-ID">
                                        <div class="totalPrice_Products">
                                            <!-- Tổng tiền của tất cả sản phẩm (chưa trừ % giảm giá - nếu có) -->
                                            <?php echo number_format($_SESSION['sum_price'], 0, ' ', '.') ?>₫
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <div class="order-hr">
                                <hr id="order-hr-hr">
                            </div>
                        </div>

                        <div class="product-detail-cart">
                            <table border="0" class="shop-table-checkout">
                                <div class="title-prode-checkout">Sản phẩm</div>
                                <hr id="hr-title-checkout" />
                                <?php
                                foreach ($_SESSION['carts'] as $key => $value) {
                                ?>
                                    <tr style="border-bottom: 1px inset #cccccc82;">
                                        <td width="20%">
                                            <div class="shop-image-checkout">
                                                <img src="<?php echo $value['img_product'] ?>" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="shop-details-checkout">
                                                <div class="productName-checkout">
                                                    <?php echo $value['name_product'] ?>
                                                </div>
                                                <div class="productCode-Quantity-Price-checkout">
                                                    <span> <?php echo $value['code_product'] ?> </span> &nbsp;
                                                    x
                                                    <span> <input type="text" name="quantity" id="quantity-checkout" value="<?php echo $value['quantity'] ?>" min="1" max="5" step="1" title="Quantity" readonly> </span>
                                                    <span id="price-checkout"> <?php echo number_format($value['price_product'], 0, ' ', '.'); ?>₫ </span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                } //đóng foreach        
                                ?>
                            </table>
                        </div>

                        <div class="product-infor">
                            <h6><strong>Thông tin giao hàng</strong></h6>
                            <p>Đối với những sản phẩm có sẵn tại khu vực, Nội Thất Minh Phong sẽ giao hàng trong vòng 2-7 ngày.
                                Đối với những sản phẩm không có sẵn, thời gian giao hàng sẽ được Nội Thất Minh Phong thông báo đến quý khách!
                            </p>
                            <p>Từ 2-6: 8:30 - 17:30</p>
                            <p>Thứ 7, CN: 9:30 - 16:30</p>
                            <a href="?go=bando" style="color: #d26a00e3;">Hệ thống cửa hàng</a>
                        </div>
                        <div class="product-button">
                            <!-- $_POST nhận dl ng dùng nhập vào qua name -->
                            <a href="#"> <button type="submit" name="submit" class="btnCheckout">ĐẶT MUA</button> </a>
                            <!-- <input type="submit" name="submit" value="ĐẶT MUA" class="btnCheckout" /> -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
        

        <?php
            } //đóng if kiểm tra có tồn tại sp nào trong giỏ hàng hay k
            // Ngược lại nếu giỏ hàng trống thì đưa ra thông báo!
            else {
        ?>

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
                <strong>Thông Báo!</strong> Giỏ Hàng Trống. <br /> <a href="?go=home">Tiếp tục mua hàng</a>
            </div>

        <?php
            } //đóng else 
        ?>
        <!-- Kiểm tra nếu người dùng chưa đăng nhập -> hiển thị thông báo yêu cầu người dùng đăng nhập.
        Ng dùng xác nhận chuyển đến trang đăng nhập -> đăng nhập thành công chuyển về trang checkout -->
        <?php
            } else {
                echo ("<script> alert('Vui lòng Đăng nhập trước khi Thanh toán !'); location='?go=login-signup-customer'; </script>");
                // die;
                // header("Location:?go=login-signup-customer");
            }
        ?>

    </div>
            <style>
                .active {
                    background-color: unset;
                }
            </style>
    <!-- Phương thức thanh toán -->
    <script>
        function openPayment(evt, paymentName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(paymentName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("payment-banking").click();
    </script>

</body>

</html>