<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> View {{$title}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <h4>You are viewing {{$user->firstname}} {{$user->lastname}}</h4>
                </div>
                <div class="card-body">
                    <h5> Username : {{$user->username}}</h5>
                    <h5> Firstname : {{$user->firstname}}</h5>
                    <h5> Lastname : {{$user->lastname}}</h5>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
