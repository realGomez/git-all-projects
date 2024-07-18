var koa = require('koa');
var _router = require('koa-router')();
var app = new koa();

var mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/my_db');

var personSchema = mongoose.Schema({
    name: String,
    age: Number,
    nationality: String
});

var Person = mongoose.model("Person", personSchema);

_router.post('/person', createPerson);

function* createPerson(next) {
    var self = this;
    var personInfo = self.request.body; //Get the parsed information

    if (!personInfo.name || !personInfo.age || !personInfo.nationality) {
        self.render(
            'show_message', { message: "Sorry, you provided wrong info", type: "error" });
    } else {
        var newPerson = new Person({
            name: personInfo.name,
            age: personInfo.age,
            nationality: personInfo.nationality
        });
        yield newPerson.save(function (err, res) {
            if (err)
                self.render('show_message',
                    { message: "Database error", type: "error" });
            else
                self.render('show_message',
                    { message: "New person added", type: "success", person: personInfo });
        });
    }
}

app.use(_router.routes());
app.listen(3001);
