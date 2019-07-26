const http = require('http');
const config = require('./config').config;
const fs = require('fs');
const ejs = require('ejs');
const qs = require('querystring');

var template = fs.readFileSync('./08form.ejs', 'utf-8')
var posts = [];

const server = http.createServer((req, res) => {

    if (req.method === 'POST') {
        req.data = "";
        req.on('readable', function() {
            var chr = req.read();
            if (chr) {
                req.data += chr;
            }
        });
        req.on('end', function() {
            var query = qs.parse(req.data);
            posts.push(query.content);
            showForm(posts, res);
        });
    } else {
        showForm(posts, res);
    }
});

server.listen(config.port, config.hostname, () => {
    // console.log('Server running at http://'+config.hostname+':'+config.port+'/');
    console.log(`Server running at http://${config.hostname}:${config.port}/`);
});

function showForm(p_posts, res) {
    var data = ejs.render(template, {
        posts: p_posts
    });
    res.setHeader('Content-Type', 'text/HTML');
    res.status = 200;
    res.end(data);
}