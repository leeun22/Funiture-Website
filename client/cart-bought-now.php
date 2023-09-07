<?php
    include "./dbconnect.php";
    echo"DANH SÁCH ORDER:";
    if (isset($_POST['submit'])) {
        $id= $_POST['id_product']; 
        $quantity = (isset($_POST['quantity'])) ? $_POST['quantity'] : 1;

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
            'quantity' => $quantity
        ];

        
        // Kiểm tra nếu id sp muốn mua đã có trong giỏ rồi thì biến quantity:số lg sp sẽ cộng lên 1
        if (isset($_SESSION['carts'][$id])) {
            $_SESSION['carts'][$id]['quantity'] += $quantity;
        } 
        // Ngược lại nếu id là sp mới thì sẽ thực hiện lấy sp đó ra và lưu vào session
        else {
            $_SESSION['carts'][$id] = $data;
        }

        header("location:?go=cart-detail");
    }
?>