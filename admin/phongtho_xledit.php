<meta name="content-type" content="text/html" charset="utf-8">
<title>Xử Lý Dữ Liệu Sửa Sản Phẩm Phòng Thờ</title>
<?php
// Truy vấn database
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include_once('./dbconnect.php');

// 4. Nếu người dùng có bấm nút Sửa thì thực thi câu lệnh UPDATE
if (isset($_POST['submit'])) {
    // Lấy giá trị khóa chính
    $id = $_GET['id_bantho'];
    // Lấy dữ liệu người dùng hiệu chỉnh gửi từ REQUEST POST
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

    // Câu lệnh UPDATE dữ liệu vào table dựa theo điều kiện Where
    $sql = "UPDATE `phongtho` SET `code_phongtho`='$code_phongtho',`name_bantho`='$name_bantho',`img_bantho`='$img_bantho',
        `price_bantho`='$price_bantho',`size_bantho`='$size_bantho',`material_bantho`='$material_bantho',`category_id`='$category_id',
        `categorize_id`='$categorize_id',`created_at`='$created_at',`updated_at`='$updated_at' WHERE id_bantho='$id'";
    if ($conn->query($sql) === TRUE) {
        echo ("<script> alert('Bạn đã sửa thành công!'); location='?admin=phongtho';  </script>");
    } else {
        echo "Kết nối database không thành công: {$sql}" . $conn->connect_error;   //Lỗi này đưa vào 1 chuỗi là $sql gọi đến biến conn truyền vào error
        //Đóng database
        $conn->close();
    }
}
?>