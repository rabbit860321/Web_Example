// npm install ejs
const http = require('http');
const config = require('./config').config;
const fs = require('fs');
const ejs = require('ejs');
var template = fs.readFileSync('./07hello.ejs', 'utf-8')

const server = http.createServer((req, res) => {

    var data = ejs.render(template, {
        title: 'hello ejs',
        content: '<strong>bang</strong>'
    });

    res.setHeader('Content-Type', 'text/HTML');
    res.status = 200;
    res.end(data);
});

server.listen(config.port, config.hostname, () => {
    // console.log('Server running at http://'+config.hostname+':'+config.port+'/');
    console.log(`Server running at http://${config.hostname}:${config.port}/`);
});