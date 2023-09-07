<!-- Vì login_customer.php là file xử lý yêu cầu từ checkout.php và k chuyển hướng ?go= từ url của client;
cx k đc hưởng session start ở index.php cho folder client. Vì vậy cần khai báo lại để sử dụng SESSION-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
    session_start();
    ob_start();
    // session_destroy();

    /**Kết nối dữ liệu với database */
    include ('./dbconnect.php'); 

    /**Kiểm tra dữ liệu từ Client đã được nhận từ thuộc tính POST qua nút submit hay chưa */
    if(isset($_POST['submit'])) {
        if (isset($_POST['loginEmailPhone']) && isset($_POST['loginPassword'])) {
            $lgEmail = $_POST['loginEmailPhone'];
            $lgPhone = $_POST['loginEmailPhone'];
            $lgPassword = $_POST['loginPassword'];
    
        $sql = "SELECT * FROM `customers` WHERE `email_customer`='$lgEmail' OR `phone_customer`='$lgPhone'";
        $query = mysqli_query($conn, $sql);
        // $rowlogin = mysqli_fetch_assoc($result); Ko nhận cú pháp này !
        $data = mysqli_fetch_array($query, MYSQLI_ASSOC);

        // Đếm xem có mấy bản ghi truy vấn từ database thỏa mãn điều kiện của $sql
        $check = mysqli_num_rows($query);
        // var_dump($check);
        // die();

        // Nếu có 1 bản ghi email or phone thỏa mãn điều kiện (nghĩa là khác 0) thì kiểm tra đến password
        // Password cũng thỏa mãn thì thực hiện lưu các gtri đó vào mảng và gán nó cho 1 biến session  
        if($check != 0) {
            if ($data['password'] === $lgPassword) {
                $_SESSION['user'] = $data;
                // header('location:index.php?go=checkout');
            } else {
                echo ("<script>alert('Sai mật khẩu. Vui lòng thử lại !');location='index.php?go=checkout';</script>");
            }
        } else {
            echo ("<script>alert('Sai Email hoặc Số điện thoại. Vui lòng thử lại !');location='index.php?go=checkout';</script>");
            exit();
        }

        // Thực hiện hđ actionLogin bằng cách bắt key của $_POST['actionLogin'] qua name và value 
        if(isset($_POST['actionLogin'])) {
            $action = $_POST['actionLogin'];
            // echo "$action";
            // die();
            if ($action == 'home') {
                header('location:index.php?go=home');
            } 
            else 
                header('location:index.php?go=checkout');
        }
        
    }
}
?>