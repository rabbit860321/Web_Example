const http = require('http');

// const hostname = '127.0.0.1';
// const port = 3000;
const config = require('./config').config;

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    // res.end('Hello Node.js World\n');

    switch (req.url) {
        case '/':
            res.end('Hello World!');
            break;
        case '/about':
            res.end('This is about page');
            break;
        case '/home':
            res.end('Welcome to my homepage');
            break;
        default:
            res.end('NotFound!');
    }
});

server.listen(config.port, config.hostname, () => {
    // console.log('Server running at http://'+config.hostname+':'+config.port+'/');
    console.log(`Server running at http://${config.hostname}:${config.port}/`);
});