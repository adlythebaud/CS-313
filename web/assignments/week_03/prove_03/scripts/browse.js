'use strict';

console.log("working");

var shoes = document.querySelectorAll(".shoe-input");
console.log(shoes);

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