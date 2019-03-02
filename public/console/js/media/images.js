function listImage(data) {
    if(!data) {
        return false;
    }
    for(i = 0; i < data.length; i++ ) {
        addToListImg(data[i]);
    }
}

function addToListImg(url) {
    item = '<div class="col-sm-2">' +
            '<div class="media-images">' +
            '<img src="'+serverName+url+'" title="+url+" onclick="chooseImage(this)">' +
            '</div>' +
        '</div>';
    $("#raper-media-images").append(item);
}