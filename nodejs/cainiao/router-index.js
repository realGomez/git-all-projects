var server = require("./router-server");
var router = require("./router");

server.start(router.route);