function addItem() {
    $("#list_item").slideUp(100);
    $("#additem").slideDown(100);
}

function closeItem() {
    $("#additem").slideUp(100);
    $("#list_item").slideDown(100);
    $("#additem input").val('');
    $("#additem input#id").val(0);
    $("#danger_error").fadeOut();
    $("#danger_nam").html("");
    $("button#add_item").prop("disabled", false);
    $("#userTitile").fadeIn();
    imgUrl = serverName+'public/images/logo.png';
    $("#imgLogo").attr('src', imgUrl);
    $("#dangerStatus").fadeOut(1);
}
