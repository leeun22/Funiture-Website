<!-- NOTICART BO BAN AN (HOME) -->
<?php foreach ($listSome_banan as $row_banan) { ?>
    <script>
        function myNotificationCartBA(x, callback) {
            var x = document.getElementById("box-notification");
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
                callback();
            }, 3000);

            // Get the <span> element that closes box-notification
            var span = document.getElementsByClassName("btn-delete-noti")[0];

            // When the user clicks on <span> (x), close box-notification
            span.onclick = function() {
                x.className = "none";
                window.location.href = "?go=cart&id_product=<?php echo $row_banan['id_product'] ?>";
            }

            function alertFinished() {
                window.location.href = "?go=cart&id_product=<?php echo $row_banan['id_product'] ?>";
            }
            myNotificationCartBA(x, alertFinished);
        }
    </script>
<?php } ?>

<!-- NOTICART BO BAN GHE (HOME) -->
<!-- <script>
    function myNotificationCartBG(x, callback) {
        var x = document.getElementById("box-notification");
        x.className = "show";

        setTimeout(function() {
            x.className = x.className.replace("show", "");
            callback();
        }, 3000);

        // Get the <span> element that closes box-notification
        var span = document.getElementsByClassName("btn-delete-noti")[0];

        // When the user clicks on <span> (x), close box-notification
        span.onclick = function() {
            x.className = "none";
            window.location.href = "?go=cart&id_product=<?php echo $row_banghe['id_product'] ?>";
        }

        function alertFinished() {
            window.location.href = "?go=cart&id_product=<?php echo $row_banghe['id_product'] ?>";
        }
        myNotificationCartBG(x, alertFinished);
    }
</script> -->

<!-- NOTICART GIUONG NGU (HOME) -->
<!-- <script>
    function myNotificationCartGN(x, callback) {
        var x = document.getElementById("box-notification");
        x.className = "show";

        setTimeout(function() {
            x.className = x.className.replace("show", "");
            callback();
        }, 3000);

        // Get the <span> element that closes box-notification
        var span = document.getElementsByClassName("btn-delete-noti")[0];

        // When the user clicks on <span> (x), close box-notification
        span.onclick = function() {
            x.className = "none";
            window.location.href = "?go=cart&id_product=<?php echo $row_banghe['id_product'] ?>";
        }

        function alertFinished() {
            window.location.href = "?go=cart&id_product=<?php echo $row_banghe['id_product'] ?>";
        }
        myNotificationCartGN(x, alertFinished);
    }
</script> -->