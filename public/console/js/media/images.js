var imgBackgroud = 'img/checkmark.png';

function listImage(data) {
    if (!data) {
        return false;
    }
    for (i = 0; i < data.length; i++) {
        addToListImg(data[i]);
    }
}

function addToListImg(url) {

    textRandom = makeid();
    timestamp = Date.now();
    item = '<div class="col-sm-2">' +
        '<div class="media-images" onclick="chooseImage(this)" title="' + url + '" style="background: url('+serverName+url+') center no-repeat">' +
            '<span class="setActiveImg" style="background: url('+serverName+imgBackgroud+') #706b6ba6 center no-repeat"></span>'
        '</div>' +
        '</div>';
    $("#raper-media-images").append(item);
}

var groupImg = 0;
var arrayImg = [];

function setGroupImg(id) {
    groupImg = id;
    arrayImg = [];
    mediaCencer();
}

function chooseImage(event) {

    url = $(event).attr('title');
    tagSpan = $(event).find("span");
    index = arrayImg.indexOf(url);
    if (index > -1) {
        arrayImg.splice(index, 1);
        tagSpan.fadeOut(1);
       return false;
    }
    tagSpan.fadeIn(1);
    arrayImg.push(url);
}

function chooseImgByColor() {
    $("#mediaCencer").modal('show');
}

function makeid() {

    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < 5; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}

function addUrlToArray() {

    if (!arrayImg) {
        return false;
    }

    activeImg = $("#colorDefault" + groupImg + " .activeImg").val();
    stringUrlImages = $("#colorDefault" + groupImg + " .urlImages").val();
    if (!stringUrlImages) {

        addImgToGroup(arrayImg, groupImg, activeImg);
        stringUrlImages = arrayImg.toString();
        $("#colorDefault" + groupImg + " .urlImages").val(arrayImg.toString());
        return false;
    }
    images = stringUrlImages.split(',');

    for (i = 0; i < arrayImg.length; i++) {
        if (images.indexOf(arrayImg[i]) > -1) {

            continue;
        }
        images.push(arrayImg[i]);
    }

    $("#colorDefault" + groupImg + " .urlImages").val(images.toString());
    addImgToGroup(images, groupImg, activeImg);
}

function addImgToGroup(data, groupImg, activeImg) {

    $("#colorDefault"+ groupImg + " .listImg").html('');
    activeImg = parseInt(activeImg);
    for (i = 0; i < data.length; i++) {
        classActive = '';
        if (activeImg == i) {
            classActive = 'active';
        }
        item = '<div class="outImgGroup '+classActive+'" onclick="activeImgByGroup(this,'+groupImg+', '+i+')" style="background: url('+serverName+data[i]+') center no-repeat">' +
            '<span onclick="removeImgGroup('+groupImg+', '+i+')" class="removeImgGroup"><i class="fa fa-remove"></i></span>' +
            '<span class="activeImgGroup" style="background: url('+serverName+imgBackgroud+') #706b6ba6 center no-repeat"></span>'+
            '</div>';
        $("#colorDefault"+ groupImg + " .listImg").append(item);
    }
    $("#mediaCencer").modal('hide');
}

function activeImgByGroup(event, groupImg, index) {
    $("#colorDefault"+groupImg+" .outImgGroup").removeClass('active');
    $(event).addClass('active');
    $("#colorDefault"+groupImg+" .activeImg").val(index);
}

function removeImgGroup(groupImg, index) {
    stringUrlImages = $("#colorDefault" + groupImg + " .urlImages").val();
    if(!stringUrlImages) {
        return false;
    }

    setTimeout(function(){

        $("#colorDefault"+groupImg+" .activeImg").val(0);
        images = stringUrlImages.split(',');
        images.splice(index, 1);
        addImgToGroup(images, groupImg, 0);
        $("#colorDefault" + groupImg + " .urlImages").val(images.toString());
    }, 100);

    //

}