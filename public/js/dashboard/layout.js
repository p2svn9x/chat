window.onresize = function() {
    scaleFormChat(window.innerWidth, window.innerHeight);
}
window.onload = function(e) {
    scaleFormChat(window.innerWidth, window.innerHeight);
};

function scaleFormChat(width, height) {
    heightRoster = $(".roster").height();
    widthMessage = $(".messageConversation").width();
    heightMessges = height - (heightRoster + 100);
    widthline = widthMessage - 50;
    $(".messageConversation").css("height", heightMessges);
    $(".dateConversation").css("width", widthline);


    setTimeout(function(){
        scaleMessages();
        widthFormMessages();
    }, 300);
}

function scaleMessages() {
    messageConversation = $(".messageConversation .me-out").width();
    widthMessges = messageConversation - 50;
    $(".me-message").css("max-width", widthMessges);
    $(".him-message").css("max-width", widthMessges);
}

function widthFormMessages() {
    heightRoster = $(".mesOption").width();
    widthButtonOption = $(".conversation .buttonOption").width();
    widthFormMessage = heightRoster - widthButtonOption;
    console.log(heightRoster);
    console.log(widthButtonOption);
    console.log(widthFormMessage);

    $("#formMessage").css("width", widthFormMessage);
}

function sendMessage() {
    inputMessages = $('#inputMessages').val();

    return false;
}

function close_window() {
    alert(1);
    if (confirm("Close Window?")) {
        close();
    }
}