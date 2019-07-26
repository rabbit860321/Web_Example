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

    // var sql = "INSERT INTO TB (name) VALUES ('阿明')";
    var sql = "INSERT INTO TB (name) VALUES ?";
    var valuse = [
        ['小美'],
        ['胖虎'],
        ['大雄']
    ];
    connection.query(sql, [valuse], function(err) {
        if (err) {
            console.log('Insert error');
        } else {
            console.log("Insert ok");
        }
    });
});