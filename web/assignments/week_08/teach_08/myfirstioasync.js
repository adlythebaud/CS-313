'use strict';
var fs = require('fs');

fs.readFile(process.argv[2], finishedReading)

function finishedReading(error, fileContents) {
    
    // console.log(fileContents.toString());
    if (error) {
        return console.error(error);
    } 
    
    console.log(fileContents.toString().split('\n').length - 1);
}
