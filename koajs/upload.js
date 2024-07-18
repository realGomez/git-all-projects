var koa = require('koa');
var router = require('koa-router'); //实例化路由器
var bodyParser = require('koa-body');
var app = new koa();

var _router = router();   //实例化路由器
var Pug = require('koa-pug');
var pug = new Pug({
    viewPath: './views',
    basedir: './views',
    app: app
});

app.use(bodyParser({
    formidable: { uploadDir: './uploads' },
    multipart: true,
    urlencoded: true
}));

_router.get('/files', async (ctx) => {
    await ctx.render('file_upload');
});

_router.post('/upload', async (ctx) => {
    console.log("Files: ", ctx.request.files);
    console.log("name: ", ctx.request.body.name);
    ctx.body = "Received your data!"; //这是存储已解析请求的位置
});
app.use(_router.routes());  //使用路由器定义的路由

app.listen(3001);
