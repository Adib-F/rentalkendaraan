
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel=”stylesheet” href=”/styles/tailwindcss3.4.1.js”>
</head>
<body class="bg-violet-200">
<table>
    <thead>
        <tr>
            <th class="my-9 px-9 text-xl font-serif">ID</th>
            <th class="my-9 px-9 text-xl font-serif">Nama</th>
            <th class="my-9 px-9 text-xl font-serif">Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dataku)
        <tr>
            <td class="my-9 px-9 text-xl font-serif">{{ $dataku['id'] }}</td>
            <td class="my-9 px-9 text-xl font-serif">{{ $dataku['nama mobil'] }}</td>
            <td class="my-9 px-9 text-xl font-serif">{{ $dataku['harga'] }}</td>
        </tr>
        @endforeach
</tbody>
</table>
</body>
</html>