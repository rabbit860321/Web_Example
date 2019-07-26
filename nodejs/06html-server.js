const http = require('http');
const config = require('./config').config;
const fs = require('fs');

const server = http.createServer((req, res) => {
    fs.readFile('../HTML/21表單組Demo.html', 'utf-8', function(err, data) {
        if (err) {
            res.setHeader('Content-Type', 'text/plain');
            res.statusCode = 404;
            res.end('Not Founded.');
        } else {
            res.setHeader('Content-Type', 'text/HTML');
            res.status = 200;
            res.end(data);
        }
    });
});

server.listen(config.port, config.hostname, () => {
    // console.log('Server running at http://'+config.hostname+':'+config.port+'/');
    console.log(`Server running at http://${config.hostname}:${config.port}/`);
});