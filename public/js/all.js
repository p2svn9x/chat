$(document).ready(function () {
    height = $( window ).height();
    $("#hoeapp-container").css({'min-height':height + 100});
});
function goBack()
{
	window.history.go(-1);
}
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

function saveDisplay() {
    $("#dangerStatus").fadeOut(1);
}
function saveError(text) {
    if (!text) {
        text = '* Fields are required.';
    }

    $("#dangerStatus").fadeIn(1);
    $("#dangerStatus").removeClass('alert-success');
    $("#dangerStatus").addClass('alert-danger');
    $("#dangerStatus #textStatusAlert").html(text);
}

function parseJson(result) {

    Data = (typeof  result === "object") ? result : JSON.parse(result);
    if (Data.status == 401) {

    }
    return Data;
}

function showFomoad() {
    $("#fromloading").fadeIn(1);
}

function hideFomoad() {
    $("#fromloading").fadeOut(1);
}
function selectFileAttach() {
    $( "#fileAttach" ).trigger( "click" );

}
function selectFileLogo() {
    $( "#fileLogo" ).trigger( "click" );

}
function selectFilePhoto() {
    $( "#filePhoto" ).trigger( "click" );

}

function uploadLogo() {

    var files = document.getElementById('fileLogo').files;
    if (!files)  {
        return false;
    }
    file = files[0];
    $("#imgLogo").attr('src', serverName+'public/images/loader.gif');
    imgUrl = serverName+'public/images/logo.png';
    var http = new XMLHttpRequest();
    var data = new FormData();
    data.append('filename', file.name);
    data.append('file', file);
    data.append('folder', folder);
    http.open('POST', serverName + "Upload", true);
    http.send(data);
    http.onreadystatechange = function (event) {

        if (http.readyState == 4 && http.status == 200) {
            var job = parseJson(http.responseText);
            if (job.status != 200) {

                $("#imgLogo").attr('src', imgUrl);
                saveError(job.message);
                return false;
            }
            var img = serverName + job.data.url;
            $("#imgLogo").attr('src', img);
            $('#logo').val(job.data.url);
            saveDisplay();
        }

    }
}
function uploadPhoto() {

    var files = document.getElementById('filePhoto').files;
    if (!files)  {
        return false;
    }
    file = files[0];
    $("#imgPhoto").attr('src', serverName+'public/images/loader.gif');
    imgUrl = serverName+'public/images/logo.png';
    var http = new XMLHttpRequest();
    var data = new FormData();
    data.append('filename', file.name);
    data.append('file', file);
    data.append('folder', folder);
    http.open('POST', serverName + "Upload", true);
    http.send(data);
    http.onreadystatechange = function (event) {

        if (http.readyState == 4 && http.status == 200) {
            var job = parseJson(http.responseText);
            if (job.status != 200) {

                $("#imgPhoto").attr('src', imgUrl);
                saveError(job.message);
                return false;
            }
            var img = serverName + job.data.url;
            $("#imgPhoto").attr('src', img);
            $('#photo').val(job.data.url);
            saveDisplay();
        }

    }
}

function authorization() {
    
}

function saveSuccess(text) {

    if (!text) {
        text = '* Fields are required.';
    }
    $("#dangerStatus").fadeIn(1);
    $("#dangerStatus").removeClass('alert-danger');
    $("#dangerStatus").addClass('alert-success');
    $("#dangerStatus #textStatusAlert").html(text);
    setTimeout(function(){
        location.reload();
    }, 2000);
}

var timeAlert = 0;
function alert_message(id, message) {

    $(id).removeClass("alert-success");
    $(id).addClass("alert-danger");
    $(id).fadeIn();
    cleartTimeOutAlert(timeAlert);
    $("#alert_nam").html(message);
    timeAlert = setTimeout(function () {
        $(id).fadeOut(1);
    }, 5000);
}

function success_message(id, message) {

    $(id).removeClass("alert-danger");
    $(id).addClass("alert-success");
    $(id).fadeIn();
    $("#alert_nam").html(message);
    cleartTimeOutAlert(timeAlert);
    timeAlert = setTimeout(function () {
        $(id).fadeOut(1);
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

function findTextInString(inputString, keySearch) {
     return inputString.indexOf(keySearch);
}

function valiEmail(email) {

    filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,6})+$/; // bo loc filter
    if (!filter.test(email)) {

        return false;
    }

    return true;
}