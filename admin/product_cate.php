<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="sanpham.css" rel="stylesheet" />
    <title>Quản Lý Sản Phẩm Bàn Ghế Gỗ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Font Awesome Icons 4-->
</head>

<body style="background-color: #E8E8FF">
    <div class="qlynen">
        <?php
            if (isset($_GET['id_cate']) && !empty($_GET['id_cate'])) {
                $id= $_GET['id_cate'];
                //Lấy ra tất cả các sp
                $row_detail = loadall_category_product_admin($id);
        ?>
        <div class="qlytrong">
            <h2 style="padding-left:35px">
                <?php 
                    switch ($_GET['id_cate']) {
                        case "1":
                        echo "DANH MỤC SẢN PHẨM BÀN GHẾ GỖ";
                        break;
                        case "2":
                        echo "DANH MỤC SẢN PHẨM BỘ BÀN ĂN";
                        break;
                        case "3":
                        echo "DANH MỤC SẢN PHẨM GIƯỜNG NGỦ";
                        break;
                        case "4":
                        echo "DANH MỤC SẢN PHẨM KỆ TI VI";
                        break;
                        case "5":
                        echo "DANH MỤC SẢN PHẨM TỦ QUẦN ÁO";
                        break;
                        case "6":
                        echo "DANH MỤC SẢN PHẨM TỦ GIÀY DÉP";
                        break;
                        case "7": 
                        echo "DANH MỤC SẢN PHẨM BÀN TRANG ĐIỂM";
                        break;
                        case "8":
                        echo "DANH MỤC SẢN PHẨM PHÒNG THỜ";
                        break;
                        default:
                        echo "Không tìm thấy id_cate yêu cầu !";
                    }
                ?>
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
                            <td id="code">Mã SP</td>
                            <td id="name">Tên Sản Phẩm</td>
                            <td>Hình Ảnh</td>
                            <td id="price">Giá SP</td>
                            <td>Kích Thước</td>
                            <td>Vật Liệu SP</td>
                            <td>Màu Sắc</td>
                            <td id="dm">Thuộc Danh Mục</td>
                            <td id="dm">Thuộc Chuyên Mục</td>
                            <td>Ngày Tạo</td>
                            <td>Ngày Cập Nhật</td>
                            <td>Tác Vụ</td>
                        </thead>

                        <?php foreach ($row_detail as $key => $row) {?>

                            <tr>
                                <td id="id"> <?php echo $row['id_product'] ?> </td>
                                <td> <?php echo $row['code_product'] ?></td>
                                <td id="name"> <?php echo $row['name_product'] ?></td>
                                <td style="display: flex; justify-content: center;"> <img src="<?php echo $row['img_product'] ?>" width="100%" height="95px" /> </td>
                                <td> <?php echo number_format($row['price_product'],0,' ','.')?>₫</td>
                                <td> <?php echo $row['size_product'] ?></td>
                                <td> <?php echo $row['material_product'] ?></td>
                                <td> <?php echo $row['color_product'] ?></td>
                                <td> <?php echo $row['id_cate'] ?></td>
                                <td> <?php echo $row['id_list'] ?></td>
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
        <?php
            }    
        ?>
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