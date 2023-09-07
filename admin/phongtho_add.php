<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="sanpham_form_add_edit_delete.css">
  <title>Thêm Sản Phẩm Phòng Thờ</title>
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

      <h3>THÊM SẢN PHẨM PHÒNG THỜ</h3> </br>


      <div class="container_form_sp">
        <form action="?admin=phongtho_xladd" method="POST" name="bobanan">
          <label for="name">Mã sản phẩm</label>
          <input type="text" name="code_phongtho" placeholder="Mã sản phẩm.." required>

          <!-- required: Thuộc tính k cho phép để trống - bắt buộc phải nhâp dữ liệu thì mới gửi đc (submit) -->
          <label for="name">Tên sản phẩm</label>
          <input type="text" maxlength="73" name="name_bantho" placeholder="Tên sản phẩm.." required>

          <!-- accept: Xác định loại tập tin có thể được gửi thông qua một tập tin tải lên (upload) -->
          <label for="name">Hình ảnh</label>
          <input type="file" accept="image/*" name="img_bantho" placeholder="Nhập hình ảnh.." required> <br />

          <label for="name">Giá sản phẩm</label>
          <input type="text" maxlength="15" name="price_bantho" placeholder="Giá sản phẩm.." required>

          <label for="name">Kích thước</label>
          <input type="text" name="size_bantho" placeholder="Kích thước sản phẩm..">

          <label for="name">Vật liệu</label>
          <input type="text" name="material_bantho" placeholder="Vật liệu sản phẩm..">

          <label for="name">Thuộc danh mục</label>
          <select name="category_id">
            <!-- Trên phpMyAdmin dữ liệu hiển thị trong các option sẽ là 1 đoạn chuỗi
            dữ liệu gửi lên Server sẽ nhận giá trị value truyền vào -->
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
          <select name="categorize_id">
            <option value="Null">Null</option>
            <option value="1">Tủ thờ gỗ</option>
            <option value="2">Án gian gỗ</option></option>
            <option value="3">Sập thờ gỗ</option>
            <option value="4">Bàn thờ treo tường</option>
            <option value="5">Bàn thờ thần tài</option>
            <option value="6">Hoành phi câu đối</option>
            <option value="7">Lục bình gỗ</option>
            <option value="8">Tấm ám khói</option>
          </select>
          <br />

          <label for="name">Ngày tạo</label>
          <input type="datetime-local" name="created_at" placeholder="Ngày tạo sản phẩm..">

          <label for="name">Ngày cập nhật</label>
          <input type="datetime-local" name="	updated_at" placeholder="Ngày cập nhật sản phẩm..">

          <div class="btn_action_sp">
            <span onclick="window.location.href='?admin=phongtho'"> <input type="button" name="cancel" value="Hủy Bỏ"> </span>
            <!-- <input type="reset" name="reset" value="Hủy Bỏ">&ensp;&emsp;  -->
            <input type="submit" name="submit" value="Thêm sản phẩm">
          </div>
        </form>
      </div>

    </div>
  </div>
</body>

</html>