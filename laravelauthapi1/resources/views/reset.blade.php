<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
</head>
<body style="margin:100px">
    <h1>You have requested to reset your password</h1>
    <hr>
    <p>We cannot simply send you your old password.To reset follow the link below </p>
    <h1><a href="http://127.0.0.1:8000/api/user/reset-password/{{$token}}">Click here to reset</a></h1>

</body>
</html>