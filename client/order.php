<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>

<body>

    <?php
    session_start();
    ob_start();
    // session_destroy();

    /**Kết nối dữ liệu với database */
    include('./dbconnect.php');
    echo "Order:";

    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $id_customer = $user['id_customer'];
    }

    if (isset($_SESSION['sum_price'])) {
        $total_amount = $_SESSION['sum_price'];
    }

    // Lấy ngày hiện tại theo định dạng yyyy-mm-dd (Năm-tháng-ngày Giờ:phút:giây)
    $date_order = date('Y-m-d h:i:sa');
    // Trạng thái thanh toán: Mặc định là 0 - Chưa thanh toán
    // $payment_status = 0;

    if (isset($_POST['submit'])) {
        // Sử dụng . để nối nhiều chuỗi
        $fullname = $_POST['fullname'];
        $address = $_POST['address'] . ', ' . $_POST['town'] . ', ' . $_POST['city'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $notes = $_POST['notes'];
        $paymentType = $_POST['paymentType'];

        if (!$result = preg_match('/^(09|03|07|08|05)+([0-9]{8})$/', $phone) && strlen($phone) == 10) {
            echo ("<script> alert('Bạn cần kiểm tra lại số điện thoại nhập vào !'); location='index.php?go=checkout'; </script>");
        } else {
            // Lưu ý: Những trường để none mà k insert thì sẽ báo lỗi, vậy nên chưa muốn thêm dữ liệu vào trường nào thì để null trên bảng database
            $sqlOrder = "INSERT INTO `order`(`id_customer`, `fullname_customer`, `shipped_address`, `email_customer`, `phone_customer`, `total_amount`, `date_order`, `id_payment_type`, `note_order`) VALUES ('$id_customer', '$fullname', '$address', '$email', '$phone', '$total_amount', '$date_order', '$paymentType', '$notes')";
            // print_r($sqlOrder); die();

            // Thực thi INSERT Đơn hàng
            if ($sqlOrder) {
                mysqli_query($conn, $sqlOrder);


                // Lấy ID Đơn hàng mới nhất vừa được thêm vào database
                // Do ID là tự động tăng (PRIMARY KEY và AUTO INCREMENT), nên chúng ta không biết được ID đă tăng đến số bao nhiêu?
                // Cần phải sử dụng biến `$conn->insert_id` để lấy về ID mới nhất
                // Nếu thực thi câu lệnh INSERT thành công thì cần lấy ID mới nhất của Đơn hàng để làm khóa ngoại trong Chi tiết đơn hàng
                $id_order = $conn->insert_id;
                // var_dump($id_order);

                // Thông tin chi tiết đơn hàng
                if (isset($_SESSION['carts'])) {
                    $cart = $_SESSION['carts'];
                }

                // 1 đơn hàng sẽ có nhiều sản phẩm nên dùng mảng
                // ĐANG gặp lỗi chỉ lưu đc 1 sản phẩm cuối trong checkout
                // Duyệt vòng lặp qua mảng những Sản phẩm của chi tiết đơn hàng được gởi đến qua request POST
                foreach ($cart as $value) {
                    // Chuẩn bị dữ liệu cho câu lệnh INSERT vào table `order_detail`
                    $id_order = $id_order;
                    $id_product = $value['id_product'];
                    $code_product = $value['code_product'];
                    $quantity_product = $value['quantity'];
                    $price_product = $value['price_product'];

                    // Câu lệnh Insert: Lưu ý, nếu insert thành công k báo lỗi đưa ra nhưng trên database vẫn k có dl thì cần ktra or xóa bảng đó đi tạo lại
                    $sqlOrderDetail = "INSERT INTO `order_detail`(`id_order`, `id_product`, `code_product`, `quantity_product`, `price_product`) VALUES ('$id_order', '$id_product', '$code_product', '$quantity_product', '$price_product')";
                    // print_r($sqlOrderDetail); 
                    // Vì 1 mảng có nhiều sp nên để thực thi đc câu lệnh insert đủ số lần thì để câu lệnh thực thi trong vòng lặp forech 
                    mysqli_query($conn, $sqlOrderDetail);
                }

                if ($sqlOrderDetail) {
                    echo ("<script> alert('Cảm ơn bạn đã tin tưởng chúng tôi! Đơn đặt hàng của bạn thành công. Chúng tôi sẽ liên hệ lại với bạn sớm nhất !'); location='index.php?go=home'; </script>");
                    // Xóa $_SESSION['carts']
                    unset($_SESSION['carts']);
                    //Đóng database
                    $conn->close();
                } else {
                    echo "Kết nối database không thành công: {$sqlOrderDetail}" . $conn->connect_error;
                }
            } else {
                echo "Kết nối database không thành công: {$sqlOrder}" . $conn->connect_error;
            }
        }
    } else {
        echo ("<script> alert('Lỗi không tồn tại submit'); location='index.php?go=home';  </script>");
    }

    ?>

</body>

</html>