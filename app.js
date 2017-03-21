var express = require('express');

var app = express();
var handlebars = require('express-handlebars').create({defaultLayout:'main'});
var bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

app.engine('handlebars', handlebars.engine);
app.set('view engine', 'handlebars');
app.set('port', 3000);

var path = require("path");
app.use(express.static(path.join(__dirname, '/public')));

app.get('/', function(req,res) {
    // the get query can be used to generate pages for specific locations
    var params = [];
    for (var p in req.query) {
        params.push(p);
    }
    var context = {};
    context.title = params[0];
    res.render('home', context);
});

/*************
Specific County Pages
*************/
app.get('/stclaircounty', function(req, res) {
    var context = {};
    context.title = "St. Clair County";
    res.render('home', context);
});
app.get('/madisoncounty', function(req, res) {
    var context = {};
    context.title = "Madison County";
    res.render('home', context);
});
app.get('/clintoncounty', function(req, res) {
    var context = {};
    context.title = "Clinton County";
    res.render('home', context);
});
app.get('/washingtoncounty', function(req, res) {
    var context = {};
    context.title = "Washington County";
    res.render('home', context);
});
app.get('/monroecounty', function(req, res) {
    var context = {};
    context.title = "Monroe County";
    res.render('home', context);
});
app.get('/randolphcounty', function(req, res) {
    var context = {};
    context.title = "Randolph County";
    res.render('home', context);
});
/**************
Specific Town Pages
**************/
app.get('/belleville', function(req, res) {
    var context = {};
    context.title = "Belleville";
    res.render('home', context);
});
app.get('/collinsville', function(req, res) {
    var context = {};
    context.title = "Collinsville";
    res.render('home', context);
});
app.get('/fairviewheights', function(req, res) {
    var context = {};
    context.title = "Fairview Heights";
    res.render('home', context);
})
app.get('/scottafb', function(req, res) {
    var context = {};
    context.title = "Scott Airforce Base";
    res.render('home', context);
})

/***************
404 Error handling
***************/
app.use(function(req,res){
  res.status(404);
  res.render('404');
});

app.listen(app.get('port'), function(){
    console.log('Express started on http://localhost:' + app.get('port') + '; press Ctrl-C to terminate.');
})
