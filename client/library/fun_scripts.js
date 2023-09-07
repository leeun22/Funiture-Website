/*---TOP SCROLL SCRIPT----*/

// Hiển button trở về đầu trang khi cuộn xuống
let mybutton = document.getElementById("myBtn");
// Hiển mục lợi ích chạy từ trái sang phải khi cuộn xuống (Animation ở css)
let myRightscroll = document.getElementById("scrollR"); // tạo biến nhận giá trị id để thực hiện cuộn (document: gọi đến html)

// When window on scroll, perform functions
window.onscroll = function() {
    scrollFunctionRight()
    scrollFunction()
};

// When the user scrolls down 250px from the top of the document, document will appear
function scrollFunctionRight() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        myRightscroll.style.display = "block";
    } else {
        myRightscroll.style.display = "none";
    }
}

// When the user scrolls down 20px from the top of the document, document (button) will appear
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}


/*--- Cuộn trang Menu xuất hiện dính trên đầu trang ---*/

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// function scrollFunctionMenu() {
//     if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
//         document.getElementById("scrollMenu").style.position = "fixed";
//         document.getElementById("scrollMenu").style.top = "0";
//         document.getElementById("scrollMenu").style.backgroundColor = "white";
//         document.getElementById("scrollMenu").style.zIndex ="1000";
//         document.getElementById("scrollMenu").style.overflow = "visible";
//         document.getElementById("scrollMenu").style.padding = "30px";
//         document.getElementById("scrollMenu").style.opacity = "0.9"
//     } else {
//         document.getElementById("scrollMenu").style.position = "static";
//         document.getElementById("scrollMenu").style.top = "none";
//         document.getElementById("scrollMenu").style.backgroundColor = "white";
//         document.getElementById("scrollMenu").style.overflow = "hidden";
//         document.getElementById("scrollMenu").style.padding = "50px 0 40px 0";
//         document.getElementById("scrollMenu").style.opacity = "1"
//     }
// }