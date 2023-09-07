<html>
<!--File Xử lý dữ liệu từ form và Insert dữ liệu vào database-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Thêm thành viên</title>
</head>

<body>
	<?php
	/**Kết nối dữ liệu với database */
	require ('./dbconnect.php');
	/**Kiểm tra dữ liệu từ Client đã được nhận từ thuộc tính POST qua nút submit hay chưa */
	if (isset($_POST['submit'])) {
		/**Khi đã nhận được dữ liệu r -> Lưu dữ liệu từ POST vào những biến khác nhau */
		$hoten = $_POST['hoten'];
		$matkhau = $_POST['matkhau'];

		/**Kiểm tra xem có dữ liệu phía Client nhập vào để trống hay k. Nếu 1 trong 3 gtri rỗng thì thông báo lỗi
		 * Và sđt bắt buộc phải có 10 số, bắt đầu bằng các đầu số của các nhà mạng hiện nay
		 */
		if (empty($hoten) || empty($matkhau)) {
			echo ("<script> alert ('Bạn vui lòng nhập đầy đủ thông tin !'); location='?admin=qltv_add'; </script>");
		} elseif (strlen($matkhau) <= 5) {
			echo ("<script> alert('Mật khẩu phải có ít nhất 6 kí tự'); location='?admin=qltv_add';   </script>");
		}else {
			$sql = "INSERT INTO `login` (`hoten`, `matkhau`) VALUES ('$hoten', '$matkhau')";
				if ($conn->query($sql) === TRUE) {
					echo ("<script> alert('Bạn đã thêm thành công.'); location='?admin=quanly';  </script>");
				} else {
					echo "Kết nối database không thành công: {$sql}" . $conn->connect_error;   //Lỗi này đưa vào 1 chuỗi là $sql gọi đến biến conn truyền vào error
					//Đóng database
					$conn->close();
				}
		}		


	}
	?>


</body>

</html>