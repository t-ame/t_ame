// const Logger = require('./logger');
// const logger = new Logger();

// logger.on('logging', (arg) => {
//     console.log('Logging:', arg.message);
// })

// logger.log('Some healthy message!!!');

const http = require('http');
const fs = require('fs');

const server = http.createServer((req, res) => {
    if(req.method === 'POST'){
        if(req.url === '/'){
            res.write(`<b>Goodbye world!!!</b>`);
            res.end();
        }        
        if(req.url === '/message'){
            res.write(JSON.stringify(['My', 'Home', 'Is', 'Not Here']));
            res.end();
        }
    } else if(req.method === 'GET'){
        if(req.url === '/'){
            res.writeHead(200, {'Content-Type': 'text/html'});
            var myReadStream = fs.createReadStream(__dirname + '/index.html', 'utf8');
            myReadStream.pipe(res);
        }   
    }
});


server.listen(3000);

console.log('listening on port 3000...');


