var readDir = require("./modularize.js");

readDir(process.argv[2], process.argv[3], finishedReading);

function finishedReading(err, list) {
    
    if (err) {
        console.log(err);
    }
    for (let index = 0; index < list.length; index++) {
        console.log(list[index]);
        
    }
}