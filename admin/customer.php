<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="sanpham.css" rel="stylesheet" />
    <title>Quản Lý Khách Hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Font Awesome Icons 4-->
</head>

<body style="background-color: #E8E8FF">
    <div class="qlynen">
        <div class="qlytrong">
            <h2 style="padding-left:35px">
               DANH SÁCH KHÁCH HÀNG
            </h2>

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
                            <!-- <td id="code">Mã khách hàng</td> -->
                            <td>Ảnh đại diện</td>
                            <td width="8%">Tên đăng nhập</td>
                            <td>Mật khẩu</td>
                            <td width="10%">Tên khách hàng</td>
                            <td width="4%">Giới tính</td>
                            <td>Số điện thoại</td>
                            <td>Email</td>
                            <td>Ghi chú</td>
                            <td>Ngày sinh</td>
                            <td>Địa chỉ giao hàng</td>
                            <td>Ngày tạo</td>
                            <td>Ngày cập nhật</td>
                            <td>Tác Vụ</td>
                        </thead>

                        <?php foreach ($customer as $row) {?>

                            <tr>
                                <td id="id"> <?php echo $row['id_customer'] ?> </td>
                                <td style="display: flex; justify-content: center;"> <img src="<?php echo $row['avatar_customer'] ?>" width="100%" height="95px" style="object-fit: contain;" /> </td>
                                <td> <?php echo $row['username'] ?></td>   
                                <td> <?php echo $row['password'] ?></td>
                                <td> <?php echo $row['name_customer'] ?></td>
                                <td> <?php echo $row['gender_customer'] ?></td>
                                <td> <?php echo $row['phone_customer'] ?></td>
                                <td style="overflow: auto;"> <?php echo $row['email_customer'] ?></td>
                                <td> <?php echo $row['comments'] ?></td>
                                <td> <?php echo $row['birthday_customer'] ?></td>
                                <td> <?php echo $row['shipped_address'] ?></td>
                                <td> <?php echo $row['created_at'] ?></td>
                                <td> <?php echo $row['updated_at'] ?></td>

                                <td>
                                    <div class="btn-action-table">
                                        <div class="checkbox"> <input type="checkbox" id="myCheck" onclick="myFunction()"></div>
                                        <div class="add"><a href="?admin=product_cate_add"> <img src="images/add.png" width="16" height="16" /> </a></div>
                                        <div class="edit"><a href="?admin=product_cate_edit&id_product=<?php echo $row['id_product'] ?>"> <img src="images/edit.png" width="16" height="16" /></a></div>
                                        <div class="delete"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="?admin=product_cate_delete&id_product=<?php echo $row['id_product'] ?>"> <img src="images/close.png" width="16" height="16" /></a></div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            }    
                        ?>

                    </table>

                    <div class="btn-action-all">
                        <input style="color: 00172F" type="checkbox" id="myCheck2" onclick="myFunction()"> <label for="myCheck">Check All</label>
                        <button class="button"> <img src="images/add.png" width="16" height="16" /> <span><a style="color:#FFF" href="?admin=product_cate_add">
                                    Thêm </a></span> </button>
                        <button class="button"> <img src="images/edit.png" width="16" height="16" /> <span><a style="color:#FFF" href="?admin=product_cate_edit&id_product=<?php echo $row['id_product'] ?>">
                                    Sửa </a></span> </button>
                        <button class="button"> <img src="images/close.png" width="16" height="16" /> <span><a style="color:#FFF" href="?admin=product_cate_delete&id_product=<?php echo $row['id_product'] ?>">
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