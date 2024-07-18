var Router = require('koa-router');
var router = Router({
    prefix: '/movies'
});  //在所有路线前面加上/movies

var movies = [
    { id: 101, name: "Fight Club", year: 1999, rating: 8.1 },
    { id: 102, name: "Inception", year: 2010, rating: 8.7 },
    { id: 103, name: "The Dark Knight", year: 2008, rating: 9 },
    { id: 104, name: "12 Angry Men", year: 1957, rating: 8.9 }
];

module.exports = router;
