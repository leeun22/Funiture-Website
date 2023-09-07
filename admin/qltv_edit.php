<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="qltv_form_add_edit_delete.css">
  <title>Sửa thành viên</title>

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
  if (isset($_GET['id'])){
    $id = $_GET['id'];
  }
  // $id = $_GET['id'];
  $sqlSelect = "SELECT * FROM `login` WHERE id=$id;";

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

      <h3>SỬA THÀNH VIÊN QUẢN TRỊ</h3> </br>

      <div class="container_form_qltv">
        <form action="?admin=qltv_xledit&id=<?php echo $updateRow['id'] ?>" method="POST">
          <label for="name">Tên đăng nhập</label>
          <input type="text" id="hoten" name="hoten" placeholder="Your name.." value="<?php echo $updateRow['hoten'] ?>" required>

          <label for="phone">Mật khẩu</label>
          <input type="password" maxlength="50" id="matkhau" name="matkhau" placeholder="Password minimum 6 characters.." value="<?php echo $updateRow['matkhau'] ?>" required>
          <div class="btn-action_qltv">
           <span onclick="window.location.href='?admin=quanly'"> <input type="button" name="cancel" value="Hủy Bỏ"> </span>
            <input type="submit" name="btnSave" value="Sửa Thành Viên">
          </div>
        </form>
      </div>

    </div>
  </div>
</body>

</html>