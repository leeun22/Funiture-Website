var cart = [];
var btn = document.getElementsByTagName("button");

for (let i = 0; i < btn.length; i++) {
    btn[i].addElementListener("click", function() {
        // var name = btn[i].parentElement.parentElement.childNodes[1].childNodes[1].text;
        var name = btn[i].parentElement.childNodes[1].text;
        // var quantity = 1;
        alert(name);
        var product = {
            "quantity": quantity,
        }

        cart.push(product);

        localStorage.setItem("cartSave", JSON.stringify(cart));
        var cart = JSON.parse(localStorage.getItem("cartSave"));
        if (cart != null) {
            document.getElementById("badgeCart").innerHTML = cart.length;
        }
        // console.log(name);
    });
}

// function cart() {
//     var name = btn[i].parentElement.childNodes[1].text;
//     alert(name);
// }