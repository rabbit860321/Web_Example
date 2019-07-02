/* 命令列 版本:node --version  */

var http = require("http"); //載入http模組

http.createServer(function(request, response) {

    // 发送 HTTP 头部 
    // HTTP 状态值: 200 : OK
    // 内容类型: text/plain
    response.writeHead(200, { 'Content-Type': 'text/plain' });

    // 发送响应数据 "Hello World"
    response.end('Hello World\n');
}).listen(8888);

// 终端打印如下信息
console.log('Server running at http://127.0.0.1:8888/');

/* 命令列 node server.js */
/* 打开浏览器访问 http://127.0.0.1:8888/，你会看到一个写着 "Hello World"的网页。  */