var koa = require('koa');
var router = require('koa-router');
var bodyParser = require('koa-body');

var app = new koa();

app.use(bodyParser({
    formidable: { uploadDir: './uploads' },
    multipart: true,
    urlencoded: true
}));

var movies = require('./movies.js');

app.use(movies.routes());

app.listen(3000);
