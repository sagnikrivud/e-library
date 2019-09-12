<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the E-Library System {{$user['name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}} , Please click on the below link to verify your email account
<br/>
<h3>Your Mobile Contact is-{{$user['mobile']}}</h3>
<a href="{{url('user/verify', $user->verifyUser->token)}}">Verify Email</a>
</body>

</html>