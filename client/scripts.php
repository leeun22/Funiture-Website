       <html>
        <body>
            <!-- RIGHT SCROLL -->
       <script>
            // Get the button
            let mybutton = document.getElementById("myBtn");
            // get the content: tạo biến nhận giá trị id để thực hiện cuộn
            let myRightscroll = document.getElementById("scrollR");

            // When the user scrolls down 250px from the top of the document, show the content
            window.onscroll = function() {
                scrollFunctionRight()
                scrollFunction()
                scrollFunctionMenu()
                scrollLoadAboutUs()
            };

            function scrollFunctionRight() {
                if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
                    myRightscroll.style.display = "block";
                } else {
                    myRightscroll.style.display = "none";
                }
            }

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                //smooth scrolling
                document.querySelector('body').scrollIntoView({
                    behavior: 'smooth'
                });
                // document.body.scrollTop = 0;
                // document.documentElement.scrollTop = 0;
            }

            var navbar = document.getElementById("scrollMenu");
            var sticky = navbar.offsetTop;

            function scrollFunctionMenu() {
                if (window.pageYOffset >= sticky) {
                    // add class sticky on the navbar when scroll window, class sticky will be visible
                    navbar.classList.add("sticky")
                } else {
                    navbar.classList.remove("sticky");
                }
            }

            // Load Text when scroll down: 1280px, speed: 50s
            var i = 0;
            var txt = ' gỗ hương đỏ lào, gỗ gõ đỏ, gỗ gụ, gỗ hương nam phi, gỗ xoan đào, gỗ sồi… Với những sản phẩm như: bàn ghế, giường tủ, bàn ăn, bàn thờ, tủ thờ có chất lượng cao, đánh bóng nguyên vân gỗ quý để khách hàng lựa chọn...';
            var speed = 50;

            function scrollLoadAboutUs() {
                if (document.body.scrollTop > 1280) {
                    if (i < txt.length) {
                        document.getElementById("loadText").innerHTML += txt.charAt(i);
                        i++;
                        setTimeout(scrollLoadAboutUs, speed);
                    }
                }
            }
        </script>
        </body>
       </html>