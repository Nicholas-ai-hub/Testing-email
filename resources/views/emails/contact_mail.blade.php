<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <h3 style="color: grey">Message from: <span style="color: black">{{$contact_data['name']}}</h3>
    <h3 style="color: grey"> Email: {{$contact_data['email']}}</h3> 
    <h2 style="color: grey">Message: <br> 
    <span style="color: black">{{$contact_data['message']}}</h2>
</body>
</html> 

