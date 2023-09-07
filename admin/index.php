<?php
  include ("dbconnect.php");
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản Trị Website - Trang Đăng Nhập </title>
<!--A favicon is a small image displayed next to the page title in the browser tab-->
<link rel="icon" type="image/x-icon" href="images/LOGO-removebg.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" href="style_dky.css" rel="stylesheet" />
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #CFCFA0;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* style the submit button */
input[type=submit] {
  background-color: #E87400;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #E87500;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #663;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>

<body>

<h2 style="color:#414110">XIN MỜI ADMIN ĐĂNG NHẬP</h2>
<br />

<div class="container">
  <form action="xlylogin.php" method="post" name="login">
    <div class="row">
      <h2 style="text-align:center; color: #414110;">Đăng Nhập</h2>
      <div class="vl">
        <span class="vl-innertext"> <img src="images/ADMIN.png" width="27" height="30" /></span>
      </div>

      <div class="col">
        <a href="#" class="img">
          <img src="images/welcome.jpg" height="101" style="width: 550px; height: 160px"  />
         </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="hoten" placeholder="Tên đăng nhập" required>
        <input type="password" name="matkhau" placeholder="Mật khẩu" required>
        <input type="submit" value="Đăng nhập">
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color: #663; font-size:16px;">Đăng Ký</button>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Quên Mật Khẩu?</a>
    </div>
  </div>
</div>

<!-- setup for button đăng ký -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="xlylogin.php" method="post" name="login">
    <div class="container_dky">
      <h1>Đăng ký tài khoản admin</h1>
      <p>Bạn hãy điền đầy đủ thông tin để tạo tài khoản admin.</p>
      <hr> <!-- gạch chìm -->
      <label for="email"><b>Tên đăng nhập</b></label>
      <input type="text" placeholder="Nhập tên đăng nhập" name="hoten" required>

      <label for="psw"><b>Mật khẩu</b></label>
      <input type="password" placeholder="Nhập mật khẩu" name="matkhau" required>

      <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
      <input type="password" placeholder="Nhập lại mật khẩu của bạn" name="nlmatkhau" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:-15px;"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Hủy</button>
        <button type="submit" class="signupbtn">Đăng ký</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>