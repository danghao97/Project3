var fs = require('fs');
var express = require('express');
var app = express();

app.get('/video/:id', (req, res) => {
    console.log('xem video id = ' + req.params.id);
    var path = 'F:/video.mp4';
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
    var path = 'F:/Images/background-1086840_960_720.png';

    var img = fs.readFileSync(path);
    res.writeHead(200, {
        'Content-Type': 'image/jpeg'
    });
    res.end(img, 'binary');

});

app.listen(3000, () => {
    console.log("express start on root directory");
});
