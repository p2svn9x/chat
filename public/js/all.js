
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

function validateURL(textval) {
    var urlregex = /^(https?|ftp):\/\/([a-zA-Z0-9.-]+(:[a-zA-Z0-9.&%$-]+)*@)*((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9][0-9]?)(\.(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[1-9]?[0-9])){3}|([a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(:[0-9]+)*(\/($|[a-zA-Z0-9.,?'\\+&%$#=~_-]+))*$/;
    return urlregex.test(textval);
}

function parseJson(result) {

    Data = (typeof  result === "object") ? result : JSON.parse(result);
    if (Data.status == 401) {

    }
    return Data;
}

function showFomoad() {
    $("#fromloading").fadeIn(1);
    setTimeout(function () {
        hideFomoad();
    }, 5000);
}

function hideFomoad() {
    $("#fromloading").fadeOut(1);
}
function selectFileAttach() {
    $( "#fileAttach" ).trigger( "click" );

}


function authorization() {
    
}


var timeAlert = 0;
function errorMessage(message) {

    $('#dangerStatus').removeClass("alert-success");
    $('#dangerStatus').addClass("alert-danger");
    $('#dangerStatus').fadeIn();
    cleartTimeOutAlert(timeAlert);
    $("#textStatusAlert").html(message);
    timeAlert = setTimeout(function () {
        $('#dangerStatus').fadeOut(1);
    }, 5000);
}

function successMessage(message) {

    $("#dangerStatus").removeClass("alert-danger");
    $("#dangerStatus").addClass("alert-success");
    $("#dangerStatus").fadeIn();
    $("#textStatusAlert").html(message);
    cleartTimeOutAlert(timeAlert);
    timeAlert = setTimeout(function () {
        $('#dangerStatus').fadeOut(1);
    }, 5000);
}

function cleartTimeOutAlert(timeCleart) {
    if (timeCleart) {
        clearTimeout(timeCleart);
    }
}

function activeMenuLeft(id) {
    $(".panel-list li").removeClass('active');
    $(".panel-list li#"+id).addClass('active');
    //menuLeftUser
}

function setCookie(cname,cvalue) {
    var d = new Date();
    d.setTime(d.getTime() + (30*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
var delete_cookie = function(name) {
    document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};

function showError(textError) {
    $("#dangerStatus").fadeIn(1);
    $("#textStatusAlert").html(textError);
    return false;
}

function hideError() {
    $("#dangerStatus").fadeOut(1);
    $("#textStatusAlert").html('');
    return false;
}

function pagination(page, totalPage, url, urlSeo, id) {

    $(".ountPagination .pagination").html('');
    if (totalPage == 1) {
        return false;
    }
    page = parseInt(page);
    nextPage = page - 4;
    prevPage = page +5;

    pre = totalPage - page;
    if (pre < 10 && totalPage > 10) {
        nextPage =  totalPage - 10;
    }
    if (nextPage < 1) {
        prevPage = (prevPage - nextPage) + 1 ;
        nextPage = 1;

    }
    seo = "/"+urlSeo;
    idCa = "/"+id;
    if (!urlSeo) {
        seo = ''
        idCa = '';
    }
    for(i = 1; i <= totalPage; i ++) {
        if (i < nextPage || i > prevPage ) {
            continue;
        }
		var catetour = getUrlParameter('cate');
		if(catetour!="")
			catetour = "?cate="+ catetour;
		else catetour = "";
        itemPage = '<li><a href="'+serverName+url+'/'+i+idCa+seo+catetour+'">'+i+'</a></li>';
        if (i == page) {
            itemPage = '<li class="disabled"><a>'+i+'</a></li>';
        }

        $(".ountPagination .pagination").append(itemPage);
    }
}



function valiEmail(email) {

    filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,6})+$/; // bo loc filter
    if (!filter.test(email)) {

        return false;
    }

    return true;
}