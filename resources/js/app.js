//On charge lodash, popper (nécessaire pour certains composants de Bootstrap), JQuery et les librairies de Bootstrap.

window._ = require('lodash');
window.Popper = require('popper.js').default;
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('@fortawesome/fontawesome-free/js/all.js');
} catch (e) {}