var koa = require('koa');
var router = require('koa-router');
var app = new koa();

var _router = router();   //实例化路由器
_router.get('/hello', async (ctx) => {   //定义路由
    ctx.body = '您的请求已被记录。';
    console.log(ctx.response);
});

app.use(_router.routes());  //使用路由器定义的路由

app.listen(3001, function () {
    console.log('Server running on http://localhost:3001')
});