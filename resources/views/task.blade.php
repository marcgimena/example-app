<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <table>
        <thead>
        <th>id</th>
        <th>Name</th>
        </thead>
        <tbody>

        |@foreach ($tasks as $task )
        <tr>
             <td>{{$task->id}}</td>
             <td>{{$task->name}}</td>
        </tr>
        </tbody>
        @endforeach
</body>
</html>
