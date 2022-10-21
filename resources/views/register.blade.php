<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        for ($i=0; $i < 12; $i++) {
            echo $i." <br>";
        }
    @endphp
    <a href="{{route('homepage.index')}}">Click here to go to login page</a>
</body>
</html>
