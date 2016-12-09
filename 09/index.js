var express = require('express');
var bodyParser = require('body-parser');

var app = express();
var user_db = require('./user-db.json');
var user_list = user_db['list'];
var user_size = user_db['size'];
/* Application Configurations */

app.use('/static', express.static(__dirname + '/static'));  // static files
app.use(bodyParser.urlencoded({
    extended: true
}));

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
    res.render('results', userdata=user_list);
});

app.post('/survey', function(req, res) {
    var user_name = req.body['name'];
    var user_age = req.body['age'];
    var user_email = req.body['email'];
    var user_gender = 'N/A';
    if ("gender" in req.body) {
        var user_gender = req.body['gender'];
    }
    var added_entry = {'id': ++user_size, 'name': user_name, 'age': user_age, 'gender': user_gender, 'email': user_email};
    user_list.push(added_entry);
    var updated_db_str = JSON.stringify({'list': user_list, 'size': user_size}, null, 4);
    var fs = require('fs');
    fs.writeFile("./user-db.json", updated_db_str, function(err) {
        if(err) {
            return console.log(err);
        }
    });
    res.redirect('/results');
});


app.listen(9096, function() {
    console.log('Server started.');
});

