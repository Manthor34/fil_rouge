function previewImage() {
  let input = document.getElementById('image-input');
  let preview = document.getElementById('image-preview');
  
  let reader = new FileReader();
  reader.onload = function() {
    preview.src = reader.result;
  }
  
  if (input.files[0]) {
    reader.readAsDataURL(input.files[0]);
  }
}

var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var img = new Image();

canvas.width = "0px"
canvas.height = "0px"

document.getElementById("file-input").onchange = function(e) {
  img.src = URL.createObjectURL(e.target.files[0]);
  img.onload = function() {
    canvas.width = img.width;
    canvas.height = img.height;
    ctx.drawImage(img, 0, 0);
  }
}

function grayscale() {
  var imgData = ctx.getImageData(0, 0, canvas.width, canvas.height);
  var data = imgData.data;

  for (var i = 0; i < data.length; i += 4) {
    var avg = (data[i] + data[i + 1] + data[i + 2]) / 3;
    data[i]     = avg; // red
    data[i + 1] = avg; // green
    data[i + 2] = avg; // blue
  }

  ctx.putImageData(imgData, 0, 0);
}

function sepia() {
  var imgData = ctx.getImageData(0, 0, canvas.width, canvas.height);
  var data = imgData.data;

  for (var i = 0; i < data.length; i += 4) {
    var r = data[i];
    var g = data[i + 1];
    var b = data[i + 2];

    data[i]     = (r * 0.393) + (g * 0.769) + (b * 0.189); // red
    data[i + 1] = (r * 0.349) + (g * 0.686) + (b * 0.168); // green
    data[i + 2] = (r * 0.272) + (g * 0.534) + (b * 0.131); // blue
  }

  ctx.putImageData(imgData, 0, 0);
}

function invert() {
  var imgData = ctx.getImageData(0, 0, canvas.width, canvas.height);
  var data = imgData.data;

  for (var i = 0; i < data.length; i += 4) {
    data[i]     = 255 - data[i];     // red
    data[i + 1] = 255 - data[i + 1]; // green
    data[i + 2] = 255 - data[i + 2]; // blue
  }

  ctx.putImageData(imgData, 0, 0);
}

function download() {
  var link = document.createElement("a");
  link.download = "image.png";
  link.href = canvas.toDataURL();
  link.click();
}