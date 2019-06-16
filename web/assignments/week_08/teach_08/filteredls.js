'use strict';

var fs = require('fs');

fs.readdir(process.argv[2], function finishedReading(err, list) {
    
    if (err) {
        return console.error(err);
    }
    
    

    for (let index = 0; index < list.length; index++) {
        
        if (list[index].includes("." + process.argv[3].toString())) {
            console.log(list[index]);
        }
        // console.log(list[index]);
    }

    // console.log(newList);
});