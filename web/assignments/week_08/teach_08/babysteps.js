'use strict';

function addInputs() {
    var inputs = process.argv.slice(2);

    var sum = 0;

    for (let index = 0; index < inputs.length; index++) {
        sum += Number(inputs[index]);
    }
    
    return sum;
}

console.log(addInputs());
