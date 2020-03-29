const http = require('http');
const fs = require('fs');
const qs = require('querystring');

const server = http.createServer((req, res) => {
    if(req.method === 'POST'){      
        if(req.url === '/message'){
            var body='';
            req.on('data', function (data) {
                body +=data;
            });
            req.on('end',function(){
                var POST =  JSON.parse(JSON.stringify(qs.parse(body)));
                console.log(POST);
                fs.appendFile('message.txt', `${POST.message}\n`, function (err) {
                    if (err) throw err;
                    console.log('Saved!');
                  });
                var myReadStream = fs.createReadStream(__dirname + '/message.html', 'utf8');
                myReadStream.pipe(res);
            });
        }
    } else if(req.method === 'GET'){
        if(req.url === '/'){
            res.writeHead(200, {'Content-Type': 'text/html'});
            var myReadStream = fs.createReadStream(__dirname + '/index.html', 'utf8');
            myReadStream.pipe(res);
        }   
    }
}).listen(8080);
console.log('listening on port 8080...');


