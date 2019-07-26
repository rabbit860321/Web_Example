const mysql = require('mysql');

const connection = mysql.createConnection({
    host: '127.0.0.1',
    user: 'root',
    password: 'aa889966',
    database: 'mydb'
});

connection.connect(function(err) {
    if (err) {
        console.log('Connect Error');
    } else {
        console.log('Connect Ok');
    }

    // connection.query("SELECT * FROM TB", function(err, result) {
    //     if (err) {
    //         console.log('select error');
    //     } else {
    //         console.log(result);
    //     }
    // });

    connection.query("SELECT name FROM TB", function(err, result) {
        if (err) {
            console.log('select error');
        } else {
            // console.log(result);
            console.log(result);
        }
    });
});