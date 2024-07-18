var koa = require('koa');
var router = require('koa-router');
var app = new koa();

var _router = router();   //实例化路由器
_router.get('/:id', async (ctx) => {   //定义路由
    ctx.body = '您指定的id是' + ctx.params.id;
});

app.use(_router.routes());  //使用路由器定义的路由

app.listen(3001, function () {
    console.log('Server running on http://localhost:3001')
});