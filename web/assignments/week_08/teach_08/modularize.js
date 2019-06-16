var fs = require('fs');

module.exports = function (dirName, ext, callback) {
    fs.readdir(dirName, function finishedReading(err, list) {
        
        var newList = [];
        if (err) {
            return callback(err, newList);
        }

        
        
        for (let index = 0; index < list.length; index++) {
            
            if (list[index].includes("." + ext.toString())) {
               newList.push(list[index]); 
            }
            
        }
        

        callback(err, newList);
    });
}

