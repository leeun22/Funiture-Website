<meta name="content-type" content="text/html" charset="utf-8">
<title>Xử Lý Dữ Liệu Sửa Sản Phẩm Giường Ngủ</title>
<?php
// Truy vấn database
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include_once('./dbconnect.php');

// 4. Nếu người dùng có bấm nút Sửa thì thực thi câu lệnh UPDATE
if (isset($_POST['submit'])) {
    // Lấy giá trị khóa chính
    $id = $_GET['id_giuongngu'];
    // Lấy dữ liệu người dùng hiệu chỉnh gửi từ REQUEST POST
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

    // Câu lệnh UPDATE dữ liệu vào table dựa theo điều kiện Where
    $sql = "UPDATE `giuongngu` SET `code_giuongngu`='$code_giuongngu',`name_giuongngu`='$name_giuongngu',`img_giuongngu`='$img_giuongngu',
        `price_giuongngu`='$price_giuongngu',`size_giuongngu`='$size_giuongngu',`material_giuongngu`='$material_giuongngu',`category_giuongngu`='$category_giuongngu',
        `categorize_giuongngu`='$categorize_giuongngu',`created_id`='$created_id',`updated_id`='$updated_id' WHERE id_giuongngu='$id'";
    if ($conn->query($sql) === TRUE) {
        echo ("<script> alert('Bạn đã sửa thành công!'); location='?admin=giuongngu';  </script>");
    } else {
        echo "Kết nối database không thành công: {$sql}" . $conn->connect_error;   //Lỗi này đưa vào 1 chuỗi là $sql gọi đến biến conn truyền vào error
        //Đóng database
        $conn->close();
    }
}
?>