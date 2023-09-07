<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="sanpham.css" rel="stylesheet" />
    <title>Quản Lý Sản Phẩm Bộ Bàn Ăn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Font Awesome Icons 4-->
</head>

<body style="background-color: #E8E8FF">

    <?php
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include_once(__DIR__ . './dbconnect.php');

    // 2. Chuẩn bị câu truy vấn $sql
    $sql = "select * from `bobanan`";

    // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
    $result = mysqli_query($conn, $sql);

    // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
    // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
    // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
    $data = [];
    // $rowNum = 1;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = array(
            // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
            'id_bobanan' => $row['id_bobanan'],
            'code_bobanan' => $row['code_bobanan'],
            'name_bobanan' => $row['name_bobanan'],
            'img_bobanan' => $row['img_bobanan'],
            'price_bobanan' => $row['price_bobanan'],
            'size_bobanan' => $row['size_bobanan'],
            'material_bobanan' => $row['material_bobanan'],
            'category_id' => $row['category_id'],
            'categorize_id' => $row['categorize_id'],
            'created_at' => $row['created_at'],
            'updated_at' => $row['updated_at'],
        );
        // $rowNum++;
    }
    ?>

    <div class="qlynen">
        <div class="qlytrong">
            <h2 style="padding-left:35px">Danh Mục Sản Phẩm Bộ Bàn Ăn</h2>

            <div class="main-content">
                <div class="box-search">
                    <div class="search-container-ql">
                        <form action="/action_page.php">
                            <input type="search" id="search" placeholder="Search.." name="search">
                            <button class="iconsearch" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>

                <div class="box_table">
                    <table border="1">
                        <thead>
                            <td id="id">ID</td>
                            <td id="code">Mã SP</td>
                            <td id="name">Tên Sản Phẩm</td>
                            <td>Hình Ảnh</td>
                            <td>Giá SP</td>
                            <td>Kích Thước</td>
                            <td>Vật Liệu SP</td>
                            <td>Thuộc Danh Mục</td>
                            <td>Thuộc Chuyên Mục</td>
                            <td>Ngày Tạo</td>
                            <td>Ngày Cập Nhật</td>
                            <td>Tác Vụ</td>
                        </thead>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td id="id"> <?php echo $row['id_bobanan'] ?> </td>
                                <td> <?php echo $row['code_bobanan'] ?></td>
                                <td id="name"> <?php echo $row['name_bobanan'] ?></td>
                                <td style="display: flex; justify-content: center;"> <img src="<?php echo $row['img_bobanan'] ?>" width="100%" height="95px" /> </td>
                                <td> <?php echo $row['price_bobanan'] ?>.000₫</td>
                                <td> <?php echo $row['size_bobanan'] ?></td>
                                <td> <?php echo $row['material_bobanan'] ?></td>
                                <td> <?php echo $row['category_id'] ?></td>
                                <td> <?php echo $row['categorize_id'] ?></td>
                                <td> <?php echo $row['created_at'] ?></td>
                                <td> <?php echo $row['updated_at'] ?></td>

                                <td>
                                    <div class="btn-action-table">
                                        <div class="checkbox"> <input type="checkbox" id="myCheck" onclick="myFunction()"></div>
                                        <div class="add"><a href="?admin=bobanan_add"> <img src="images/add.png" width="16" height="16" /> </a></div>
                                        <div class="edit"><a href="?admin=bobanan_edit&id_bobanan=<?php echo $row['id_bobanan'] ?>"> <img src="images/edit.png" width="16" height="16" /></a></div>
                                        <div class="delete"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="?admin=bobanan_delete&id_bobanan=<?php echo $row['id_bobanan'] ?>" onclick="return confirm('Are you sure you want to delete?')"> <img src="images/close.png" width="16" height="16" /></a></div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>

                    <div class="btn-action-all">
                        <input style="color: 00172F" type="checkbox" id="myCheck2" onclick="myFunction()"> <label for="myCheck">Check All</label>
                        <button class="button"> <img src="images/add.png" width="16" height="16" /> <span><a style="color:#FFF" href="?admin=bobanan_add">
                                    Thêm </a></span> </button>
                        <button class="button"> <img src="images/edit.png" width="16" height="16" /> <span><a style="color:#FFF" href="?admin=bobanan_edit&id_bobanan=<?php echo $row['id_bobanan'] ?>">
                                    Sửa </a></span> </button>
                        <button class="button"> <img src="images/close.png" width="16" height="16" /> <span><a style="color:#FFF" href="?admin=bobanan_delete&id_bobanan=<?php echo $row['id_bobanan'] ?>">
                                    Xóa </a></span> </button>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var checkBox = document.getElementById("myCheck");
            var checkBox2 = document.getElementById("myCheck2");
            if (checkBox.value = "1") {
                checkBox2.checked = "true";
            } else {
                checkBox2.checked = "false";
            }
        }
    </script>
</body>

</html>