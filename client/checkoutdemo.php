<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Checkout</title>
</head>
<body>
<?php
    session_start();
    // session_destroy();
    include_once ("./dbconnect.php");

    if (isset($_SESSION['user']) && isset($_SESSION['avatar_customer'])) {
        $avatarUser = $_SESSION['avatar_customer'];

    // Tạo một biến: Truy vấn đến bảng `customers` trên database với điều kiện lấy dữ liệu theo tên `username`, mà username=$_SESSION['user']=$user
    // và lấy ra tất cả các trường gán vào một mảng với tên biến là $data
    $info = mysqli_query($conn, "SELECT * FROM `customers` WHERE `avatar_customer`='$avatarUser'");
        while ($data = mysqli_fetch_array($info)) {
        }

    // $info = "SELECT * FROM `customers` WHERE `avatar_customer`='$auser'";
    // $result = mysqli_query($conn, $info);
    // // $rowlogin = mysqli_fetch_assoc($result); Ko nhận cú pháp này !
    // $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

    echo"<img src=".$data['avatar_customer']." alt='image not found'>";
?>
<!-- 
    <div class="picture-profile">
        <img src="<?php echo $data['avatar_customer'] ?>" alt="image not found"/>
    </div> -->

<?php
    echo "<pre>";
    print_r($_SESSION['user']);
    print_r($_SESSION['avatar_customer']);
    echo "</pre>";
    }
?>

    <div class="logout">
        <a href="./logout_customer.php">Logout</a>
    </div>
</body>
</html>
