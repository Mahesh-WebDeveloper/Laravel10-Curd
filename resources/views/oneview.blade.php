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
    <table class="table table-bordered streped table-dark text-center">

        <thead>
            <tr>
                <th>Name</th>
                <th>City</th>
                <th>Age</th>
                <th>view</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($user as $data)
            <tr>
                <td>{{ $data->Name }}</td>
                <td>{{ $data->city }}</td>
                <td>{{ $data->age }}</td>
                <td><a href="{{route('welcome')}}">Back</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>
