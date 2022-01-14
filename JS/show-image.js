var AfterUpload = document.querySelector(".content-box");
var BeforeUpload = document.querySelector(".contet-show-img-upload");
var nextBtn = document.querySelector(".next-upload");

function NewPost() {
    AfterUpload.style.display = "block";
    BeforeUpload.style.display = "none";
    nextBtn.style.display = "none";
    document.querySelector(".status textarea").value = "";
}

function checkFileDetails(fi) {
        if (fi.files.length > 0) {
           
            for (var i = 0; i <= fi.files.length - 1; i++) {
                var fileName, fileExtension, fileSize, fileType, dateModified;

                fileName = fi.files.item(i).name;
                fileExtension = fileName.replace(/^.*\./, '');

                if (fileExtension == 'png' || fileExtension == 'jpg' || fileExtension == 'jpeg') {
                   readImageFile(fi.files.item(i));             
                }
            }

            // GET THE IMAGE WIDTH AND HEIGHT USING fileReader() API.
            function readImageFile(file) {
                var reader = new FileReader(); // CREATE AN NEW INSTANCE.

                reader.onload = function (e) {
                    var img = new Image();      
                    img.src = e.target.result;

                    img.onload = function () {
                        var w = this.width;
                        var h = this.height;
                        // Resize the image
                        var max_w = 400;
                        var max_h = 320;
                        var ratio = Math.min(max_w / w, max_h / h);
                        
                        w *= ratio;
                        h *= ratio;
                        
                        var magin = (max_h - h)/2;


                        $('#blah')
                            .attr('src', e.target.result)
                            .width(w)
                            .height(h);      
                        
                        document.querySelector(".image-post img").style.marginTop = magin+"px";
                    }
                };
                reader.readAsDataURL(file);
                AfterUpload.style.display = "none";
                BeforeUpload.style.display = "block";
                nextBtn.style.display = "block";
            }
        }
    }