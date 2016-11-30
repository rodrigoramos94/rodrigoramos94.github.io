import express = require('express');
import data = require('../Scripts/data-test');

var user = data.user;

export function trades(req: express.Request, res: express.Response) {
    res.render('trades', { title: 'Panel de Operaciones', user, year: new Date().getFullYear() });
};

export function advanced_trades(req: express.Request, res: express.Response) {
    res.render('advanced_trades', { title: 'Operaciones Avanzadas', user, year: new Date().getFullYear() });
};