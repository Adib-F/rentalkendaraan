<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>List Mobil:</h2>
    <ul>
        @foreach($mobil as $car)
            <li>{{ $car }}</li>
        @endforeach
    </ul>
</body>
</html>