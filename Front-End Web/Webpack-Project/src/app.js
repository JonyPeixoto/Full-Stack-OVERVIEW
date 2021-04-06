var obj = require('./func.js');

var $ = require('jquery');

$('h2').html('Hello of the CybertimeUP');
$('body').append('<div style="width:500px;height:500px;background:red;"></div>');

alert(obj.message);