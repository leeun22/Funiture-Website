<meta name="content-type" content="text/html" charset="utf-8">
<title>Xử Lý Dữ Liệu Sửa Sản Phẩm Bàn Ghế Gỗ</title>

<?php
// Truy vấn database
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include_once('./dbconnect.php');

// 4. Nếu người dùng có bấm nút Sửa thì thực thi câu lệnh UPDATE
if (isset($_POST['submit'])) {
    // Lấy giá trị khóa chính
    $id = $_GET['id_product'];
    // Lấy dữ liệu người dùng hiệu chỉnh gửi từ REQUEST POST
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

    // Câu lệnh UPDATE dữ liệu vào table dựa theo điều kiện Where
    $sql = "UPDATE `product` SET `code_product`='$code_product',`name_product`='$name_product',`img_product`='$img_product',
        `price_product`='$price_product',`size_product`='$size_product',`material_product`='$material_product',`id_cate`='$id_cate',
        `id_list`='$id_list',`created_at`='$created_at',`update_at`='$update_at' WHERE id_product='$id'";
    if ($conn->query($sql) === TRUE) {
        echo ("<script> alert('Bạn đã sửa thành công!'); location='?admin=product_cate';  </script>");
    } else {
        echo "Kết nối database không thành công: {$sql}" . $conn->connect_error;   //Lỗi này đưa vào 1 chuỗi là $sql gọi đến biến conn truyền vào error
        //Đóng database
        $conn->close();
    }
}
?>