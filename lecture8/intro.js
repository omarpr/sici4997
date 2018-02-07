/*
 * Email RegEx */

//var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//re.test(String(email).toLowerCase());



var nombre = 'Omar';

var nota = 4;

var ph = 4 * nota;

var mensaje = "Los puntos de honor de " + nombre + " son " + ph;

console.log(mensaje);
alert(mensaje);

var meses = ['Enero', 'Febrero', 'Marzo'];

console.log(meses[2]);

var i = meses.length;

if (i == 3) {
    alert('La i es 3');
}

if (i == 3 && true || false) { alert('La i es 3'); }

for (var i = 0; i < meses.length; i++) {
    alert(meses[i]);
}

var re = /^[0-9]+$/;
var text = '0123s';
console.log(re.test(text));

var re_mayus = /[A-Z]/;
var re_nums = /[0-9]/;
var text = 'Omar2017';

if (re_mayus.test(text) && re_nums.test(text) && text.length >= 8) {
    console.log('Password correcto');
}

function validateEmail(email) {
    var re_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    return re_email.test(email);
}

function doInSeconds(seconds, callback) {
    setTimeout(callback, seconds * 1000);
}