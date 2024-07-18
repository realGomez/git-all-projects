var koa = require('koa');
var app = new koa();

//错误处理中间件
app.use(function* (next) {
    try {
        yield next;
    } catch (err) {
        this.status = err.status || 500;
        this.body = err.message;
        this.app.emit('error', err, this);
    }
});

//在下一个中间件中创建错误
//设置错误消息和状态代码，并使用上下文对象抛出它

app.use(function* (next) {
    //这将设置状态和消息
    this.throw('Error Message', 500);
});

app.listen(3001);
