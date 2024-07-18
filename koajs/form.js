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

_router.get('/', async (ctx) => {
    await ctx.render('form');
});

_router.post('/', async (ctx) => {
    console.log(ctx.request.body);
    console.log(ctx.req.body);
    ctx.body = ctx.request.body; //ctx是存储解析后的请求的地方
});
app.use(_router.routes());  //使用路由器定义的路由

app.listen(3001);
