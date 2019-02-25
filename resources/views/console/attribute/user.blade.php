<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>My First Bootstrap Page</h1>
    <p>Resize this responsive page to see the effect!</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">

        </div>

    </div>
</div>
<script>
    $(document).ready(function(){
        callApi();
    });

    function callApi() {
        $.ajax({
            url: 'http://cntt.com/console/users/callApi',
            type: "get",
            dateType: "json",
            data: {
            },
            success: function (result) {
                obj = parseJson(result);
                setTimeout(function () {
                    callApi();
                }, 600000);
            }, error(result) {
                obj = parseJson(result.responseText);
                alert(obj.message);
                return false;
            }
        });
    }

    function parseJson(result) {

        Data = (typeof  result === "object") ? result : JSON.parse(result);
        if (Data.status == 401) {

        }
        return Data;
    }
</script>
</body>
</html>