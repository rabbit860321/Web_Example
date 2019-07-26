// npm install mysql
const mysql = require('mysql');

const connection = mysql.createConnection({
    host: '127.0.0.1',
    user: 'root',
    password: 'aa889966',
    database: '20190723'
});

connection.connect(function(err) {
    if (err) {
        console.log('Connect Error');
    } else {
        console.log('Connect Ok');
    }
});