<meta name="content-type" content="text/html" charset="utf-8">
<title>Xử Lý Dữ Liệu Sửa Sản Phẩm Bàn Ăn</title>

<?php
// Truy vấn database
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include_once('./dbconnect.php');

// 4. Nếu người dùng có bấm nút Sửa thì thực thi câu lệnh UPDATE
if (isset($_POST['submit'])) {
    // Lấy giá trị khóa chính
    $id = $_GET['id_bobanan'];
    // Lấy dữ liệu người dùng hiệu chỉnh gửi từ REQUEST POST
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

    // Câu lệnh UPDATE dữ liệu vào table dựa theo điều kiện Where
    $sql = "UPDATE `bobanan` SET `code_bobanan`='$code_bobanan',`name_bobanan`='$name_bobanan',`img_bobanan`='$img_bobanan',
        `price_bobanan`='$price_bobanan',`size_bobanan`='$size_bobanan',`material_bobanan`='$material_bobanan',`category_id`='$category_id',
        `categorize_id`='$categorize_id',`created_at`='$created_at',`updated_at`='$updated_at' WHERE id_bobanan='$id'";
    if ($conn->query($sql) === TRUE) {
        echo ("<script> alert('Bạn đã sửa thành công!'); location='?admin=bobanan';  </script>");
    } else {
        echo "Kết nối database không thành công: {$sql}" . $conn->connect_error;   //Lỗi này đưa vào 1 chuỗi là $sql gọi đến biến conn truyền vào error
        //Đóng database
        $conn->close();
    }
}
?>