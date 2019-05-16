'use strict';

var shoeContainer = document.querySelector('#shoes');
// ------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var shoesArray = Array.from(JSON.parse(this.responseText));
        // console.log(shoesArray);
        shoesArray.forEach(function (item) {
            shoeContainer.innerHTML += '<div class="shoes">' + item[1] + '</div>';
        });
    }
};

xhttp.open("get", "get_data.php", true);
xhttp.send();

