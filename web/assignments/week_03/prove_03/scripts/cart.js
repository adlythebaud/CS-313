'use strict';

var shoppingCartContainer = document.querySelector('#shopping-cart-items-container');

function sendPost(e) {
    // var xhttp = new XMLHttpRequest();
    // xhttp.onreadystatechange = function () {
    //     if (this.readyState == 4 && this.status == 200) {
    //         cartCount++;
    //         cartIcon.innerHTML = cartCount;
    //         console.log(e);
    //     }
    // };


    // xhttp.open("post", "browse.php", true);
    // xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    // var vars = "item="+e;
    // xhttp.send(vars);
}

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        
        var shoesArray = Array.from(JSON.parse(this.responseText));        
        shoesArray.forEach(function (item) {
            shoppingCartContainer.innerHTML += '<div class="shopping-cart-items">' + item + ' <button type="button" class="btn btn-danger">X</button>' + '</div>';
            
        });
    }
};

xhttp.open("get", "cart.php", true);
xhttp.send();