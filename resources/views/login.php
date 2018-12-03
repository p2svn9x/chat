<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{ HTML::style('css/login.css') }}

    <style>
        body {
            background-image: url(https://www.walldevil.com/wallpapers/a64/8334-wallpaper-ocean-wallpapers.jpg);
            background-size: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-register-form-section">
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#login" id="aLogin"data-toggle="tab">Đăng nhập</a></li>
            <li><a href="#register" data-toggle="tab">Quên mật khẩu</a></li>
        </ul>
        <div role="tabpanel" class="tab-pane fade in active form-horizontal" id="login">

            <div class="form-group ">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="text" id="loginEmail" class="form-control" placeholder="Email" required="required"
                           value="">
                </div>
            </div>
            <div class="form-group ">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                    <input type="password" id="loginPassword" class="form-control" placeholder="Mật khẩu"
                           required="required">
                </div>
            </div>
            <div class="form-group" style="margin-bottom: 0px;">
                <input type="checkbox" id="remember">
                <label for="remember">Ghi nhớ</label>
            </div>
            <span class="error" style="color: #f00;" id="errorLogin"></span>
            <button class="btn btn-success btn-custom" onclick="login()">Đăng nhập</button>
            <div class="text-center">
                <a href="<?php echo $this->serverName; ?>" target="_blank"><?php echo $this->domainName; ?></a>
            </div>


        </div>
        <div role="tabpanel" class="tab-pane fade" id="register">
            <div class="form-group " style="padding: 0px">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    <input type="email" id="emailForgot" class="form-control" placeholder="Email"
                           required="required" value="">
                </div>
            </div>

            <span class="error" style="color: #f00;" id="errorForgot"></span>
            <button class="btn btn-success btn-custom" onclick="forgotPassword()">Quên mật khẩu</button>
        </div>
    </div>
</div>
<div id="dialogForgot" class="modal fade" role="dialog" data-backdrop="static">
    <div class="modal-dialog" style="max-width: 415px;margin-top: 15%">
        <div class="modal-content" style="">
            <div class="modal-header">
                <h4 class="modal-title">Quên mật khẩu</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer" style="text-align: center">
                <button type="button" class="btn btn-primary" onclick="closeDialogForgot()">Đóng</button>
            </div>
        </div>

    </div>
</div>

</body>
</html>

