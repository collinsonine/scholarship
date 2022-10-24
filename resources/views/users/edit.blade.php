<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{$title}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-10 justify-items-center mx-auto mt-5">
            <div class="card mt-5 p-5">
                <div class="card-header">
                    Update {{$user->firstname}} {{$user->lastname}}
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row p-5">
                            @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something went wrong!!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                @if (Session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for=""> Username:</label>
                        <input type="text" name="username" value="{{$user->username}}" class="form-control @error('username') is-invalid @enderror" >
                        <small class="text-danger">@error('username'){{ $message }}@enderror</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for=""> First Name:</label>
                        <input type="text" name="firstname" value="{{$user->firstname}}" class="form-control @error('firstname')
                            is-invalid
                        @enderror" >
                        <small class="text-danger">@error('firstname'){{ $message }}@enderror</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for=""> Last Name:</label>
                        <input type="text" name="lastname" value="{{$user->lastname}}" class="form-control @error('lastname')
                        is-invalid
                    @enderror" >
                    </div>
                    <small class="text-danger">@error('lastname'){{ $message }}@enderror</small>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for=""> Password:</label>
                        <input type="password" name="password" class="form-control @error('password')
                        is-invalid
                    @enderror" >
                    <small class="text-danger">@error('password'){{ $message }}@enderror</small>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary"> Save</button>
                </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
