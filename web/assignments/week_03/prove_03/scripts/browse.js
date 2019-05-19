'use strict';

var shoeContainer = document.querySelector('#shoes');
var cartIcon = document.querySelector("#shopping-cart");


var cartCount = 0;

function sendPost(e) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            cartCount++;
            cartIcon.innerHTML = cartCount;
            console.log(e);
        }
    };


    xhttp.open("post", "browse.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    var vars = "item="+e;
    xhttp.send(vars);
}

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var shoesArray = Array.from(JSON.parse(this.responseText));
        
        shoesArray.forEach(function (item) {
            // use item[0]
            console.log(item[0]);
            var original = '<input class="btn shoes" onclick="sendPost(\'' + item[0] + '\')" value="' + item[1] + '" name="shoes[]">';
            
            shoeContainer.innerHTML += original;
            
        });
    }
};

xhttp.open("get", "get_data.php", true);
xhttp.send();