function mediaCencer() {
    $('#mediaCencer').modal({backdrop: 'static', keyboard: false});
    media(0);
}

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
        item = '<li><a onclick="media(data[i].id)">'.data[i].name_folder+'</a></li>';
        $(".media-heading .breadcrumb").prepend(item);
    }
}