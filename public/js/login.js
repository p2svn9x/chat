setTimeout(function () {
    setRemember();
}, 1000);

function login() {

    email = $('#loginEmail').val();
    password = $('#loginPassword').val();
    remember = 0;

    if ($("#remember").is(':checked')) {
        remember = 1;
    }

    if (!email || !password) {
        $("span#errorLogin").html('Email and password cannot be blank.');
        return false;
    }

    $("#fromloading").fadeIn(1);
    $("span.error").html('');

    $.ajax({
        url: serverName + 'login',
        type: "post",
        dateType: "json",
        data: {
            email: email,
            password: password
        },
        success: function (result) {

            $("#fromloading").fadeOut(1);
            obj = parseJson(result);
            if (obj.status != 200) {
                $("span#errorLogin").html(obj.message);
                return false;
            }
            if (remember == 1) {
                setCookie('username', email);
                setCookie('password', password);
                setCookie('remember', remember);
            } else {
                delete_cookie('username');
                delete_cookie('password');
                delete_cookie('remember');
            }
            setTimeout(function () {
                //window.location.href = serverName + 'Console/Dashboard';
            }, 1000);
            //
        }
    });
}

function setRemember() {

    $("#username").val(getCookie('username'));
    $("#password").val(getCookie('password'));
    remember = getCookie('remember');

    if (remember == 1) {
        $("#remember").prop('checked', true)
    }
}


function forgotPassword() {

    email = $('#emailForgot').val();

    if (!email) {
        $("span#errorForgot").html('Email cannot be blank.');
        return false;
    }

    checkEmail = valiEmail(email);

    if (checkEmail != true) {
        $("span#errorForgot").html('Email is invalid.');
        return false;
    }

    $("#fromloading").fadeIn(1);
    $("span.error").html('');

    $.ajax({
        url: serverName + 'Forgot/Checkemail',
        type: "get",
        dateType: "json",
        data: {
            email: email
        },
        success: function (result) {

            $("#fromloading").fadeOut(1);
            obj = parseJson(result);

            if (obj.status != 200) {
                $("span#errorForgot").html(obj.message);
                return false;
            }
            $('#emailForgot').val('');

            $('#dialogForgot').modal('show');
            $('#dialogForgot p').html(obj.message);
        }
    });
}

function closeDialogForgot() {
    $("#aLogin").trigger( "click" );
    $('#dialogForgot').modal('hide');
}

// function valiEmail(email) {
//
//     if (!email) {
//         return 'Email cannot be blank.';
//     }
//
//     filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,6})+$/; // bo loc filter
//
//     if (!filter.test(email)) {
//
//         return 'Email is invalid.';
//     }
//
//     return true;
// }