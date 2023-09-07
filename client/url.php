<?php 
	
	include "library/fun_sp.php";
	// Load some products
	$listSome_bobanghe = loadSome_sanpham_bobanghe();
	$listSome_banan = loadSome_sanpham_banan();
	$listSome_giuongngu = loadSome_sanpham_giuongngu();
	$listSome_bantho = loadSome_sanpham_bantho();
	// $row = getPro_id($id);

	// Load all products
	$list_banan = loadall_sanpham_banan();
	// $list_bobanghe = loadall_sanpham_bobanghe($id);
	$list_bantho = loadall_sanpham_bantho();
	// $list_giuongngu = loadall_sanpham_giuongngu();
	$list_productHot = loadall_sanpham_productHot();

	// Load news
	$list_news = feature_news();
	
	if(isset($_GET['go'])) {
		switch($_GET['go'])
		{
			case "home" :
			include ("home.php") ;
			//ngăn không cho tiếp tục thực hiện các dòng code bên dưới.
			break;
	
			case "gioithieu" :
			include ("gioithieu.php") ;
			break;
			
			// Danh sách tất cả các sp theo từng danh mục id_cate
			case "product-category" :
			include ("product-category.php") ;
			break;
	
			// Danh sách tất cả các sp theo từng chuyên mục id_list
			case "product-list" :
			include ("product-list.php") ;
			break;
	
			// Chi tiết sản phẩm
			case "product-detail" :
			include ("product-detail.php") ;
			break;
			
			case "address" :
			include ("address.php") ;
			break;
	
			case "news" :
			include ("news.php") ;
			break;
			
			case "support" :
			include ("support.php") ;
			break;
	
			case "cart" :
			include ("cart.php") ;
			break;
	
			case "cart-bought-now" :
			include ("cart-bought-now.php") ;
			break;
	
			case "cart-update-pro" :
			include ("cart-update-pro.php") ;
			break;
	
			case "cart-detail" :
			include ("cart-detail.php") ;
			break;
	
			case "checkout" :
			include ("checkout.php") ;
			break;
	
			case "login-signup-customer" :
			include ("login-signup-customer.php") ;
			break;
	
			case "tab-bar-mobile" :
			include ("tab-bar-mobile.php") ;
			break;

			case "admin" :
			include ("../admin/index.php") ;
			break;
		
			default :
			include("home.php");
		}	
	} else {
		include("home.php");
	}

?>

<script src="./javascript/li_script.js"></script>
