function addColor() {
    timestamp = Date.now();
    color = $("#inputColorDefault").val();
    addHtmlImgByColor(color);
    setTimeout(function(){

        setColor();
    }, 500);
}

function addHtmlImgByColor(color) {
    timestamp = Date.now();
    optionColor = "{valueElement:'colorDefaultInput"+timestamp+"'}";
    item = '<div class="group-color tagColor" id="colorDefault'+timestamp+'">' +
        '<input id="colorDefaultInput'+timestamp+'" value="'+color+'" type="hidden">' +
        '<button id="setCodeDefault" class ="jscolor '+optionColor+' buttonColor"></button>' +
        '<span class="removeColor" onclick="removeColor()"></span>'+
        '<div class="imgByColor">' +
        '<img class="iconImagesByColor" onclick="setGroupImg('+timestamp+')" src="'+serverName+'img/imgdefault.png">' +
        '<div class="quantily"><span>Số lượng</span> ' +
            '<input type="number" value="0"> ' +
        '</div>' +
        '<div class="listImg"></div>' +
        '<textarea type="text" class="urlImages" style="display: none"></textarea>' +
        '<input type="hidden" class="activeImg" value="0">' +
        '</div>' +
        '</div>';

    $(".isColor .colorTagImg").append(item);
    return timestamp;
}

function removeColor(id) {
    $("#colorDefault"+id).remove();
}

$(".imgByColor .listImg .imgColer").click(function () {


});

$(document).on('click','.imgByColor .listImg .imgColer', function(){

    $(this).addClass("active");
    // Content Code
});
