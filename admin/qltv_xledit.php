<meta name="content-type" content="text/html" charset="utf-8">
<title>Sửa thành viên</title>

<?php
    // Truy vấn database
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include_once('./dbconnect.php'); 
    
    // 4. Nếu người dùng có bấm nút Sửa thì thực thi câu lệnh UPDATE
    if (isset($_POST['btnSave'])) {
        // Lấy giá trị khóa chính
        $id = $_GET['id'];
        // Lấy dữ liệu người dùng hiệu chỉnh gửi từ REQUEST POST
        $hoten = $_POST['hoten'];
        $matkhau = $_POST['matkhau'];
        
        // Câu lệnh UPDATE dữ liệu vào table dựa theo điều kiện Where
       // $sql = "UPDATE `login` SET `hoten`='$hoten', `matkhau`='$matkhau' WHERE id=$id;";
        $sql = "UPDATE `login` SET `hoten`='$hoten',`matkhau`='$matkhau' WHERE id='$id'";
        // Thực thi UPDATE
        mysqli_query($conn, $sql);

        // Đóng kết nối
        mysqli_close($conn);

        // Sau khi cập nhật dữ liệu, tự động điều hướng về trang hiển thị
        echo ("<script>alert('Bạn đã sửa thành công.'); location='?admin=quanly'; </script>");
    }
?>