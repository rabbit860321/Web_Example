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

    /* create tb */
    var sql = 'CREATE TABLE TB (id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(255),address VARCHAR(255))';
    connection.query(sql, function(err) {
        if (err) {
            console.log('Table create error');
        } else {
            console.log("Table create ok");
        }
    })
});