var koa = require('koa');
var router = require('koa-router');
var app = new koa();

var _router = router();   //实例化路由器
_router.get('/not_found', async (ctx) => {   //定义路由
    ctx.status = 404;
    ctx.body = "抱歉，我们没有此资源。";
});
_router.get('/hello', async (ctx) => {   //定义路由
    ctx.status = 200;
    ctx.body = 'hello world';
});

async function handle404Errors(next) {
    if (404 != next.status) return;
    next.redirect('/not_found');
}

app.use(_router.routes());  //使用路由器定义的路由
app.use(handle404Errors);

app.listen(3001);
