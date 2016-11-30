"use strict";
const data = require('../Scripts/data-test');
var indexes_list = data.indexes_list;
var user = data.user;
function markets(req, res) {
    res.render('markets', { title: 'Panel de Mercados', user: user, indexes_list: indexes_list, year: new Date().getFullYear() });
}
exports.markets = markets;
;
function specific_market(req, res) {
    res.render('market', { title: 'Mercado Especifico', user: user, year: new Date().getFullYear() });
}
exports.specific_market = specific_market;
;
//# sourceMappingURL=market-routes.js.map