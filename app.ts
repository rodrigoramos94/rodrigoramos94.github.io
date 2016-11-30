import express = require('express');
import routes = require('./routes/index');
import http = require('http');
import path = require('path');

var app = express();

// all environments
app.set('port', process.env.PORT || 3000);
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');
app.use(express.favicon());
app.use(express.logger('dev'));
app.use(express.json());
app.use(express.urlencoded());
app.use(express.methodOverride());
app.use(app.router);

app.use(express.static(path.join(__dirname, 'public')));

// development only
if ('development' == app.get('env')) {
    app.use(express.errorHandler());
}

app.get('/', routes.login);
app.get('/home', routes.home);
app.get('/markets', routes.markets);
app.get('/market/*', routes.specific_market);
app.get('/trades', routes.trades);
app.get('/about', routes.about);
app.get('/contact', routes.contact);
//app.get('*', routes.error404);

http.createServer(app).listen(app.get('port'), function () {
    console.log('Express server listening on port ' + app.get('port'));
});
