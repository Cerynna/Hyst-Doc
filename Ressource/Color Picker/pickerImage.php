<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>PikerImage</title>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="css/main.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<form action="upload.php" method="post" class="form-inline" role="form" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
    <input type="file" id="file" name="imagePicker"/>
    <label for="file" class="btn btn-default file">Changer l'image</label>
    <button class="btn btn-primary upload">Upload</button>


</form>

<canvas width="600" height="400" id="canvas_picker"></canvas>
<div id="hex"><input id="hex" type="text" placeholder="hex"></div>
<div id="rgb"><input id="rgb" type="text" placeholder="rgba"></div>

<script type="text/javascript">

    var canvas = document.getElementById('canvas_picker').getContext('2d');

    // create an image object and get it’s source
    var img = new Image();
    img.src = 'upload/imagePicker.jpg';

    // copy the image to the canvas
    $(img).load(function(){
        canvas.drawImage(img,0,0);
    });

    // http://www.javascripter.net/faq/rgbtohex.htm
    function rgbToHex(R,G,B) {return toHex(R)+toHex(G)+toHex(B)}
    function toHex(n) {
        n = parseInt(n,10);
        if (isNaN(n)) return "00";
        n = Math.max(0,Math.min(n,255));
        return "0123456789ABCDEF".charAt((n-n%16)/16)  + "0123456789ABCDEF".charAt(n%16);
    }
    $('#canvas_picker').click(function(event){
        // getting user coordinates
        var x = event.pageX - this.offsetLeft;
        var y = event.pageY - this.offsetTop;
        // getting image data and RGB values
        var img_data = canvas.getImageData(x, y, 1, 1).data;
        var R = img_data[0];
        var G = img_data[1];
        var B = img_data[2];  var rgb = R + ',' + G + ',' + B;
        // convert RGB to HEX
        var hex = rgbToHex(R,G,B);
        // making the color the value of the input
        $('#rgb input').val('rgba(' + rgb + ',1)');
        $('#hex input').val('#' + hex);
    });


</script>

</body>
</html>
