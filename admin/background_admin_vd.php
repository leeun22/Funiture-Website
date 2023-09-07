<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <script src="https://code.jquery.com/jquery-latest.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <title>Quản Trị Website - Administrators</title>
</head>
<style>
  .js-hide-video.none {
    display: none;
  }

  .backgrond-admin {
    /* border: 1px solid; */
    position: absolute;
    width: 87%;
    margin: 0 auto;
    left: 13%;
    overflow: hidden;
    display: grid;
  }

  .content_background_menu {
    /* border: 1px solid; */
    position: absolute;
    margin: 5% 0 0 20%;
    color: white;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-align: -webkit-center;
    opacity: 95%;
    text-shadow: 0 1px 5px black;
  }

  .content_background_menu p{
    font-size: 40px;
    letter-spacing: 2pt;
  }

  .content_background_menu span{
    font-size: 56px;
    letter-spacing: 5pt;
    word-spacing: -10pt;
  }

  #hr_bg_menu {
    width: 15%;
    margin-bottom: 5%;
    background-color: darkgoldenrod;
    height: 3.5px;
    border: 0;
  }

  .tb_bg_menu {
    /* border: 1px solid; */
    font-size: 20px;
    margin-top: 8%;
    border-spacing: 130px 20px;
  }

  .tb_bg_menu td:hover{
    text-decoration: underline;
  }
</style>

<body style="overflow: hidden;">
  <!--Chèn video tự động chạy với thuộc tính: autoplay-->
  <div class="backgrond-admin js-hide-video">
    <div class="video_background_menu">
      <video class="video" autoplay="autoplay" width="100%"><source src="./video/background-video-admin.mp4" type="video/mp4" /></video>
    </div>
    <div class="content_background_menu">
      <p>MINH PHONG</p>
      <hr id="hr_bg_menu">
      <span>NỘI THẤT ĐỒ GỖ</span>
      <table class="tb_bg_menu">
        <tr>
          <td>Bàn ghế gỗ</td>
          <td>Kệ Ti vi</td>
          <td>Bàn trang điểm</td>
        </tr>
        <tr>
          <td>Bộ bàn ăn</td>
          <td>Tủ quần áo</td>
          <td>Phòng thờ</td>
        </tr>
        <tr>
          <td>Giường ngủ</td>
          <td>Giày dép</td>
          <td>Phụ kiện</td>
        </tr>
      </table>
    </div>
  </div>
</body>

</html>