<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New mail</title>
</head>
<body>

    <h1>Ciao Admin</h1>
    <p>new message from site</p>

    <p>
        Nome:{{$lead->name}} <br>
        Email:{{$lead->email}}<br>
        Messaggio: <br>
        {{$lead->message}}
    </p>
    
</body>
</html>