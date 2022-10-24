<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container justify-items-center mt-5 pt-5">
        <div class="col-8 mx-auto card">
            <form action="{{route('homepage.formsubmit')}}" method="post">
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
                        <input type="text" name="username" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror" >
                        <small class="text-danger">@error('username'){{ $message }}@enderror</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for=""> First Name:</label>
                        <input type="text" name="firstname" value="{{old('firstname')}}" class="form-control @error('firstname')
                            is-invalid
                        @enderror" >
                        <small class="text-danger">@error('firstname'){{ $message }}@enderror</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for=""> Last Name:</label>
                        <input type="text" name="lastname" value="{{old('lastname')}}" class="form-control @error('lastname')
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
                    <button type="submit" class="btn btn-primary"> Submit</button>
                </div>
            </div>
        </form>
        </div>

        <div class="col-12 card mx-auto">
            <div class="table-responsive">
               <table class="table mt-5">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    {{-- <th scope="col"> Password</th> --}}
                    <th scope="col"> Created At</th>
                    <th scope="col" class="text-center"> Actions </th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->username}}</td>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    {{-- <td>{{$user->password}}</td> --}}
                    <td>{{\Carbon\Carbon::createFromTimeStamp(strtotime($user->created_at))->diffForHumans()}}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{url('/user/view/'.$user->id)}}" class="btn btn-success btn-sm" title="View">

<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </a>
                            &nbsp;
                            <a href="{{url('/user/update/'.$user->id)}}" class="btn btn-secondary btn-sm" title="Edit">

<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                            </a>
                            &nbsp;
                            <a href="#" class="btn btn-danger btn-sm" title="Delete">

<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> </a>
                        </div>
                    </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center"> Sorry, You have no users in your database.</td>
                    </tr>
                    @endforelse

                </tbody>
              </table>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
