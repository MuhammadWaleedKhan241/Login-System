<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-System</title>


    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: rgba(76, 95, 107, 0.658);
        }

        .h1 {
            font-size: 50px;
        }

        .card {
            width: 1000px;
            padding: 100px 0;
            margin: 0 auto;
            background-color: rgb(104, 104, 102);
        }

        .btn {
            margin: 100px 0 0 0;
            font-weight: bold;
            font-size: 40px;
            padding: 30px;
            background-color: rgba(76, 95, 107, 0.658);
            ;
            border: 0;
            color: rgb(0, 6, 10);
        }
    </style>
</head>

<body>

    <div class="card my-5">
        <h1 class="text-center h1">Login As:</h1>
        <div class="d-flex justify-content-around ">
            <a href="{{ route('admin.login') }}" class="btn btn-light">Admin</a>
            {{-- <a href="{{ route('teacher.login') }}" class="btn btn-light">Teacher</a>
            <a href="{{ route('student.login') }}" class="btn btn-light">Student</a> --}}
            <a href="" class="btn btn-light">Admin</a>
            <a href="" class="btn btn-light">Teacher</a>
            <a href="" class="btn btn-light">Student</a>
        </div>
    </div>

</body>

</html>
