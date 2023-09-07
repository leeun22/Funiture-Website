<?php
include "./library/fun_sp.php";
$customer = loadall_customer();
$order = loadall_order();

/*************************MENU Vertical & Horizontal********************/
if (isset($_GET["admin"])) {

	switch ($_GET["admin"]) {
		case "background_admin_vd":
			include("background_admin_vd.php");
			break;
			/*************************Quản Lý Thành Viên********************/
		case "quanly":
			include("quanly.php");
			break;

		case "qltv_add":
			include("qltv_add.php");
			break;

		case "qltv_edit":
			include("qltv_edit.php");
			break;

		case "qltv_delete":
			include("qltv_delete.php");
			break;

		case "qltv_xladd":
			include("qltv_xladd.php");
			break;

		case "qltv_xledit":
			include("qltv_xledit.php");
			break;

			/*************************Bàn Ghế Gỗ********************/
		case "product_cate":
			include("product_cate.php");
			break;
		case "product_cate_add":
			include("product_cate_add.php");
			break;
		case "product_cate_edit":
			include("product_cate_edit.php");
			break;

		case "product_cate_delete":
			include("product_cate_delete.php");
			break;
		case "product_cate_xladd":
			include("product_cate_xladd.php");
			break;
		case "product_cate_xledit":
			include("product_cate_xledit.php");
			break;

			/*************************Bộ Bàn Ăn********************/
		case "bobanan":
			include("bobanan.php");
			break;

		case "bobanan_add":
			include("bobanan_add.php");
			break;

		case "bobanan_edit":
			include("bobanan_edit.php");
			break;

		case "bobanan_delete":
			include("bobanan_delete.php");
			break;
		case "bobanan_xladd":
			include("bobanan_xladd.php");
			break;
		case "bobanan_xledit":
			include("bobanan_xledit.php");
			break;

			/*************************Giường Ngủ********************/
		case "giuongngu":
			include("giuongngu.php");
			break;
		case "giuongngu_add":
			include("giuongngu_add.php");
			break;
		case "giuongngu_edit":
			include("giuongngu_edit.php");
			break;

		case "giuongngu_delete":
			include("giuongngu_delete.php");
			break;
		case "giuongngu_xladd":
			include("giuongngu_xladd.php");
			break;
		case "giuongngu_xledit":
			include("giuongngu_xledit.php");
			break;

			/*************************Phòng Thờ********************/
		case "phongtho":
			include("phongtho.php");
			break;
		case "phongtho_add":
			include("phongtho_add.php");
			break;
		case "phongtho_edit":
			include("phongtho_edit.php");
			break;

		case "phongtho_delete":
			include("phongtho_delete.php");
			break;
		case "phongtho_xladd":
			include("phongtho_xladd.php");
			break;
		case "phongtho_xledit":
			include("phongtho_xledit.php");
			break;

			// /********************** Khách Hàng **********************/
		case "customer":
			include("customer.php");
			break;

			// /********************** Đơn Hàng **********************/
		case "order":
			include("order.php");
			break;

		default:
			include("background_admin_vd.php");
	}
} else {
	include("background_admin_vd.php");
}
