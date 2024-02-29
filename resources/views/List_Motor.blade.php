<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>List Motor:</h2>
    <ul>
        @foreach($motor as $motorcycle)
            <li>{{ $motorcycle }}</li>
        @endforeach
    </ul>
</body>
</html>