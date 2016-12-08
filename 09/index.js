var express = require('express');

var app = express();

/* Application Configurations */

app.use('/static', express.static(__dirname + '/static'));  // static files

app.set('views', './views');                    // template directory
app.set('view engine', 'pug');                  // template engine


/* Views */

// Index
app.get('/', function (req, res) {
    res.render('index');
});

app.get('/survey', function(req, res) {
    res.render('survey');
});

app.get('/results', function(req, res) {
    res.render('results');
});

app.listen(9096, function() {
    console.log('Server started.');
});

