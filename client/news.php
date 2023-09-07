<?php include("dbconnect.php"); ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" href="./css/product-menu.css" rel="stylesheet" />
    <title>TIN TỨC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!--TIN TUC-->
    <div class="container khampha" id="section5">
            <div class="khampha-background">
                <div class="title-main">
                    <p id="title-kp">TIN TỨC</p> <br>
                    <hr id="hr-kp"> <br>
                    <p id=title-kp-2> Nơi cung cấp những <span>thông tin</span> bạn cần biết </p>
                </div>

                <div class="row place">
                    <?php
                        foreach ($list_news as $row_ftnews) {
                    ?>
                    <div class="col-md-4 place_1">
                        <div class="title-img"> 
                            <img id="img_place" src="<?php echo $row_ftnews['img_new'] ?>">
                        </div>
                        <div class="place-btn">
                            <a href="?go=news-detail"> <button class="btn-detail">XEM CHI TIẾT</button> </a>
                        </div>
                        <div class="place-cap">
                            <p id="name-news"><b><?php echo $row_ftnews['name_new'] ?></b></p>
                            <p id="des-news"><?php echo $row_ftnews['description_short'] ?></p>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>

            </div>
        </div>

</body>

</html>