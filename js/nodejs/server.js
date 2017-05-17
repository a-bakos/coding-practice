// Here's a working HTTP server implemented in nodeJS

var http = require("http");

function start() {
  function onRequest(request, response) {
    console.log("Request received.");
    response.writeHead(200, {"Content-Type": "text/plain"}); // first arg: http status
    response.write("Hello World"); // send content in the HTTP body
    response.end(); // finish response
  }

  http.createServer(onRequest).listen(8888);
  console.log("Server has started.");
}

exports.start = start;

/*
 * The first line requires the http module that comes with NodeJs and makes
 * it accessible through the variable http.
 * Then, call one of the functions the http module offers (createServer), which
 * returns an object, and this object has the listen() method, and takes the
 * port number our server is going to listen on.
 */