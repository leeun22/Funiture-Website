<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	// session_start();
    // ob_start();
    // session_destroy();
	
    /** Kết nối dữ liệu với database */  
    include("./dbconnect.php");

    /** Kiểm tra dữ liệu từ Client đã được nhận từ thuộc tính POST qua nút submit hay chưa */
    if(isset($_POST['submit'])) {
		if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['phone'])  && isset($_POST['passwordCon'])) {
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$passwordCon = $_POST['passwordCon'];

		// Kiểm tra xem trên database đã có username hay email này chưa? Nếu trùng thì ycau ng dùng đổi thông tin.
		$check_user = "SELECT * FROM `customers` WHERE `email_customer`='$email' OR `phone_customer`='$phone'";
		$check_result = mysqli_query($conn, $check_user);

		// Đếm xem có mấy bản ghi truy vấn từ database thỏa mãn điều kiện của $check_user
		$num_rows = mysqli_num_rows($check_result);
		// Nếu có bản ghi nào trên bảng customers trùng với email và sđt đăng ký mới thì đưa ra thông báo lỗi
		if ($num_rows != 0) {
			echo ("<script> alert('Xin lỗi ! Tài khoản Email hoặc SĐT này đã được sử dụng'); location='index.php?go=login-signup-customer';  </script>");
		}

		if (strlen($password) < 8  ) {
			echo ("<script> alert('Mật khẩu yêu cầu tối thiểu 8 kí tự'); location='index.php?go=login-signup-customer';  </script>");
		} 
		if ($password !== $passwordCon) {
			echo ("<script> alert('Kiểm tra lại mật khẩu !'); location='index.php?go=login-signup-customer';  </script>");
		}
	
        /** Kiểm tra xem có dữ liệu phía Client nhập vào để trống hay k. Nếu 1 trong 3 gtri rỗng thì thông báo lỗi
		 *  Và sđt bắt buộc phải có 10 số, bắt đầu bằng các đầu số của các nhà mạng hiện nay
		 */
		if (!$result = preg_match('/^(09|03|07|08|05)+([0-9]{8})$/', $phone) && strlen($phone) == 10) {
			echo ("<script> alert('Bạn cần kiểm tra lại số điện thoại nhập vào !'); location='index.php?go=login-signup-customer'; </script>");
		} else {
			$sql = "INSERT INTO `customers` (`name_customer`, `email_customer`, `username`, `phone_customer`, `password`) VALUES ('$fullname', '$email', '$username', '$phone', '$password')";
				if ($conn->query($sql) === TRUE) {
					echo ("<script> alert('Bạn đã đăng ký tài khoản thành công ! Vui lòng đăng nhập để mua hàng'); location='index.php?go=login-signup-customer';  </script>");
				} else {
					// Lỗi này có thể sẽ xảy ra nếu các bản ghi đăng ký trùng lặp thông tin với bản ghi đã có trên bảng database
					echo "Kết nối database không thành công: {$sql}" . $conn->connect_error;   //Lỗi này đưa vào 1 chuỗi là $sql gọi đến biến conn truyền vào error
					//Đóng database
					$conn->close();
				}
		}
	}
} 
?>