<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cropper.js</title>
    <link rel="stylesheet" href="{{ URL::asset('console/css/cropper.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        .container {
            max-width: 640px;
            margin: 20px auto;
        }


    </style>
</head>
<body>
<div class="container">
    <h1>One to one crop box</h1>
    <p>The image displays in its natural size, so the size of the crop box size equals real cropped size.</p>
    <h3>Image</h3>
    <div>
        <img id="image" src="{{URL::to('/img')}}/picture.jpg" alt="Picture">
    </div>
    <p>Data: <span id="data"></span></p>
    <p>Crop Box Data: <span id="cropBoxData"></span></p>
    <h3>Result</h3>
    <p>
        <button type="button" id="button">Crop</button>
    </p>
    <div id="result"></div>
    <div id="result1" style="overflow: hidden; width: 144px;height: 144px;position: relative">
       <div style="position: absolute">
           <img src="{{URL::to('/img')}}/picture.jpg" style="width: 1280px;height: 720px;">
       </div>
    </div>
</div>
<script src="{{ asset('console/js/cropper.js') }}"></script>
<script>
    window.addEventListener('DOMContentLoaded', function () {
        var image = document.querySelector('#image');
        var data = document.querySelector('#data');
        var cropBoxData = document.querySelector('#cropBoxData');
        var button = document.getElementById('button');
        var result = document.getElementById('result');
        var cropper = new Cropper(image, {
            ready: function (event) {
                // Zoom the image to its natural size
                cropper.zoomTo(1);
            },

            crop: function (event) {
                data.textContent = JSON.stringify(cropper.getData());
                testqq = cropper.getCropBoxData();
               //  console.log(data);
               $("#result1").css({"width":testqq.width,"height":testqq.height});
               //$("#result1 div").css({"left":-testqq.left,"top":-testqq.top});
               //   $("#result1 img").css({"naturalWidth":1280,"naturalHeight":720,"aspectRatio":1.7777777777777777,"width":825,"height":464.0625,"left":0,"top":0});
               //  //$("#result1 img").css({"left":317.5,"top":78.875,"width":328,"height":184.5});
                cropBoxData.textContent = JSON.stringify(testqq)

            },

            zoom: function (event) {
                // Keep the image in its natural size
                if (event.detail.oldRatio === 1) {
                    event.preventDefault();
                }
            },
        });

        button.onclick = function () {

            result.innerHTML = '';
            demotes = cropper.getCroppedCanvas();
            result.appendChild(demotes);
        };
    });
</script>
</body>
</html>
