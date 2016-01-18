     var loadFile = function(event) {
      	oldimg = $('.preview').attr('src');
        var preview = document.getElementById('preview');
        preview.src = URL.createObjectURL(event.target.files[0]);
        newimg = preview.src;
        if(newimg.indexOf('/null') > -1) {
            preview.src = oldimg;
        }
    };
    function showDialog() {
      document.getElementById("overlay").style.display = "block";
      document.getElementById("dialog").style.display = "block";
    }

    function hideDialog() {
      document.getElementById("overlay").style.display = "none";
      document.getElementById("dialog").style.display = "none";
    }