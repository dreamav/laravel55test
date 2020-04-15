<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <ul>
        @foreach ($tasks as $task)
            <li>{{$task->body}}</li>
        @endforeach
    </ul>
</body>
</html>