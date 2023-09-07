<?php
session_start();
ob_start();
// session_destroy() ;
?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nội Thất Minh Phong</title>
	<!--A favicon is a small image displayed next to the page title in the browser tab-->
	<link rel="icon" type="image/x-icon" href="images/LOGO/LOGO-revovebg.png">
</head>

<body>

	<div id="main">
		<?php include("header.php") ?>
		<?php include("menu.php") ?>
		<?php include("url.php") ?>
		<?php include("footer.php") ?>
	</div>

</body>

</html>