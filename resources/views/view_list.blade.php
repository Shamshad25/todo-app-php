<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-family: sans-serif;
            background: black!important;
            width: 100%;
            display: flex;
            justify-content: center;

        }
        table{
            width: 540px;
            background: white!important;
            margin-top: 50px;
        }
        tr{
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body class="antialiased">
    <div class="container">
        <div class="text-right"><a href="create" class="btn btn-success">Create New List</a></div>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>

        @foreach ($todo_arr as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->created_at}}</td>
                <td><a href="delete/{{$item->id}}">Delete</a><a href="edit/{{$item->id}}">Edit</a></td>
            </tr>
        @endforeach


    </table>
</div>
</body>
</html>
