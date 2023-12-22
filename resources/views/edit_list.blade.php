<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin-top: 50px;
            font-family: sans-serif;
            background: black!important;
            width: 100%;
            display: flex;
            justify-content: center;

        }
        form{
            margin-top: 20px;
        }
    </style>
</head>
<body class="antialiased">
    <div class="container">
        <div class="text-right"><a href="/" class="btn btn-success">Go Back</a></div>
        <form action="../update_list/{{$todo_arr->id}}">
            <input type="text" placeholder="Enter new list" name="name" value="{{$todo_arr->name}}">
            <button type="submit">Save</button>
        </form>

</div>
</body>
</html>
