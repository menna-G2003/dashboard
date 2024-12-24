<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .table{
        width:80%;
        margin: auto;
        border-collapse: collapse;
        background-color: #d9e6ff;
    }
    .table, th, td{
        border:1px solid #333;
    }
    td{
        padding: 5px;
    }
    h1{
        text-align: center
    }
    </style>
</head>
<body>
    <h1>Teachers</h1>
    <table class="table">
    <thead>
        <tr>
            <th>no.</th>
            <th>Code</th>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
            <th>subject</th>
            <th>phone</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student['code'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['email']}}</td>
            <td>{{ $student['password']}}</td>
            <td>{{ $student['subject']}}</td>
            <td>{{ $student['phone']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
