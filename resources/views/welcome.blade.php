<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid bg-dark">


        <div class="container bg-dark">
            <div class="row">
                <div class="col-lg-12 py-3">
                    <a href="{{ route('f') }}"><button class="btn btn-primary btn-lg">Enter Data</button></a>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered streped table-dark text-center">

        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>City</th>
                <th>Age</th>
                <th>view</th>
                <th>Update</th>
                <th>delete</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->Name }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->age }}</td>
                    <td>
                        <a href="{{ route('oneview.data', ['id' => $user->id]) }}">
                            <button class="btn btn-primary btn-sm">View</button>
                        </a>
                    </td>

                    <td><a href="{{ route('delete.data', ['id' => $user->id]) }}"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                    
                    <td><a href="{{ route('update.data' , ['id' => $user->id]) }}"><button class="btn btn-success btn-sm">Update</button></a></td>


                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        <div class="row text-center justify-center">
            <div class="text-center mx-auto mt-3">
                {{$users->links()}}
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>
