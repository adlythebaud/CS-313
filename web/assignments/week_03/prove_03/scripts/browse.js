'use strict';

<<<<<<< refs/remotes/heroku/master
<<<<<<< refs/remotes/heroku/master
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

=======
var shoeContainer = document.querySelector('#shoes');
// ------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------
>>>>>>> Commit.
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var shoesArray = Array.from(JSON.parse(this.responseText));
<<<<<<< refs/remotes/heroku/master
        
        shoesArray.forEach(function (item) {
            // use item[0]
            var original = '<input class="btn shoes" onclick="sendPost(\'' + item[0] + '\')" value="' + item[1] + '" name="shoes[]">';
            
            shoeContainer.innerHTML += original;
            
        });
    }
};

xhttp.open("get", "get_data.php", true);
xhttp.send();
=======
console.log("working");
=======
        // console.log(shoesArray);
        shoesArray.forEach(function (item) {
            shoeContainer.innerHTML += '<div class="shoes">' + item[1] + '</div>';
        });
    }
};
>>>>>>> Commit.

xhttp.open("get", "get_data.php", true);
xhttp.send();

<<<<<<< refs/remotes/heroku/master
shoes.forEach(function (item) {
  item.addEventListener("click", function () {
    

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);    
      }
    };
    xhttp.open("POST", "./browse.php", true);

    xhttp.setRequestHeader("shoe", item.previousElementSibling.value);

    xhttp.send("shoe="+item.previousElementSibling.value);
  });
});
>>>>>>> Prepping to use JS to populate UI and PHP to pass data back and forth
=======
>>>>>>> Commit.
