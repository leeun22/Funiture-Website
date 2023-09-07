<html>
<!--File Xử lý dữ liệu từ form và Insert dữ liệu vào database-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xử Lý Dữ Liệu Thêm Sản Phẩm Giường Ngủ</title>
</head>

<body>
    <?php
    /**Kết nối dữ liệu với database */
    require('./dbconnect.php');

    /**Kiểm tra dữ liệu từ Client đã được nhận từ thuộc tính POST qua nút submit hay chưa */
    if (isset($_POST['submit'])) {
        /**Khi đã nhận được dữ liệu r -> Lưu dữ liệu từ POST vào những biến khác nhau */
        $code_giuongngu = $_POST['code_giuongngu'];
        $name_giuongngu = $_POST['name_giuongngu'];
        $img_giuongngu = $_POST['img_giuongngu'];
        $price_giuongngu = $_POST['price_giuongngu'];
        $size_giuongngu = $_POST['size_giuongngu'];
        $material_giuongngu = $_POST['material_giuongngu'];
        $category_giuongngu = $_POST['category_id'];
        $categorize_giuongngu = $_POST['categorize_id'];
        $created_id = $_POST['created_id'];
        $updated_id = $_POST['updated_id'];

        /**Kiểm tra xem có dữ liệu phía Client nhập vào để trống hay k. Nếu 1 trong 3 gtri rỗng thì thông báo lỗi**/
        if (!empty($code_giuongngu) || !empty($name_giuongngu) || !empty($img_giuongngu) || !empty($price_giuongngu)) {
            $sql = "INSERT INTO `giuongngu` (`code_giuongngu`, `name_giuongngu`, `img_giuongngu`, `price_giuongngu`, `size_giuongngu`, `material_giuongngu`, `category_giuongngu`, `categorize_giuongngu`, `created_id`, `updated_id`) 
                    VALUES ('$code_giuongngu', '$name_giuongngu', '$img_giuongngu', '$price_giuongngu', '$size_giuongngu', '$material_giuongngu', '$category_giuongngu', '$categorize_giuongngu', '$created_id', '$updated_id')";
            if ($conn->query($sql) === TRUE) {
                echo ("<script> alert('Bạn đã thêm thành công!'); location='?admin=giuongngu';  </script>");
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