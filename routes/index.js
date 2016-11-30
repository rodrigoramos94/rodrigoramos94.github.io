"use strict";
const market_routes = require('./market-routes');
const trade_routes = require('./trade-routes');
const data = require('../Scripts/data-test');
// STATIC PAGES
function login(req, res) {
    res.render('login', { title: 'Login', user: user, year: new Date().getFullYear() });
}
exports.login = login;
;
function about(req, res) {
    res.render('about', { title: 'About', user: user, year: new Date().getFullYear(), message: 'Description page' });
}
exports.about = about;
;
function contact(req, res) {
    res.render('contact', { title: 'Contact', user: user, year: new Date().getFullYear(), message: 'Contact page' });
}
exports.contact = contact;
;
function error404(req, res) {
    res.render('error404', { title: 'Not Found', user: user, year: new Date().getFullYear(), message: 'Error page' });
}
exports.error404 = error404;
;
var user = data.user;
function home(req, res) {
    res.render('home', { title: 'Home', user: user, year: new Date().getFullYear() });
}
exports.home = home;
;
function markets(req, res) { market_routes.markets(req, res); }
exports.markets = markets;
;
function specific_market(req, res) { market_routes.specific_market(req, res); }
exports.specific_market = specific_market;
;
function trades(req, res) { trade_routes.trades(req, res); }
exports.trades = trades;
;
function advanced_trades(req, res) { trade_routes.advanced_trades(req, res); }
exports.advanced_trades = advanced_trades;
;
//# sourceMappingURL=index.js.map