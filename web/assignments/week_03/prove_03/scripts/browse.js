'use strict';

var shoeContainer = document.querySelector('#shoes');
// ------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------
var cartIcon = document.querySelector("#cart-icon");
var cartCount = 0;
function sendPost(num) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            cartCount++;
            cartIcon.innerHTML = cartCount;
        }
    };

    
    xhttp.open("post", "browse.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    var vars = "item=123";
    xhttp.send(vars);
}

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var shoesArray = Array.from(JSON.parse(this.responseText));
        // console.log(shoesArray);
        shoesArray.forEach(function (item) {
            shoeContainer.innerHTML += '<input class="btn shoes" onclick="sendPost(123)" value="' + item[1] + '">';
        });
    }
};

xhttp.open("get", "get_data.php", true);
xhttp.send();


