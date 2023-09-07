
<?php
        //Hàm kết nối database
    function connect_database() {
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp");
        if($conn->connect_error) {
            die("Could not connect: ".$conn->connect_error);
        }
        mysqli_select_db($conn, "doantn_noithatdogomp");
        @mysqli_query($conn, "SET NAMES 'utf8'");
        // Đóng kết nối
        mysqli_close($conn);
    }

    /***  BỘ BÀN ĂN ****/
        // Hàm load ra tất cả các sản phẩm từ Bảng `bobanan` có điều kiện theo từ khóa 
        // và sx id theo thứ tự Giảm dần(desc) từ sp mới nhất về sp cũ nhất (Tăng dần - asc) và trả về 8 SP
    function loadSome_sanpham_banan($keyw="", $id_product=0) {
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        
        $sql = "select * from `product` where `id_cate` = 2";
        if ($keyw!="") {
            $sql.=" and name like '%".$keyw."%'";
        }
        if ($id_product>0) {
            $sql.=" and id_product = '".$id_product."'";
        }
        $sql.=" order by id_product desc limit 8";
        
        $listsanpham = mysqli_query($conn, $sql);
        // Tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_banan = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_product' => $row_banan['id_product'],
                'id_cate' => $row_banan['id_cate'],
                'name_product' => $row_banan['name_product'],
                'img_product' => $row_banan['img_product'],
                'price_product' => $row_banan['price_product'],
            );
            // $rowNum++;
        }
        return $data;
    }

        // Hàm load ra tất cả các sản phẩm từ Bảng `banhd` có điều kiện theo từ khóa 
    // và sx id theo thứ tự Giảm dần(desc) từ sp mới nhất về sp cũ nhất (Tăng dần - asc)
    function loadall_sanpham_banan($keyw = "", $id_product = 0)
    {
        $conn = mysqli_connect("localhost", "root", "", "doantn_noithatdogomp");

        $sql = "select * from `product` where `id_cate` = 2";
        if ($keyw != "") {
            $sql .= " and name like '%" . $keyw . "%'";
        }
        if ($id_product > 0) {
            $sql .= " and id_product = '" . $id_product . "'";
        }
        $sql .= " order by id_product desc";

        $listsanpham = mysqli_query($conn, $sql);
        // Tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_banan = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_product' => $row_banan['id_product'],
                'id_cate' => $row_banan['id_cate'],
                'name_product' => $row_banan['name_product'],
                'img_product' => $row_banan['img_product'],
                'price_product' => $row_banan['price_product'],
            );
            // $rowNum++;
        }
        return $data;
    }

    /***  BÀN GHẾ GỖ ****/
    // Load ra 8 sản phẩm, sx tăng dần từ sp cũ đến mới
    function loadSome_sanpham_bobanghe($keyw="", $id_product=0) {
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        
        $sql = "select * from `product` where `id_cate` = 1";
        if ($keyw!="") {
            $sql.=" and name like '%".$keyw."%'";
        }
        if ($id_product>0) {
            $sql.=" and id_product = '".$id_product."'";
        }
        $sql.=" order by id_product asc limit 8";
        
        $listsanpham = mysqli_query($conn, $sql);
        // Tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_bobanghe = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_product' => $row_bobanghe['id_product'],
                'id_cate' => $row_bobanghe['id_cate'],
                'name_product' => $row_bobanghe['name_product'],
                'img_product' => $row_bobanghe['img_product'],
                'price_product' => $row_bobanghe['price_product'],
            );
            // $rowNum++;
        }
        return $data;
    }

        //Hàm thực thi hàm connect_database để kết nối với database
        //Sau đó load ra tất cả các sản phẩm thuộc danh mục trong product_cate 
    function loadall_category_product($id) {
        $sql = "select * from `product`  where `id_cate`='$id'";  
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        $listsanpham = mysqli_query($conn, $sql);
        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_bobanghe = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_product' => $row_bobanghe['id_product'],
                'id_cate' => $row_bobanghe['id_cate'],
                'name_product' => $row_bobanghe['name_product'],
                'img_product' => $row_bobanghe['img_product'],
                'price_product' => $row_bobanghe['price_product'],
                // 'quantity' => 1
            );
            // $rowNum++;
        }
    
        return $data;
    }

    /***  GIƯỜNG NGỦ ****/
    // Load ra 8 sản phẩm, sx tăng dần từ sp cũ đến mới
    function loadSome_sanpham_giuongngu($keyw="", $id_product=0) {
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        
        $sql = "select * from `product` where `id_cate` = 3";
        if ($keyw!="") {
            $sql.=" and name like '%".$keyw."%'";
        }
        if ($id_product>0) {
            $sql.=" and id_product = '".$id_product."'";
        }
        $sql.=" order by id_product asc limit 8";
        
        $listsanpham = mysqli_query($conn, $sql);
        // Tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_giuongngu = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_product' => $row_giuongngu['id_product'],
                'name_product' => $row_giuongngu['name_product'],
                'img_product' => $row_giuongngu['img_product'],
                'price_product' => $row_giuongngu['price_product'],
            );
            // $rowNum++;
        }
        return $data;
    }
    
        //Hàm thực thi hàm connect_database để kết nối với database
        //Sau đó load ra tất cả các sản phẩm thuộc chuyên mục trong product_list
    function loadall_list_product($id) {
        $sql = "select * from `product` where `id_list` = '$id'"; 
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        $listsanpham = mysqli_query($conn, $sql);
        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_giuongngu = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_product' => $row_giuongngu['id_product'],
                'id_list' => $row_giuongngu['id_list'],
                'name_product' => $row_giuongngu['name_product'],
                'img_product' => $row_giuongngu['img_product'],
                'price_product' => $row_giuongngu['price_product'],
            );
            // $rowNum++;
        }
    
        return $data;
    }

    /***  PHÒNG THỜ ****/
    // Load ra 8 sản phẩm, sx tăng dần từ sp cũ đến mới
    function loadSome_sanpham_bantho($keyw="", $id_product=0) {
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        
        $sql = "select * from `product` where `id_cate` = 8";
        if ($keyw!="") {
            $sql.=" and name like '%".$keyw."%'";
        }
        if ($id_product>0) {
            $sql.=" and id_product = '".$id_product."'";
        }
        $sql.=" order by id_product asc limit 8";
        
        $listsanpham = mysqli_query($conn, $sql);
        // Tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_bantho = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_product' => $row_bantho['id_product'],
                'name_product' => $row_bantho['name_product'],
                'img_product' => $row_bantho['img_product'],
                'price_product' => $row_bantho['price_product'],
            );
            // $rowNum++;
        }
        return $data;
    }

        //Hàm thực thi hàm connect_database để kết nối với database
        //Sau đó load ra tất cả các sản phẩm có trong Bảng `bantho`
    function loadall_sanpham_bantho() {
        $sql = "select * from `product` where `id_cate` = 8"; 
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        $listsanpham = mysqli_query($conn, $sql);
        // Tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_bantho = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_product' => $row_bantho['id_product'],
                'name_product' => $row_bantho['name_product'],
                'img_product' => $row_bantho['img_product'],
                'price_product' => $row_bantho['price_product'],
            );
            // $rowNum++;
        }
    
        return $data;
    }

    /***  PRODUCT HOT ****/
        //Hàm thực thi hàm connect_database để kết nối với database
        //Sau đó load ra tất cả các sản phẩm có trong Bảng `product_hot`
    function loadall_sanpham_productHot() {
        $sql = "select * from `product` where `is_featured` = 1"; 
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        $listsanpham = mysqli_query($conn, $sql);
        // Tạo 1 mảng array để chứa các dữ liệu được trả về
        // Trả về những trường muốn lấy ra của sp kh muốn mua (dạng mảng)
        $data = [];
        while ($row_productHot = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                'id_product' => $row_productHot['id_product'],
                'name_product' => $row_productHot['name_product'],
                'img_product' => $row_productHot['img_product'],
                'price_product' => $row_productHot['price_product'],
                'discount_amout' => $row_productHot['discount_amout'],
                // Xử lý % giảm giá
                'discount_percent' => (($row_productHot['price_product'] - $row_productHot['discount_amout']) / $row_productHot['price_product']) * 100,
            );
            // $rowNum++;
        }
    
        return $data;
    }

    /*** TIN TỨC ***/
    //Hàm load ra những tin tức nổi bật có trong Bảng `news`
    function feature_news() {
        $sql = "select * from `news` where `is_featured` = 1"; 
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        $listsanpham = mysqli_query($conn, $sql);
        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_ftnews = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_new' => $row_ftnews['id_new'],
                'name_new' => $row_ftnews['name_new'],
                'img_new' => $row_ftnews['img_new'],
                'description_short' => $row_ftnews['description_short'],
                'is_featured' => $row_ftnews['is_featured'],
            );
            // $rowNum++;
        }
    
        return $data;
    }

    /*** CHI TIẾT SẢN PHẨM  ***/

    //Hàm thực thi hàm connect_database để kết nối với database
    //Sau đó load ra thông tin chi tiết sản phẩm theo id_product 
    function loadall_detail_product($id) {
        $sql = "select * from `product`  where `id_product`='$id'";  
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        $listsanpham = mysqli_query($conn, $sql);
        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_product = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_product' => $row_product['id_product'],
                'code_product' => $row_product['code_product'],
                'name_product' => $row_product['name_product'],
                'img_product' => $row_product['img_product'],
                'price_product' => $row_product['price_product'],
                'discount_percent' => $row_product['discount_percent'],
                'discount_amout' => $row_product['discount_amout'],
                'size_product' => $row_product['size_product'],
                'material_product' => $row_product['material_product'],
                'color_product' => $row_product['color_product'],
                'des_product' => $row_product['des_product'],
                'is_featured' => $row_product['is_featured'],
                'id_cate' => $row_product['id_cate'],
                'id_list ' => $row_product['id_list '],
                'created_at ' => $row_product['created_at '],
                'updated_at ' => $row_product['updated_at '],
            );
            // $rowNum++;
        }
    
        return $data;
    }
        

    
    /*** LOAD TẤT CẢ SẢN PHẨM THEO id_cate VÀO TRANG ADMIN ***/

    //Hàm thực thi hàm connect_database để kết nối với database
    //Sau đó load ra thông tin chi tiết sản phẩm theo id_product 
    function loadall_category_product_admin($id) {
        $sql = "select * from `product`  where `id_cate`='$id'";  
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        $listsanpham = mysqli_query($conn, $sql);
        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_product = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_product' => $row_product['id_product'],
                'code_product' => $row_product['code_product'],
                'name_product' => $row_product['name_product'],
                'img_product' => $row_product['img_product'],
                'price_product' => $row_product['price_product'],
                'discount_percent' => $row_product['discount_percent'],
                'discount_amout' => $row_product['discount_amout'],
                'size_product' => $row_product['size_product'],
                'material_product' => $row_product['material_product'],
                'color_product' => $row_product['color_product'],
                'des_product' => $row_product['des_product'],
                'is_featured' => $row_product['is_featured'],
                'id_cate' => $row_product['id_cate'],
                'id_list' => $row_product['id_list'],
                'created_at' => $row_product['created_at'],
                'updated_at' => $row_product['updated_at'],
            );
            // $rowNum++;
        }
    
        return $data;
    }

    /*** LOAD TẤT CẢ SẢN PHẨM VÀO TRANG ADMIN ***/

    //Hàm thực thi hàm connect_database để kết nối với database
    //Sau đó load ra thông tin chi tiết sản phẩm theo id_product 
    function loadall_customer() {
        $sql = "select * from `customers` ";  
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        $listsanpham = mysqli_query($conn, $sql);
        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_customer = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_customer' => $row_customer['id_customer'],
                'username' => $row_customer['username'],
                'password' => $row_customer['password'],
                'name_customer' => $row_customer['name_customer'],
                'gender_customer' => $row_customer['gender_customer'],
                'phone_customer' => $row_customer['phone_customer'],
                'email_customer' => $row_customer['email_customer'],
                'comments' => $row_customer['comments'],
                'birthday_customer' => $row_customer['birthday_customer'],
                'avatar_customer' => $row_customer['avatar_customer'],
                'shipped_address' => $row_customer['shipped_address'],
                'created_at' => $row_customer['created_at'],
                'updated_at' => $row_customer['updated_at'],
            );
            // $rowNum++;
        }
    
        return $data;
    }

    /*** LOAD TẤT CẢ ĐƠN HÀNG VÀO TRANG ADMIN ***/

    //Hàm thực thi hàm connect_database để kết nối với database
    //Sau đó load ra thông tin chi tiết sản phẩm theo id_product 
    function loadall_order() {
        $sql = "select * from `orders` ";  
        $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
        $listsanpham = mysqli_query($conn, $sql);
        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tách để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $data = [];
        // $rowNum = 1;
        while ($row_order = mysqli_fetch_array($listsanpham, MYSQLI_ASSOC)) {
            $data[] = array(
                // 'rowNum' => $rowNum, // sử dụng biến tự tăng để làm dữ liệu cột STT
                'id_order' => $row_order['id_order'],
                'id_customer' => $row_order['id_customer'],
                'id_product' => $row_order['id_product'],
                'quantity_order' => $row_order['quantity_order'],
                'unit_price' => $row_order['unit_price'],
                'discount_percent' => $row_order['discount_percent'],
                'discount_amout' => $row_order['discount_amout'],
                'total_order' => $row_order['total_order'],
                'note_order' => $row_order['note_order'],
                'date_order' => $row_order['date_order'],
                'shipped_date_order' => $row_order['shipped_date_order'],
                'shipped_address' => $row_order['shipped_address'],
                'shipping_fee_order' => $row_order['shipping_fee_order'],
                'id_payment_type' => $row_order['id_payment_type'],
                'paid_date_order' => $row_order['paid_date_order'],
            );
            // $rowNum++;
        }
    
        return $data;
    }

    /*** CART ***/
    // Lấy ra thông tin sản phẩm mà khách hàng muốn mua (lấy theo id sp)
    // function getPro_id($id) {
    //     // global $conn;
    //     $conn=mysqli_connect("localhost","root","", "doantn_noithatdogomp"); 
    //     // Vì điều kiện là lấy ra đúng 1 bản ghi có id như đã chọn vậy nên k cần mảng array
    //     $sql = "SELECT * FROM `product` WHERE `id_product`='$id'";

    //     // Kết nối vào database và thực thi câu truy vấn SQL để lấy về dữ liệu theo điều kiện
    //     $query = mysqli_query($conn, $sql);

    //     // Trả về những trường muốn lấy ra của sp kh muốn mua (dạng mảng)
    //     if ($query) {
    //         $resultRow = mysqli_fetch_assoc($query); 
    //     }
    //     $quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;
    //     $data = [
    //         'id_product' => $resultRow['id_product'],
    //         'code_product' => $resultRow['code_product'],
    //         'name_product' => $resultRow['name_product'],
    //         'img_product' => $resultRow['img_product'],
    //         // Giá: Nếu có trường sale price (discount_amout) thì lấy trường đó khi > 0, ngược lại nếu k có thì sẽ lấy trường price
    //         'price_product' => ($resultRow['discount_amout'] > 0) ? $resultRow['discount_amout'] : $resultRow['price_product'],
    //         'size_product' => $resultRow['size_product'],
    //         'material_product' => $resultRow['material_product'],
    //         'quantity' => $quantity
    //     ];

    //     // Để show ra bản ghi thì cần return
    //     return $data;
    // }

    /*  // Vì điều kiện là lấy ra đúng 1 record có id như đã chọn vậy nên k cần mảng array
        $sql = "SELECT * FROM `banghego` WHERE `id_bobanghe`='$id'";

        // mysqli_fetch_array(); mysqli_fetch_assoc() : 
        // Là trả về đúng 1 bản ghi bao gồm tất cả các trường của sp đó theo đk where (ở dạng mạng)
        $resultRow = mysqli_fetch_array($query, MYSQLI_ASSOC); // 1 record
        $resultRow = mysqli_fetch_assoc($query); // 1 record
    */
?>