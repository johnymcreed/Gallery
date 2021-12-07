        //requiring path and fs modules
        const path = require('path');
        const fs = require('fs');
        //joining path of directory 
        const directoryPath = path.join(__dirname, '/java/images');
        //passsing directoryPath and callback function
        fs.readdir(directoryPath, function (err, files) {
            //handling error
            if (err) {
                return document.write('Unable to scan directory: ' + err);
            } 
            //listing all files using forEach
            files.forEach(function (file) {
                // Do whatever you want to do with the file
                document.write('<div class="box-image"><a href="#img" ><img src="' + file +'" id="blurr-this" class="gll-picture"></a><a href="#_" id="img" class="overlay" ><img class="smaller" src="'+ file +'"></a></div>'); 
            });
        });
