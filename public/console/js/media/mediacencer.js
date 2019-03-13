var functionCallbackImg;
var arrayImg = [];
function mediaCencer(callback) {
    $('#mediaCencer').modal({backdrop: 'static', keyboard: false});
    arrayImg = [];
    media(0);
    functionCallbackImg = callback;
}


function closeMedia() {
    $("#mediaCencer").modal('hide');
}

var folderMedia = 0;
function media(id) {
    $.ajax({
        url: serverName + 'console/medias/images/'+id ,
        type: "get",
        dateType: "json",
        data: {
        },
        success: function (result) {
            
            obj = parseJson(result);
            $("#raper-media-foler").html('');
            $("#raper-media-images").html('');
            $(".media-heading .breadcrumb").html('');
            folderMedia = id;
            listFolders(obj.data.childentFolders);
            listImage(obj.data.images);
            if (obj.data.folder.length < 1) {
                return false
            }
            breadcrumb(obj.data.folder.parentFolder, obj.data.folder.name_folder);
        }, error(result) {
            obj = parseJson(result.responseText);
            $("#addFolder p.error").html(obj.message);
            return false;
        }
    });
}

function breadcrumb(data, name) {

    $(".media-heading .breadcrumb").prepend('<li>'+name+'</li>');
    if(!data) {
        return false;
    }

    for(i = 0; i < data.length; i++ ) {
        item = '<li><a onclick="media('+data[i].id+')">'+data[i].name_folder+'</a></li>';
        $(".media-heading .breadcrumb").prepend(item);
    }
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

function addUrlToArray() {

    if (!arrayImg) {
        return false;
    }

    fn = window[functionCallbackImg];
    fn(arrayImg);
    $("#mediaCencer").modal('hide');
    //return false;
}