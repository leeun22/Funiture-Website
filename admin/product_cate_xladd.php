<html>
<!--File Xử lý dữ liệu từ form và Insert dữ liệu vào database-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xử Lý Dữ Liệu Thêm Sản Phẩm Bàn Ghế Gỗ</title>
</head>

<body>
    <?php
    /**Kết nối dữ liệu với database */
    require('./dbconnect.php');

    // // Dữ liệu đẩy lên server dưới dạng mảng có key là name của nhóm checkbox
    // $list_categorize = array(
    //     1 => "Bộ salon gỗ",
    //     2 => "Bộ sofa gỗ",
    //     3 => "Gỗ tự nhiên",
    //     4 => "Gỗ MDF",
    // );

    /**Kiểm tra dữ liệu từ Client đã được nhận từ thuộc tính POST qua nút submit hay chưa */
    if (isset($_POST['submit'])) {
        /**Khi đã nhận được dữ liệu r -> Lưu dữ liệu từ POST vào những biến khác nhau */
        $code_product = $_POST['code_product'];
        $name_product = $_POST['name_product'];
        $img_product = $_POST['img_product'];
        $price_product = $_POST['price_product'];
        $size_product = $_POST['size_product'];
        $material_product = $_POST['material_product'];
        $color_product = $_POST['color_product'];
        $id_cate = $_POST['id_cate'];
        $id_list = $_POST['id_list'];
        $created_at = $_POST['created_at'];
        $update_at = $_POST['update_at'];

        // Fix mảng để chọn đc nhiều lựa chọn từ checkbox
        // if (isset($_POST['categorize'])) {
        //     foreach ($_POST['categorize'] as $v) {
        //         $categorizeArray = "$list_categorize[$v] <br/>" ;
        //     }
        // }

        // Fix tiền mệnh giá tiền việt.
        // function currency_format($price_bobanghe, $suffix = 'đ') {
        //     if (!empty($price_bobanghe)) {
        //         return currency_format($price_bobanghe, 0, ',', '.') . "{$suffix}";
        //     }
        // }
        // $fomartMoney = currency_format($price_bobanghe, $suffix = 'đ');

        // if (!function_exists('price_bobanghe')) {            
        //     function currency_format($price_bobanghe, $suffix = 'đ') {
        //         if (!empty($price_bobanghe)) {
        //             return number_format($price_bobanghe, 0, ',', '.') . "{$suffix}";
        //         }
        //     }
        // }

        /**Kiểm tra xem có dữ liệu phía Client nhập vào để trống hay k. Nếu 1 trong 3 gtri rỗng thì thông báo lỗi**/
        if (!empty($code_product) || !empty($name_product) || !empty($img_product) || !empty($price_product)) {
            $sql = "INSERT INTO `product` (`code_product`, `name_product`, `img_product`, `price_product`, `size_product`, `material_product`, `color_product`, `id_cate`, `id_list`, `created_at`, `update_at`) 
                    VALUES ('$code_product', '$name_product', '$img_product', '$price_product', '$size_product', '$material_product', '$color_product'`, '$id_cate', '$id_list', '$created_at', '$update_at')";
            if ($conn->query($sql) === TRUE) {
                echo ("<script> alert('Bạn đã thêm thành công!'); location='?admin=product_cate';  </script>");
            } else {
                echo "Kết nối database không thành công: {$sql}" . $conn->connect_error;   //Lỗi này đưa vào 1 chuỗi là $sql gọi đến biến conn truyền vào error
                //Đóng database
                $conn->close();
            } 
        }
    }
    ?>


</body>

</html>