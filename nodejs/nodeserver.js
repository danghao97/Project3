var fs = require('fs');
var express = require('express');
var app = express();
var config = require('./config.js');
var bodyParser = require('body-parser');
var rootPath = config.STORAGE_PATH;
var mysql = require('mysql');

if (!fs.existsSync(rootPath + '/doi_tuong')){
    fs.mkdirSync(rootPath + '/doi_tuong');
}

if (!fs.existsSync(rootPath + '/doi_tuong/video')){
    fs.mkdirSync(rootPath + '/doi_tuong/video');
}

if (!fs.existsSync(rootPath + '/doi_tuong/image')){
    fs.mkdirSync(rootPath + '/doi_tuong/image');
}

var con = mysql.createConnection({
  host: "localhost",
  user: config.DB_USERNAME,
  password: config.DB_PASSWORD,
  database: config.DB_DATABASE
});

con.connect(function(err) {
  if (err) throw err;
  console.log("MySQL Connected!");
});

app.get('/video/:id', (req, res) => {
    var sql = 'SELECT duong_dan FROM video WHERE id_video = ' + req.params.id;
    con.query(sql, (err, result) => {
        if (err) throw err;
        if (result.length == 0) {
            return res.sendStatus(404);
        }
        var path = result[0].duong_dan;
        if (!fs.existsSync(path)){
            return res.sendStatus(404);
        }
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
});

app.get('/image', (req, res) => {
    var path = rootPath + '/image.png';
    if (!fs.existsSync(path)){
        return res.sendStatus(404);
    }
    var img = fs.readFileSync(path);
    res.writeHead(200, {
        'Content-Type': 'image/jpeg'
    });
    res.end(img, 'binary');
});

app.get('/doi_tuong/video/:id', (req, res) => {
    var path = rootPath + '/doi_tuong/video/' + req.params.id;
    if (!fs.existsSync(path)){
        return res.sendStatus(404);
    }
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

app.get('/doi_tuong/image/:id', (req, res) => {
    var path = rootPath + '/doi_tuong/image/' + req.params.id;
    if (!fs.existsSync(path)){
        return res.sendStatus(404);
    }
    var img = fs.readFileSync(path);
    res.writeHead(200, {
        'Content-Type': 'image/jpeg'
    });
    res.end(img, 'binary');
});

/*
Upload file and save to rootPath
*/
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true, limit: '50mb'}));

/*
@type: video or image
*/
app.post('/storage/doi_tuong/:type', (req, res) => {
    var filename = req.body.filename;
    var content = Buffer.from(req.body.content, 'base64');
    var path = rootPath + '/doi_tuong/' + req.params.type + '/' + filename;
    fs.writeFile(path, content, function(err) {
        if (err) {
            return console.log(err);
        }
        return res.sendStatus(200);
    });
});

app.listen(config.PORT, () => {
    console.log("express start on port " + config.PORT);
});
