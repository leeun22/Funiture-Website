<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Quảng Cáo</title>
</head>

<body>
    <script type="text/javascript">
        function hide_float_right() {
            var content = document.getElementById('float_content_right');
            var hide = document.getElementById('hide_float_right');
            if (content.style.display == "none") {
                content.style.display = "block";
                hide.innerHTML = '<a href="javascript:hide_float_right()" style="background-color:#1B1A39"> Tắt quảng cáo [X]</a>';
            } else {
                content.style.display = "none";
                hide.innerHTML = '<a href="javascript:hide_float_right()" style="background-color:#1B1A39">Liên Hệ Tại Đây</a>';
            }
        }

        function myF() {
            onl.style.display = "block";

        }

        function un() {
            onl.style.display = "none";
        }
    </script>

    <style>
        .float-ck {
            position: fixed;
            bottom: 300px;
            z-index: 9000
        }

        * html .float-ck {
            position: absolute;
            bottom: auto;
            top: expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop, 10)||0)-(parseInt(this.currentStyle.marginBottom, 10)||0)));
        }

        #float_content_right {
            border: 0px;
        }

        #hide_float_right {
            text-align: right;
            font-size: 11px;
        }

        #hide_float_right a {
            background: #01AEF0;
            padding: 2px 4px;
            color: #FFF;
        }

        .qcg {
            background-color: back;
            width: 1000px;
            height: 200px;
        }

        .qcg img {
            border-radius: 50%;
        }
    </style>

    <body onload="myF()">
        <div class="float-ck" style="right: 0px; top:440px;">
            <div id="hide_float_right">
                <a href="javascript:hide_float_right()" style="background-color:#1B1A39">Tắt quảng cáo[X]</a>
            </div>
            <div id="float_content_right">
                <!-- Start quang cao-->
                <img src="images/Lien-he.png" width="165" height="115" />
                <!-- End quang cao -->
            </div>
        </div>
        <div id="onl" style="position: fixed; bottom: 0px; top:200px;left:150px;z-index:100;">
            <div class="qcg">
                <a href="javascript:un()" style="color:#FFF; background-color:#1B1A39">[X]</a>
                <img src="images/slider3.jpg" width="483" height="332" />
            </div>
        </div>
    </body>

</html>