var http = require('http');
var url = require('url');


http.createServer(function onRequest(request, response) {

    var url_parts = url.parse(request.url);
    console.log(url_parts);
    
    if (url_parts.path == '/home') {
        response.writeHead(200, {"Content-Type": "text/plain"});
        response.write("<h1>Welcome to the Home Page</h1>");
    } else if (url_parts.path == '/getData') {
        var obj = {
            "name": "Adly Thebaud",
            "class": "CS 313"
        }
        response.writeHead(200, {"Content-Type": "application/json"});
        response.write(JSON.stringify(obj));

    } else {
        response.writeHead(404, {"Content-Type": "text/html"});
        response.write("<h1>Page Not Found.</h1>");
    }

    response.end();
}).listen(8080);