var fs = require('fs');
var express = require('express');
var app = express();
var config = require('./config.js');
var rootPath = config.STORAGE_PATH;

app.get('/video/:id', (req, res) => {
    console.log('xem video id = ' + req.params.id);
    var path = rootPath + '/video.mp4';
    const stat = fs.statSync(path);
    const fileSize = stat.size;
    const range = req.headers.range;
    if (range) {
        const parts = range.replace(/bytes=/, "").split("-");
        const start = parseInt(parts[0], 10);
        const end = parts[1] ? parseInt(parts[1], 10) : fileSize - 1;
        const chunksize = (end - start) + 1;
        const file = fs.createReadStream(path, {
            start,
            end
        });
        var head = {
            'Content-Range': "bytes " + start + "-" + end + "/" + fileSize,
            'Accept-Ranges': 'bytes',
            'Content-Length': chunksize,
            'Content-Type': 'video/mp4',
        };
        res.writeHead(206, head);
        file.pipe(res);
    } else {
        var head = {
            'Content-Length': fileSize,
            'Content-Type': 'video/mp4',
        };
        res.writeHead(200, head);
        fs.createReadStream(path).pipe(res);
    }
});

app.get('/image', (req, res) => {
    var path = rootPath + '/image.png';

    var img = fs.readFileSync(path);
    res.writeHead(200, {
        'Content-Type': 'image/jpeg'
    });
    res.end(img, 'binary');
});

app.listen(config.PORT, () => {
    console.log("express start on port " + config.PORT);
});
