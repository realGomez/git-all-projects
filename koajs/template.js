var koa = require('koa');
var router = require('koa-router');
var app = new koa();

var Pug = require('koa-pug');
var pug = new Pug({
    viewPath: './views',
    basedir: './views',
    app: app //相当于 app.use(pug)
});

var _router = router();
_router.get('/hello', async (ctx) => {
    await ctx.render('first_view');
});

app.use(_router.routes());
app.listen(3001);
