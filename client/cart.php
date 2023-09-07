<?php
    include "./dbconnect.php";
    echo"DANH SÁCH ORDER:";
    if (isset($_GET['id_product'])) {
        $id= $_GET['id_product'];
        $quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;
        // Thực hiện loạt hđ
        $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';

        //Lấy ra sp kh muốn mua
        // $row = getPro_id($id); 
        
        //SESSION: Biến có phiên làm việc được sd ở tất cả các trang con. Để sử dụng đc,hãy gọi session start() ở trang index.php
        // $_SESSION['cart'] : Biến cart dạng session và có thể sd ở bất kì đâu, lưu trữ đc tạm thời cho đến khi tắt trình duyệt thì mới mất
        // $cart: Biến cart bt
        // $_SESSION['carts'][$id]: Mảng nhiều chiều
        // var_dump($action);
        // die();

        $sql = mysqli_query($conn,"SELECT * FROM `product` WHERE `id_product`='$id'");

        if ($sql) {
            $resultRow = mysqli_fetch_assoc($sql); 
        }

        $data = [
            'id_product' => $resultRow['id_product'],
            'code_product' => $resultRow['code_product'],
            'name_product' => $resultRow['name_product'],
            'img_product' => $resultRow['img_product'],
            // Giá: Nếu có trường sale price (discount_amout) thì lấy trường đó khi > 0, ngược lại nếu k có thì sẽ lấy trường price
            'price_product' => ($resultRow['discount_amout'] > 0) ? $resultRow['discount_amout'] : $resultRow['price_product'],
            'size_product' => $resultRow['size_product'],
            'material_product' => $resultRow['material_product'],
            'quantity' => $quantity,
        ];
        
        // Nếu nhấn btn thêm giỏ hàng ở trang Home thì action sẽ nhận add, 
        // ngược lại nếu nhấn btn ở trang product-detail (vì có trường chọn slg) nên sẽ thực hiện hđ Get_action
        if($action == 'add') {
            // Kiểm tra nếu id sp muốn mua đã có trong giỏ rồi thì biến quantity:số lg sp sẽ cộng lên 1
            if (isset($_SESSION['carts'][$id])) {
                $_SESSION['carts'][$id]['quantity'] += $quantity;
            } 
            // Ngược lại nếu id là sp mới thì sẽ thực hiện lấy sp đó ra và lưu vào session
            else {
                $_SESSION['carts'][$id] = $data;
            }
            header("location:?go=home");
        }

        // Xóa sp từ trang Cart-Deatil
        if($action == 'deleteCartDetail') {
            unset($_SESSION['carts'][$id]);
            header("location:?go=cart-detail");
        }

        // Xóa sp từ Cart-Menu
        if($action == 'deleteCartMenu') {
            unset($_SESSION['carts'][$id]);
            header("location:?go=home");
        }

        // Thêm sp vào giỏ hàng từ trang Product-category
        if(isset($_GET['id_cate'])) {
            $id_cate = $_GET['id_cate'];
        
            if($action == 'addCatetoCart') {
                // Kiểm tra nếu id sp muốn mua đã có trong giỏ rồi thì biến quantity:số lg sp sẽ cộng lên 1
                if (isset($_SESSION['carts'][$id])) {
                    $_SESSION['carts'][$id]['quantity'] += $quantity;
                } 
                // Ngược lại nếu id là sp mới thì sẽ thực hiện lấy sp đó ra và lưu vào session
                else {
                    $_SESSION['carts'][$id] = $data;
                }
                header("location:?go=product-category&id_cate=$id_cate");
            }
        }

        // Thêm sp vào giỏ hàng từ trang Product-list
        if(isset($_GET['id_list'])) {
            $id_list = $_GET['id_list'];
        
            if($action == 'addListtoCart') {
                // Kiểm tra nếu id sp muốn mua đã có trong giỏ rồi thì biến quantity:số lg sp sẽ cộng lên 1
                if (isset($_SESSION['carts'][$id])) {
                    $_SESSION['carts'][$id]['quantity'] += $quantity;
                } 
                // Ngược lại nếu id là sp mới thì sẽ thực hiện lấy sp đó ra và lưu vào session
                else {
                    $_SESSION['carts'][$id] = $data;
                }
                header("location:?go=product-list&id_list=$id_list");
            }
        }
        
        // Thêm sp vào giỏ hàng từ trang Product-detail
        if($action == 'addProDetailtoCart') {
            // Kiểm tra nếu id sp muốn mua đã có trong giỏ rồi thì biến quantity:số lg sp sẽ cộng lên 1
            if (isset($_SESSION['carts'][$id])) {
                $_SESSION['carts'][$id]['quantity'] += $quantity;
            } 
            // Ngược lại nếu id là sp mới thì sẽ thực hiện lấy sp đó ra và lưu vào session
            else {
                $_SESSION['carts'][$id] = $data;
            }
            header("location:?go=product-detail&id_product=$id");
        }

        // Cứ mỗi lần ng dùng thêm sp vào giỏ hàng thành công thì sẽ hiển thị ra thông báo
        // $_SESSION['noti_carts'] = 1;
    } 

        // header("location:?go=home");
        // echo ("<script>alert('Bạn đã cập nhật thành công.'); location='?go=cart-detail'; </script>");
?>