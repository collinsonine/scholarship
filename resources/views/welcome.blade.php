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
    <div class="container-fluid">
        <div class="table-responsive mt-5 pt-5">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type</th>
                    <th scope="col">Address</th>
                    <th scope="col">Post Code</th>
                    <th scope="col"> No of Invoice</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @forelse ($customers as $customer)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>@if ($customer->type == "I")
                            Individual
                        @else
                            Business
                        @endif</td>
                        <td>{{$customer->address}}, {{$customer->street}} {{$customer->city}} {{$customer->state}}</td>
                        <td>{{$customer->postal_code}}</td>
                        <td>{{count($customer->invoices)}}</td>
                    </tr>
                    @empty
                       <td> Sorry No Customer in Database</td>
                    @endforelse


                </tbody>
              </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
