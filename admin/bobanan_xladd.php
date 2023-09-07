<html>
<!--File Xử lý dữ liệu từ form và Insert dữ liệu vào database-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xử Lý Dữ Liệu Thêm Sản Phẩm Bàn Ăn</title>
</head>

<body>
    <?php
    /**Kết nối dữ liệu với database */
    require('./dbconnect.php');

    /**Kiểm tra dữ liệu từ Client đã được nhận từ thuộc tính POST qua nút submit hay chưa */
    if (isset($_POST['submit'])) {
        /**Khi đã nhận được dữ liệu r -> Lưu dữ liệu từ POST vào những biến khác nhau */
        $code_bobanan = $_POST['code_bobanan'];
        $name_bobanan = $_POST['name_bobanan'];
        $img_bobanan = $_POST['img_bobanan'];
        $price_bobanan = $_POST['price_bobanan'];
        $size_bobanan = $_POST['size_bobanan'];
        $material_bobanan = $_POST['material_bobanan'];
        $category_id = $_POST['category_id'];
        $categorize_id = $_POST['categorize_id'];
        $created_at = $_POST['created_at'];
        $updated_at = $_POST['updated_at'];

        /**Kiểm tra xem có dữ liệu phía Client nhập vào để trống hay k. Nếu 1 trong 3 gtri rỗng thì thông báo lỗi**/
        if (!empty($code_bobanan) || !empty($name_bobanan) || !empty($img_bobanan) || !empty($price_bobanan)) {
            $sql = "INSERT INTO `bobanan` (`code_bobanan`, `name_bobanan`, `img_bobanan`, `price_bobanan`, `size_bobanan`, `material_bobanan`, `category_id`, `categorize_id`, `created_at`, `updated_at`) 
                    VALUES ('$code_bobanan', '$name_bobanan', '$img_bobanan', '$price_bobanan   ', '$size_bobanan', '$material_bobanan', '$category_id', '$categorize_id', '$created_at', '$updated_at')";
            if ($conn->query($sql) === TRUE) {
                echo ("<script> alert('Bạn đã thêm thành công!'); location='?admin=bobanan';  </script>");
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