<html>
<!--File Xử lý dữ liệu từ form và Insert dữ liệu vào database-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hỗ Trợ Khách Hàng</title>
</head>

<body>
	<?php
	/**Kết nối dữ liệu với database */
	require_once('./dbconnect.php');
	
	/**Kiểm tra dữ liệu từ Client đã được nhận từ thuộc tính POST qua nút submit hay chưa */
	if (isset($_POST['submit'])) {
		/**Khi đã nhận được dữ liệu r -> Lưu dữ liệu từ POST vào những biến khác nhau */
		$fullname = $_POST['fullname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$comments = $_POST['comments'];

		/**Kiểm tra xem có dữ liệu phía Client nhập vào để trống hay k. Nếu 1 trong 3 gtri rỗng thì thông báo lỗi
		 * Và sđt bắt buộc phải có 10 số, bắt đầu bằng các đầu số của các nhà mạng hiện nay
		 */
		if (!$result = preg_match('/^(09|03|07|08|05)+([0-9]{8})$/', $phone) && strlen($phone) == 10) {
			echo ("<script> alert('Bạn cần kiểm tra lại số điện thoại nhập vào !'); location='index.php'; </script>");
		} 
			
		else {
			$sql = "INSERT INTO `support` (`fullname`, `phone`, `email`, `comments`) VALUES ('$fullname', '$phone', '$email', '$comments')" ;
				if ($conn->query($sql) === TRUE) {
					echo ("<script> alert('Bạn đã gửi yêu cầu hỗ trợ thành công.'); location='index.php?go=home';  </script>");
				} else {
					echo "Kết nối database không thành công: {$sql}" . $conn->connect_error;   //Lỗi này đưa vào 1 chuỗi là $sql gọi đến biến conn truyền vào error
					//Đóng database
					$conn->close();
				}
		}
		// if (empty($fullname) || empty($phone) || empty($email)) {
		// 	echo ("<script> alert ('Để hỗ trợ được cho bạn tốt nhất. Vui lòng bạn nhập đầy đủ thông tin !'); location='index.php?go=support'; </script>");
		// } elseif (!($result = preg_match('/^(09|03|07|08|05)+([0-9]{8})$/', $phone) && strlen($phone) == 10)) {
		// 	echo ("<script> alert('Bạn cần kiểm tra lại số điện thoại nhập vào !'); location='index.php?go=support';  </script>");
		// }else {
		// 	$sql = "INSERT INTO `user` (`fullname`, `phone`, `email`, `comments`) VALUES ('$fullname', '$phone', '$email', '$comments')" ;
		// 		if ($conn->query($sql) === TRUE) {
		// 			echo ("<script> alert('Bạn đã gửi yêu cầu hỗ trợ thành công.'); location='index.php';  </script>");
		// 		} else {
		// 			echo "Kết nối database không thành công: {$sql}" . $conn->connect_error;   //Lỗi này đưa vào 1 chuỗi là $sql gọi đến biến conn truyền vào error
		// 			//Đóng database
		// 			$conn->close();
		// 		}
		// }
	}


	?>