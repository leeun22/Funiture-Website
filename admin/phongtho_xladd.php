<html>
<!--File Xử lý dữ liệu từ form và Insert dữ liệu vào database-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xử Lý Dữ Liệu Thêm Sản Phẩm Phòng Thờ</title>
</head>

<body>
    <?php
    /**Kết nối dữ liệu với database */
    require('./dbconnect.php');

    /**Kiểm tra dữ liệu từ Client đã được nhận từ thuộc tính POST qua nút submit hay chưa */
    if (isset($_POST['submit'])) {
        /**Khi đã nhận được dữ liệu r -> Lưu dữ liệu từ POST vào những biến khác nhau */
        $code_phongtho = $_POST['code_phongtho'];
        $name_bantho = $_POST['name_bantho'];
        $img_bantho = $_POST['img_bantho'];
        $price_bantho = $_POST['price_bantho'];
        $size_bantho = $_POST['size_bantho'];
        $material_bantho = $_POST['material_bantho'];
        $category_id = $_POST['category_id'];
        $categorize_id = $_POST['categorize_id'];
        $created_at = $_POST['created_at'];
        $updated_at = $_POST['updated_at'];

        /**Kiểm tra xem có dữ liệu phía Client nhập vào để trống hay k. Nếu 1 trong 3 gtri rỗng thì thông báo lỗi**/
        if (!empty($code_phongtho) || !empty($name_bantho) || !empty($img_bantho) || !empty($price_bantho)) {
            $sql = "INSERT INTO `phongtho` (`code_phongtho`, `name_bantho`, `img_bantho`, `price_bantho`, `size_bantho`, `material_bantho`, `category_id`, `categorize_id`, `created_at`, `updated_at`) 
                    VALUES ('$code_phongtho', '$name_bantho', '$img_bantho', '$price_bantho   ', '$size_bantho', '$material_bantho', '$category_id', '$categorize_id', '$created_at', '$updated_at')";
            if ($conn->query($sql) === TRUE) {
                echo ("<script> alert('Bạn đã thêm thành công!'); location='?admin=phongtho';  </script>");
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