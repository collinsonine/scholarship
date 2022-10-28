<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container justify-items-center mt-5 pt-5">
        <div class="col-8 mx-auto card">
            <form action="{{route('applicant.save')}}" method="get">
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
                        <label for=""> Full Name:</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" >
                        <small class="text-danger">@error('name'){{ $message }}@enderror</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for=""> Email:</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email')
                            is-invalid
                        @enderror" >
                        <small class="text-danger">@error('email'){{ $message }}@enderror</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for=""> Phone</label>
                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control @error('phone')
                        is-invalid
                    @enderror" >
                    </div>
                    <small class="text-danger">@error('phone'){{ $message }}@enderror</small>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for=""> Date of Birth:</label>
                        <input type="date" name="dob" class="form-control @error('dob')
                        is-invalid
                    @enderror" >
                    <small class="text-danger">@error('dob'){{ $message }}@enderror</small>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for=""> Address:</label>
                        <input type="text" name="address" class="form-control @error('address')
                        is-invalid
                    @enderror" >
                    <small class="text-danger">@error('address'){{ $message }}@enderror</small>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary"> Submit</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
