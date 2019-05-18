'use strict';

var shoppingCartContainer = document.querySelector('#shopping-cart-items-container');


function removeItem(e) {    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {            
            
            // check if item exists
            if (document.body.contains(document.querySelector('#'+e))) {                
                var itemToRemove = document.querySelector('#'+e);            
                itemToRemove.remove();
                
            }
        }
    };

    // send the item to be removed from the session variables.
    xhttp.open("post", "cart.php", true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    var vars = "removeItem="+e;
    xhttp.send(vars);
}

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {

        var shoesArray = Array.from(JSON.parse(this.responseText));
        shoesArray.forEach(function (item) {
            // remove all double quotes from item
            item = item.replace(/\"/g, "");
            
            // create a displayItem variable that will be displayed to user that has single quotes 
            shoppingCartContainer.innerHTML += '<div id=\"' + item + '\" class="shopping-cart-items">' + item + ' <button type="button" class="btn btn-danger" onclick="removeItem(\'' + item + '\')">X</button>' + '</div>';

        });
    }
};

xhttp.open("get", "cart.php", true);
xhttp.send();
