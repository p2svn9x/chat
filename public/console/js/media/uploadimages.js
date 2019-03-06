var http_arr = new Array();
function triggerFile() {
    $("#fileUploadMedia").trigger("click");
}
var stt = 0;
function doUploadImages() {
    document.getElementById('progress-group').innerHTML = ''; //Reset lại Progress-group
    var files = document.getElementById('fileUploadMedia').files;
    if (files.length < 1) {
        return false;
    }
    stt = 0;
    $("#text-select-file").fadeOut(1);
    $("#progress-group").fadeIn(1);

    for (i = 0; i < files.length; i++) {

        uploadFile(files[i], i);
    }
    return false;
}
var testData;
var result;

function uploadFile(file, index) {
    console.log(index);
    var http = new XMLHttpRequest();
    http.responseType = 'json';
    http_arr.push(http);
    /** Khởi tạo vùng tiến trình **/
        //Div.Progress-group
    var ProgressGroup = document.getElementById('progress-group');
    //Div.Progress
    var Progress = document.createElement('div');
    Progress.className = 'progress';
    //Div.Progress-bar
    var ProgressBar = document.createElement('div');
    ProgressBar.className = 'progress-bar';
    //Div.Progress-text
    var ProgressText = document.createElement('div');
    ProgressText.className = 'progress-text';
    //Thêm Div.Progress-bar và Div.Progress-text vào Div.Progress
    Progress.appendChild(ProgressBar);
    Progress.appendChild(ProgressText);
    //Thêm Div.Progress và Div.Progress-bar vào Div.Progress-group 
    ProgressGroup.appendChild(Progress);


    //Biến hỗ trợ tính toán tốc độ
    var oldLoaded = 0;
    var oldTime = 0;
    //Sự kiện bắt tiến trình
    http.upload.addEventListener('progress', function (event) {
        if (oldTime == 0) { //Set thời gian trước đó nếu như bằng không.
            oldTime = event.timeStamp;
        }
        //Khởi tạo các biến cần thiết
        var fileName = file.name; //Tên file
        var fileLoaded = event.loaded; //Đã load được bao nhiêu
        var fileTotal = event.total; //Tổng cộng dung lượng cần load
        var fileProgress = parseInt((fileLoaded / fileTotal) * 100) || 0; //Tiến trình xử lý
        var speed = speedRate(oldTime, event.timeStamp, oldLoaded, event.loaded);
        //Sử dụng biến
        ProgressBar.innerHTML = fileName + ' đang được upload...';
        ProgressBar.style.width = fileProgress + '%';
        ProgressText.innerHTML = fileProgress + '% Upload Speed: ' + speed + 'KB/s';
        //Chờ dữ liệu trả về
        if (fileProgress == 100) {
            //ProgressBar.style.background = 'url("images/progressbar.gif")';
        }
        oldTime = event.timeStamp; //Set thời gian sau khi thực hiện xử lý
        oldLoaded = event.loaded; //Set dữ liệu đã nhận được
    }, false);


    //Bắt đầu Upload
    var data = new FormData();
    data.append('filename', file.name);
    data.append('images', file);
    http.open('POST', 'http://cntt.com/console/medias/images/add/'+folderMedia, true);
    http.send(data);


    //Nhận dữ liệu trả về
    http.onreadystatechange = function (event) {
        //Kiểm tra điều kiện
        testData = http;
        result = http.response;

        if (http.status != 200) {
            setTimeout(function(){
                ProgressBar.className += ' progress-bar-danger'; //Thêm class Danger
                ProgressBar.innerHTML = result.message; //Thông báo
            }, 100);

            return false;
        }

        setTimeout(function(){

            if (stt == 0) {
                stt = 1;
                addToListImg(http.response.data)
            }

            ProgressBar.className += ' progress-bar-success'; //Thêm class Success
            ProgressBar.innerHTML = result.message; //Thông báo     
        }, 100);


       // http.removeEventListener('progress'); //Bỏ bắt sự kiện
    }
}

function showFormUpload() {
    $("#progress-group").fadeOut(1);
    $("#text-select-file").fadeIn(1);
   // $("#uploadImages").modal('show');
}

function cancelUploadImages() {

    $("#progress-group").fadeOut(1);
    $("#text-select-file").fadeIn(1);
    $("#uploadImages").modal('hide');
}

function speedRate(oldTime, newTime, oldLoaded, newLoaded) {
    var timeProcess = newTime - oldTime; //Độ trễ giữa 2 lần gọi sự kiện
    if (timeProcess != 0) {
        var currentLoadedPerMilisecond = (newLoaded - oldLoaded)/timeProcess; // Số byte chuyển được 1 Mili giây
        return parseInt((currentLoadedPerMilisecond * 1000)/1024); //Trả về giá trị tốc độ KB/s
    } else {
        return parseInt(newLoaded/1024); //Trả về giá trị tốc độ KB/s
    }
}
