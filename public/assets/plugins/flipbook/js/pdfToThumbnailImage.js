function makeThumb(page) {
        // draw page to fit into 96x96 canvas
        var vp = page.getViewport({ scale: 1, });
        var canvas = document.createElement("canvas");
        var scalesize = 1;
        canvas.width = vp.width * scalesize;
        canvas.height = vp.height * scalesize;
        var scale = Math.min(canvas.width / vp.width, canvas.height / vp.height);
        console.log(vp.width, vp.height, scale);
        return page.render({ canvasContext: canvas.getContext("2d"), viewport: page.getViewport({ scale: scale }) }).promise.then(function () {
            return canvas; 
        });
      }
      

    function renderPDF(file) {
        pdfjsLib.getDocument(file).promise.then(function (doc) {
            var pages = []; while (pages.length < 1) pages.push(pages.length + 1);
            return Promise.all(pages.map(function (num) {
                // create a div for each page and build a small canvas for it
                //var div = document.getElementById("thumbnail-wrapper");
                return doc.getPage(num).then(makeThumb)
                .then(function (canvas) {
                  var data = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream")
                    //console.log(data);
                    return data;
                    //var img = new Image();
                    //img.src = canvas.toDataURL();
                    //div.appendChild(img);                  
                });
            }));
            }).catch(console.error);
    }

