function myNotificationCart() {
    var x = document.getElementById("box-notification");
    x.className = "show";
    setTimeout(function() { x.className = x.className.replace("show", ""); }, 3000);

    // Get the <span> element that closes box-notification
    var span = document.getElementsByClassName("btn-delete-noti")[0];

    // When the user clicks on <span> (x), close box-notification
    span.onclick = function() {
        x.className = "none";
    }
}