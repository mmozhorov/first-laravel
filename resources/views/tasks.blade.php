<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello world</title>

</head>
<body>
@foreach($tasks as $task)
    <div>{{$task->body}}</div>
@endforeach

</body>
</html>