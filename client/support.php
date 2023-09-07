<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" href="./css/header.css" rel="stylesheet" />
  <title>Untitled Document</title>
  <?php
  include("dbconnect.php")
  ?>

  <style>
    .row-support-page {
      width: 500px;
      padding: 50px 0 70px 0;
      margin: 0 auto;
    }

    .row-support-page #h3-support-page {
      color: rgb(121, 69, 43);
      position: unset;
    }

    @media screen and (max-width: 625px) {
      .row-support-page {
        width: 90%;
      }
    }
  </style>
</head>

<body>

  <div class="row-support-page">
    <!-- Modal content -->
    <div class="container-cont-sp">
      <h3 id="h3-support-page">BẠN CẦN HỖ TRỢ</h3>
    </div>

    <div class="container-form-support">
      <form action="support_submit.php" method="POST" name="user">
        <label for="name">Họ và tên</label>
        <input type="text" id="fullname" name="fullname" placeholder="Your name.." required>

        <label for="phone">Điện thoại</label>
        <input type="tel" id="phone" name="phone" placeholder="Your telephone.." required min="10" max="12">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email.." required>

        <label for="comments">Comments</label>
        <textarea id="comments" name="comments" placeholder="Write something.." style="height:100px"></textarea>

        <input type="submit" name="submit" value="Gửi">
      </form>
    </div>

  </div>

</body>

</html>