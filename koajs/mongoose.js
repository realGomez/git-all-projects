var koa = require('koa');
var _router = require('koa-router')();
var app = new koa();

var mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/test');

var personSchema = mongoose.Schema({
    name: String,
    age: Number,
    nationality: String
});

var Person = mongoose.model("Person", personSchema);


var Pug = require('koa-pug');
var pug = new Pug({
    viewPath: './views',
    basedir: './views',
    app: app //相当于 app.use(pug)
});
_router.get('/person', async (ctx) => {
    await ctx.render('person');
});

app.use(_router.routes());
app.listen(3001);
