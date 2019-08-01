<head>
  <title>Twibbon UINJKT 2019</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)
  ?>

<img src="<?php
echo $target_file;
 ?>" id="img1" width="600px" height="600px" hidden="true">
<img src="images\twibbon.png" id="img2" width="600px" height="600px" hidden="true">

<img src="images/uin.png" width="100px" height="100px">
<img src="images/HIMSI.png" width="100px" height="100px">
  <br>
  <hr>
<center>
<h2><b>Twibbon Berhasil Dibuat</b><br><br><canvas id="canvas"></canvas></h2>
<a id="download"><b><u>Klik untuk Simpan Gambar</b></u></a><br><br>
<a href="index.html" ><< Kembali</a></center>
<script>
window.onload = function () {
    var img1 = document.getElementById('img1');
    var img2 = document.getElementById('img2');
    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");
    var width = img2.width;
    var height = img2.height;
    canvas.width = width;
    canvas.height = height;

    context.drawImage(img1, 0, 1, width, height);
    var image1 = context.getImageData(0, 0, width, height);
    var imageData1 = image1.data;
    context.drawImage(img2, 0, 0, width, height);
    var image2 = context.getImageData(0, 0, width, height);
    var imageData2 = image2.data;
};

function downloadCanvas(link, canvasId, filename) {
    link.href = document.getElementById(canvasId).toDataURL();
    link.download = filename;
}

document.getElementById('download').addEventListener('click', function() {
    downloadCanvas(this, 'canvas', 'file.png');
}, false);


</script>
</body>
<footer>
 <br>
 <hr>
  <center>Forked from <a href="https://github.com/cacadosman/Twibbon/">@cacadosman23</a> Designed by <a href="http://azmi.my.id">Azminawwar</a></center>
</footer>
