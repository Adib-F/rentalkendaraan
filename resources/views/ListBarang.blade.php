<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/tailwindcss3.4.1.js">
    <title>Daftar Barang</title>
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-bold mb-8">Daftar Barang</h1>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Nama Barang</th>
                    <th class="border border-gray-300 px-4 py-2">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $item)
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2">{{ $item['id'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item['nama'] }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item['harga'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
