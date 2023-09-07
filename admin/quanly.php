<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="quanly.css" rel="stylesheet" />
    <title>Quản lý thành viên</title>
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Font Awesome Icons 4-->
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- SEARCH -->
</head>

<body style="background-color: #E8E8FF">

    <?php
    // Truy vấn database để lấy danh sách
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include_once(__DIR__ . './dbconnect.php');

    // 2. Chuẩn bị câu truy vấn $sql
    $sql = "select * from `login`";

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
            'id' => $row['id'],
            'hoten' => $row['hoten'],
            'matkhau' => $row['matkhau'],
        );
        // $rowNum++;
    }
    ?>

    <div class="qlynen">
        <div class="qlytrong">
            <h2 style="padding-left:35px">Danh sách thành viên</h2>

            <div class="main-content">
                <div class="box-search">
                    <div class="search-container-ql">
                        <form action="/action_page.php">
                            <input type="search" id="search" placeholder="Search.." name="search">
                            <button class="iconsearch" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <form action="delete.php" method="GET" name="login">
                    <div class="box_table">
                        <div id="table">
                            <div class="row">
                                <div id="id" class="column" style="background-color: #0080C0; color: #FFF;">ID</div>
                                <div id="tdn" class="column" style="background-color: #0080C0; color: #FFF;">Tên Đăng Nhập</div>
                                <div id="mk" class="column" style="background-color: #0080C0; color: #FFF;">Mật Khẩu</div>
                                <div id="btn-action-table" class="column" style="background-color: #0080C0; color: #FFF;">Tác Vụ</div>
                            </div>

                            <?php foreach ($data as $row) : ?>
                                <div class="row">
                                    <div id="id" class="column"> <?php echo $row['id'] ?> </div>
                                    <div id="tdn" class="column"> <?php echo $row['hoten'] ?></div>
                                    <div id="mk" class="column"> <?php echo $row['matkhau'] ?></div>

                                    <div id="btn-action-table" class="column">
                                        <div class="checkbox"> <input type="checkbox" id="myCheck" onclick="myFunction()"></div>
                                        <div class="add"><a href="?admin=qltv_add"> <img src="images/add.png" width="16" height="16" /> </a></div>
                                        <div class="edit"><a href="?admin=qltv_edit&id=<?php echo $row['id'] ?>"> <img src="images/edit.png" width="16" height="16" /></a></div>
                                        <div class="delete"><a onclick="return confirm('Are you sure you want to delete?')" href="?admin=qltv_delete&id=<?php echo $row['id'] ?>"> <img src="images/close.png" width="16" height="16" /></a></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="btn-action-all">
                            <input style="color: 00172F" type="checkbox" id="myCheck2" onclick="myFunction()"> <label for="myCheck">Check All</label>
                            <button class="button"> <img src="images/add.png" width="16" height="16" /> <span><a style="color:#FFF" href="?admin=qltv_add">
                                        Thêm </a></span> </button>
                            <button class="button"> <img src="images/edit.png" width="16" height="16" /> <span><a style="color:#FFF" href="?admin=qltv_edit&id=<?php echo $row['id'] ?>">
                                        Sửa </a></span> </button>
                            <button class="button"> <img src="images/close.png" width="16" height="16" /> <span><a style="color:#FFF" href="?admin=qltv_delete&id=<?php echo $row['id'] ?>">
                                        Xóa </a></span> </button>
                        </div>

                        <!-- <div class="container__nav">
                            <ul class="container__nav-list">
                                <li class="container__nav-item"><a class="home" href="admin.php">Trang chủ</a></li>
                                <li class="container__nav-item"><a class="active" href="?admin=qltv_add">Thêm Thành Viên</a></li>
                            </ul>
                        </div> -->
                    </div>
                </form>
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