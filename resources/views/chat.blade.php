<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tiêu đề website</title>

    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<body>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        if (!Notification) {
            alert('Trình duyệt của bạn không hỗ trợ chức năng này.');
            return;
        }
        if (Notification.permission !== "granted") {
            Notification.requestPermission();
        }

    });
    Pusher.logToConsole = true;
    var pusher = new Pusher('26d71593863ac34f803a', {
        encrypted: true
    });
    var channel = pusher.subscribe('Freetuts');
    channel.bind('notice', function (data) {
        n = new Notification(
            'Bạn nhận được thông báo mới',
            {
                body: data.name + 'đã gửi tin nhắn cho bạn:' + data.message,
                icon: 'https://freetuts.net/public/logo/icon.png',
                tag: 'https://freetuts.net/'
            }
        );
        setTimeout(n.close.bind(n), 10000);
        n.onclick = function () {
            window.location.href = this.tag;
        }
    });
</script>
<p style="color:#ff0000;line-height:20px">

</p>
</body>
</html>