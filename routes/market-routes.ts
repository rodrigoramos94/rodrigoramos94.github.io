import express = require('express');
import data = require('../Scripts/data-test');

var indexes_list = data.indexes_list;
var user = data.user;

export function markets(req: express.Request, res: express.Response) {
    res.render('markets', { title: 'Panel de Mercados', user, indexes_list, year: new Date().getFullYear() });
};

export function specific_market(req: express.Request, res: express.Response) {
    res.render('market', { title: 'Mercado Especifico', user, year: new Date().getFullYear() });
};