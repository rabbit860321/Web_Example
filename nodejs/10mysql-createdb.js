const mysql = require('mysql');

const connection = mysql.createConnection({
    host: '127.0.0.1',
    user: 'root',
    password: 'aa889966'
});

connection.connect(function(err) {
    if (err) {
        console.log('Connect Error');
    } else {
        console.log('Connect Ok');
    }

    /* create db */
    connection.query("CREATE DATABASE mydb", function(err) {
        if (err) {
            console.log('CREATE DB-mydb error');
        } else {
            console.log("Create DB-mydb ok");
        }
    });
});