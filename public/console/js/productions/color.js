function addColor() {
    timestamp = Date.now();
    optionColor = "{valueElement:'colorDefaultInput"+timestamp+"'}";
    item = '<div class="group-color tagColor" id="colorDefault'+timestamp+'">' +
        '<input id="colorDefaultInput'+timestamp+'" value="fff" type="hidden">' +
        '<button id="setCodeDefault" class ="jscolor '+optionColor+' buttonColor"></button>' +
        '<span class="removeColor" onclick="removeColor()"></span>'+
        '<div class="imgByColor">' +
        '<img class="iconImagesByColor" onclick="setGroupImg('+timestamp+')" src="'+serverName+'img/imgdefault.png">' +
        '<div class="listImg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '<img class="imgColer" src="'+serverName+'img/img_test.jpg">' +
        '</div>' +
        '<textarea type="text" class="listImg"></textarea>' +
        '</div>' +
        '</div>';

    $(".isColor .colorTagImg").append(item);
    setTimeout(function(){
        setColor();  
    }, 500);
   //
}

function removeColor(id) {
    $("#colorDefault"+id).remove();
}

$(".imgByColor .listImg .imgColer").click(function () {


});

var groupImg = 0;
function setGroupImg(id) {
    groupImg = id;
    mediaCencer();
}

$(document).on('click','.imgByColor .listImg .imgColer', function(){

    $(this).addClass("active");
    // Content Code
});
