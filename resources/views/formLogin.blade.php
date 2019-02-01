<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route('login') }}" method="post">
    @csrf
    First name:<br>
    <input type="text" name="firstname" value="Mickey">
    <input type="hidden" name="" value="{{csrf_token() }}">
    <br>
    Last name:<br>
    <input type="text" name="email" value="langtuhoabinh2010@gmail.com">
    <input type="password" name="password" value="123456">
    <br><br>
    <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>