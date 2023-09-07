<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="sanpham_form_add_edit_delete.css">
    <title>Sửa Sản Phẩm Bàn Ăn</title>

    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

</head>

<body style="background-color: #E8E8FF">
    <?php
    // Truy vấn database
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include_once('./dbconnect.php');

    // 2. Chuẩn bị câu truy vấn $sqlSelect, lấy dữ liệu ban đầu của record cần update
    // Lấy giá trị khóa chính được truyền theo dạng QueryString Parameter key1=value1&key2=value2...
    if (isset($_GET['id_bobanan'])) {
        $id = $_GET['id_bobanan'];
    }

    $sqlSelect = "SELECT * FROM `bobanan` WHERE id_bobanan=$id;";

    // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu ban đầu của record cần update
    $resultSelect = mysqli_query($conn, $sqlSelect);
    $updateRow = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC); // 1 record

    // Nếu không tìm thấy dữ liệu -> thông báo lỗi
    if (empty($updateRow)) {
        echo "Giá trị id: $id không tồn tại. Vui lòng kiểm tra lại.";
        die;
    }
    ?>

    <div class="qlynen">
        <div class="qlytrong">

            <h3>Sửa Sản Phẩm Bàn Ăn</h3> </br>

            <div class="container_form_sp">
                <!-- Lấy id theo yêu cầu để xử lý -->
                <form action="?admin=bobanan_xledit&id_bobanan=<?php echo $updateRow['id_bobanan'] ?>" method="POST" name="banghego">
                    <label for="name">Mã sản phẩm</label>
                    <input type="text" name="code_bobanan" placeholder="Mã sản phẩm.." value="<?php echo $updateRow['code_bobanan'] ?>" required>

                    <!-- required: Thuộc tính k cho phép để trống - bắt buộc phải nhâp dữ liệu thì mới gửi đc (submit) -->
                    <label for="name">Tên sản phẩm</label>
                    <input type="text" maxlength="73" name="name_bobanan" placeholder="Tên sản phẩm.." value="<?php echo $updateRow['name_bobanan'] ?>" required>

                    <!-- accept: Xác định loại tập tin có thể được gửi thông qua một tập tin tải lên (upload) -->
                    <label for="name">Hình ảnh</label>
                    <input type="file" accept="image/*" name="img_bobanan" placeholder="Nhập hình ảnh.." value="<?php echo $updateRow['img_bobanan'] ?>" required> <br />

                    <label for="name">Giá sản phẩm</label>
                    <input type="text" maxlength="15" name="price_bobanan" placeholder="Giá sản phẩm.." value="<?php echo $updateRow['price_bobanan'] ?>" required>

                    <label for="name">Kích thước</label>
                    <input type="text" name="size_bobanan" placeholder="Kích thước sản phẩm.." value="<?php echo $updateRow['size_bobanan'] ?>">

                    <label for="name">Vật liệu</label>
                    <input type="text" name="material_bobanan" placeholder="Vật liệu sản phẩm.."value="<?php echo $updateRow['material_bobanan'] ?>">

                    <label for="name">Thuộc danh mục</label>
                    <select name="category_id" value="<?php echo $updateRow['category_id'] ?>">
                        <!-- Trên phpMyAdmin kiểu bigint sẽ nhận giá trị value truyền vào -->
                        <option value="Null">Null</option>
                        <option value="1">Bàn ghế gỗ</option>
                        <option value="2">Bộ bàn ăn</option>
                        <option value="3">Giường ngủ</option>
                        <option value="4">Kệ tivi</option>
                        <option value="5">Tủ quần áo</option>
                        <option value="6">Tủ giày dép</option>
                        <option value="7">Bàn trang điểm</option>
                        <option value="8">Phòng thờ</option>
                    </select>

                    <!-- Sản phẩm thuộc mục nào của danh mục -->
                    <label for="name">Thuộc chuyên mục</label>
                    <select name="categorize_id" value="<?php echo $updateRow['categorize_id'] ?>">
                        <option value="Null">Null</option>
                        <option value="1">Bộ salon gỗ</option>
                        <option value="2">Bộ sofa gỗ</option>
                        <option value="3">Gỗ tự nhiên</option>
                        <option value="4">Gỗ MDF</option>
                    </select>
                    <br />

                    <!-- readonly="readonly": Xác định trường <input /> chỉ được đọc (sử dụng đối với type="text" hay type="password") -->
                    <label for="name">Ngày tạo</label>
                    <input type="datetime-local" name="created_at" placeholder="Ngày tạo sản phẩm.." value="<?php echo $updateRow['created_at'] ?>" readonly="readonly">

                    <label for="name">Ngày cập nhật</label>
                    <input type="datetime-local" name="updated_at" placeholder="Ngày cập nhật sản phẩm..">

                    <div class="btn_action_sp">
                        <span onclick="window.location.href='?admin=bobanan'"> <input type="button" name="cancel" value="Hủy Bỏ"> </span>
                        <!-- <input type="reset" name="reset" value="Reset">&ensp;&emsp;  -->
                        <input type="submit" name="submit" value="Sửa sản phẩm">
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>

</html>