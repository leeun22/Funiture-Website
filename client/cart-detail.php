<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CART DETAIL</title>
    <link type="text/css" href="./css/cart-detail.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container background-cart">
        <?php
            // echo "<pre>";
            // print_r($_SESSION['carts']);
            // echo "</pre>";

            $_SESSION['sum_price'] = 0;
            //Kiểm tra xem $_SESSION['carts'] có tồn tại hay k và trong giỏ phải có sp
            if (isset($_SESSION['carts']) && !empty($_SESSION['carts'])) {
        ?>
            <!-- SẢN PHẨM TRONG GIỎ HÀNG -->
            <div class="row">
                <!-- col-lg: Kích thước màn hình từ 992px sẽ chia cột 7-3.
                    Dưới 992px, mỗi cột sẽ mặc định 100% theo container.  -->
                <div class="col-lg-7">
                    <div class="shopping-cart">
                        <form method="POST" action="?go=cart-update-pro">
                            <div class="product-title">
                                <h5 id="title"><strong>GiỎ HÀNG CỦA BẠN</strong></h5> <br />
                                <a id="title-more" href="?go=home"> <i class="fa fa-angle-double-left">&nbsp;</i> Mua thêm sản phẩm khác</a>
                            </div>

                            <div class="product-cart">
                                <table border="0" class="shop-table">
                                    <?php
                                    foreach ($_SESSION['carts'] as $key => $value) {
                                    ?>
                                        <tr style="border-bottom: 1px inset #cccccc82;">
                                            <td width="20%">
                                                <div class="shop-image">
                                                    <img src="<?php echo $value['img_product'] ?>" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="shop-details">
                                                    <div class="productName">
                                                        <a href="?go=product-detail&id_product=<?php echo $value['id_product'] ?>">
                                                            <?php echo $value['name_product'] ?>
                                                        </a>
                                                    </div>
                                                    <div class="productCode">
                                                        Mã sản phẩm: <?php echo $value['code_product'] ?>
                                                    </div>
                                                    <div class="productSize">
                                                        Kích Thước: <?php echo $value['size_product'] ?>
                                                    </div>
                                                    <div class="productMaterial">
                                                        Vật Liệu: <?php echo $value['material_product'] ?>
                                                    </div>
                                                    <div class="productPrice">
                                                        <?php echo number_format($value['price_product'], 0, ' ', '.'); ?>₫
                                                    </div>
                                                    <div class="productQuantity">
                                                        <!-- Gán cho thẻ input 1 sự kiện onclick, khi ng dg nhấp vào thẻ input đó thì thực hiện sự kiện onclick bắt 1 hàm -->
                                                        <!-- handle: xử lý -->
                                                        <input type="button" value="-" class="minus-quantity" onclick="handleMinus()">
                                                        <!-- Phần hiển thị slg (nhập slg) để kiểu text r thiết lập chỉ cho nhập number. Nếu dg input dạng number thì kí tự e vẫn nhập đc -->
                                                        <input type="text" name="quantity" id="quantity" value="<?php echo $value['quantity'] ?>" min="1" max="5" step="1" title="Quantity">
                                                        <input type="button" value="+" class="plus-quantity" onclick="handlePlus()">
                                                    </div>

                                                    <!-- Lỗi khi click tăng giảm số lg của sp từ t.2 trở đi -->
                                                    <script src="./javascript/minus-plus-quantity.js"></script>

                                                </div>
                                            </td>
                                            <td width="15%" style="display: contents;">
                                                <div class="action-total">
                                                    <!-- Xóa sản phẩm trong giỏ hàng -->
                                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không ?')" href="?go=cart&id_product=<?php echo $value['id_product'] ?>&action=deleteCartDetail">
                                                        <div class="actionDelete"> &times; </div>
                                                    </a> <!--&times: Ký tự x trong html -->
                                                    <div class="totalPrice">
                                                        <?php
                                                        // Tổng tiền trên 1 sản phẩm với n số lượng
                                                        $item_sum = $value['price_product'] * $value['quantity'];
                                                        // Lưu tổng tiền của sp thứ n vào sum_price, sau mỗi lần item_sum, sum_price sẽ cộng tiếp lên
                                                        $_SESSION['sum_price'] += $item_sum;
                                                        ?>
                                                        <span> <?php echo number_format($item_sum, 0, ' ', '.') ?>₫ </span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    } //đóng foreach        
                                    ?>
                                </table>
                            </div>

                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="id_product" value="<?php echo $value['id_product'] ?>">

                            <div class="update-cart">
                                <button type="submit" name="submit" class="btnUpdate">CẬP NHẬT GIỎ HÀNG</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- TÓM TẮT ĐƠN HÀNG -->

                <div class="col-lg-5">
                    <div class="order-summary">
                        <div class="order-title">
                            <h5 id="title"><strong>TÓM TẮT ĐƠN HÀNG</strong></h5>
                        </div>
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
                            </table>

                            <div class="order-hr">
                                <hr id="order-hr-hr">
                            </div>
                            <div class="productDiscount">
                                <!-- :focus dùng để chọn tất cả các phần tử INPUT, TEXTAREA, SELECT 
                         (khi người dg click chuột vào nó hoặc bấm phím Tab để di chuyển vào nó) -->
                                <!-- Gán cho placeholder=" " rỗng -->
                                <input type="text" class="inputDiscount" name="" placeholder=" ">
                                <label for="name" class="labelDiscount">Mã giảm giá</label>
                            </div>
                            <div class="productSubmit">
                                <a href="#"> <button type="button" class="submit">SỬ DỤNG</button> </a>
                            </div>
                            <table border="0" width="100%" class="product-table">
                                <tr>
                                    <td>Giảm Giá</td>
                                    <td id="product-table-ID"> -0% </td>
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
                            <a href="?go=home"> <button type="button" class="btnMore">←&nbsp;TIẾP TỤC MUA HÀNG </button> </a>
                            <a href="?go=checkout"> <button type="button" class="btnCheckout">ĐẶT HÀNG</button> </a>
                        </div>
                    </div>
                </div>

            <?php
            } //đóng if
            // Ngược lại nếu giỏ hàng trống thì đưa ra thông báo!
            else {
                ?>
                    <div class="alert alert-success" style="width: 100%; line-height: 30px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
                        <strong style="float: left;">Thông Báo!</strong> Giỏ Hàng Trống. <br /> <a href="?go=home">Tiếp tục mua hàng</a>
                    </div>
                <?php
                } //đóng else
                ?>
        </div>
    </div>
</body>

</html>