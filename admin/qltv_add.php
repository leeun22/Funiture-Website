<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="qltv_form_add_edit_delete.css">
  <title>Thêm thành viên quản trị</title>
  <?php
  include("dbconnect.php")
  ?>
  <style type="text/css">
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
  </style>

</head>

<body style="background-color: #E8E8FF">
  <div class="qlynen">
    <div class="qlytrong">

      <h3>THÊM THÀNH VIÊN QUẢN TRỊ</h3> </br>

      <div class="container_form_qltv">
        <form action="?admin=qltv_xladd" method="POST" name="login">
          <label for="name">Tên đăng nhập</label>
          <input type="text" id="hoten" name="hoten" placeholder="Your name.." required>

          <label for="phone">Mật khẩu</label>
          <input type="password" maxlength="50" id="matkhau" name="matkhau" placeholder="Your password.." required>
          <div class="btn-action_qltv">
            <span onclick="window.location.href='?admin=quanly'"> <input type="button" name="cancel" value="Hủy Bỏ"> </span>
            <!-- <input type="reset" name="reset" value="Reset" > -->
            <input type="submit" name="submit" value="Thêm thành viên">
          </div>
        </form>
      </div>

    </div>
  </div>
</body>

</html>