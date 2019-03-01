function closeFolder(){
    $("#addFolder #nameFolder").val('');
    $("#addFolder .iconLoading").fadeOut(1);
    $("#addFolder p.error").html('');
    $("#addFolder").modal('hide');
}

function addFolder() {

    nameFolder = $("#addFolder #nameFolder").val();
    parentFolder = $("#parentFolder").val();

    if (!nameFolder) {
        $("#addFolder p.error").html('Têm thư mục không được trống');
        return false;
    }
    $("#addFolder .iconLoading").fadeIn(1);
    $("#addFolder p.error").html('');
    $.ajax({
        url: serverName + 'console/medias/folder/add' ,
        type: "post",
        dateType: "json",
        data: {
            parent: parentFolder,
            name: nameFolder,
        },
        success: function (result) {

            obj = parseJson(result);
            if (!obj.data) {
                return false;
            }
            listFolders(obj.data);
            closeFolder();
        }, error(result) {
            obj = parseJson(result.responseText);
            $("#addFolder p.error").html(obj.message);
            return false;
        }
    });
}

function listFolders(data) {
    for (i = 0; i < data.length; i ++) {
        item = '<div class="col-sm-2" onclick="gotoFolder('+data[i].id+')">' +
                '<div class="media-folder">' +
                '<i class="fa fa-folder"></i>' +
                '<label>'+data[i].name_folder+'</label>' +
                '</div>' +
            '</div>';
        $("#raper-media-foler").append(item)
    }
}

//<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>