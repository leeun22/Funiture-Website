<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUICK VIEW CART DETAIL</title>
    <link type="text/css" href="./css/quick-view-cart-detail.css" rel="stylesheet" />
</head>

<body>

    <?php
    $_SESSION['sum_price'] = 0;
    //Kiểm tra xem $_SESSION['carts'] có tồn tại hay k và trong giỏ phải có sp
    if (isset($_SESSION['carts']) && !empty($_SESSION['carts'])) {
    ?>
        <!-- SẢN PHẨM TRONG GIỎ HÀNG -->
        <div class="shopping-cart-view">
            <form method="POST" action="?go=cart-update-pro">
                <div class="product-title-view">
                    GiỎ HÀNG CỦA BẠN
                    <hr id="hr-pro-title-cart">
                </div>

                <div class="product-cart-view">
                    <table border="0" class="shop-table-view">
                        <?php
                        foreach ($_SESSION['carts'] as $key => $value) {
                        ?>
                            <tr style="border-bottom: 1px inset #cccccc82;">
                                <td width="20%">
                                    <div class="shop-image-view">
                                        <img src="<?php echo $value['img_product'] ?>" />
                                    </div>
                                </td>
                                <td>
                                    <div class="shop-details-view">
                                        <div class="productName-view">
                                            <a href="?go=product-detail&id_product=<?php echo $value['id_product'] ?>">
                                                <?php echo $value['name_product'] ?>
                                            </a>
                                        </div>
                                        <div class="productCode-view">
                                            Mã sản phẩm: <?php echo $value['code_product'] ?>
                                        </div>
                                        <div class="productPrice-view">
                                            <span> <input type="text" name="quantity" id="quantity-view" value="<?php echo $value['quantity'] ?>" min="1" max="5" step="1" title="Quantity" readonly> </span>
                                            x &nbsp;
                                            <span> <?php echo number_format($value['price_product'], 0, ' ', '.'); ?>₫ </span>
                                        </div>
                                    </div>
                                </td>
                                <td width="15%" style="display: contents;">
                                    <div class="action-total-view">
                                        <!-- Xóa sản phẩm trong giỏ hàng -->
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không ?')" href="?go=cart&id_product=<?php echo $value['id_product'] ?>&action=deleteCartMenu">
                                            <div class="actionDelete-view"> &times; </div>
                                        </a> <!--&times: Ký tự x trong html -->
                                    </div>
                                </td>
                            </tr>

                            <?php
                            // Tổng tiền trên 1 sản phẩm với n số lượng
                            $item_sum = $value['price_product'] * $value['quantity'];
                            // Lưu tổng tiền của sp thứ n vào sum_price, sau mỗi lần tính item_sum, sum_price sẽ cộng tiếp lên
                            $_SESSION['sum_price'] += $item_sum;
                            // Sau mỗi lần item_sum sẽ có một giá trị mới cộng dồn lên
                            $item_sum += $item_sum;
                            ?>

                        <?php
                        } //đóng foreach        
                        ?>
                    </table>
                </div>

                <div class="total-price-view">
                    <span>Thành Tiền:</span> &nbsp;
                    <span class="totalPrice">
                        <b> <?php echo number_format($_SESSION['sum_price'], 0, ' ', '.') ?>₫ </b>
                    </span>
                </div>

                <div class="view-cart-detail">
                    <a href="?go=cart-detail"> <button type="button" name="checkCart" class="btn-view-cart">XEM GIỎ HÀNG</button> </a>
                    <a href="?go=checkout"> <button type="button" name="checkout" class="btn-check-out">THANH TOÁN</button> </a>
                </div>

            </form>
        </div>

    <?php
    } //đóng if
    // Ngược lại nếu giỏ hàng trống thì đưa ra thông báo!
    else {
    ?>

        <div class="alert alert-success-view">
            <button type="button" class="close-view" data-dismiss="alert" aria-hidden="true">&times</button>
            <i class="fab fa-opencart fa-lg" id="icon-cart-view"></i>
            <strong id="noti-cart-view">Thông Báo!</strong> Giỏ Hàng Đang Trống! <br />
            <a id="bought-more" href="?go=home">Tiếp tục mua hàng</a>
        </div>

    <?php
    } //đóng else
    ?>
</body>

</html>