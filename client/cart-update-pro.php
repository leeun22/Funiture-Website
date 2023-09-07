<?php
    include "./dbconnect.php";
    echo"DANH SÁCH ORDER:";
    if (isset($_POST['submit'])) {
        $id= $_POST['id_product'];
        $action = $_POST['action'];
        $quantity = $_POST['quantity'];

        $sql = mysqli_query($conn,"SELECT * FROM `product` WHERE `id_product`='$id'");

        // Trả về những trường muốn lấy ra của sp kh muốn mua (dạng mảng)
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

        if($action == 'update') {
            $_SESSION['carts'][$id]['quantity'] = $quantity;
        }

        header("location:?go=cart-detail");
    }
?>