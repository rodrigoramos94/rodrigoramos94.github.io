"use strict";
const data = require('../Scripts/data-test');
var user = data.user;
function trades(req, res) {
    res.render('trades', { title: 'Panel de Operaciones', user: user, year: new Date().getFullYear() });
}
exports.trades = trades;
;
function advanced_trades(req, res) {
    res.render('advanced_trades', { title: 'Operaciones Avanzadas', user: user, year: new Date().getFullYear() });
}
exports.advanced_trades = advanced_trades;
;
//# sourceMappingURL=trade-routes.js.map