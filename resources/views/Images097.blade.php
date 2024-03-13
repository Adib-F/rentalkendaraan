<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMBAR</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('styles/style097.css') }}">
    
</head>
<body class="bg-red-100 p-4">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold text-center mt-8 mb-12">Menampilkan Gambar</h1>
        <div class="flex justify-center">
            <div class="w-1/2">
                <img src="{{ asset('images/fotoharimau097.jpg') }}" alt="fotoharimau097.jpg" 
                class="mb-4 mx-auto rounded-lg shadow-lg">
                <p class="text-center">Foto Harimau</p>
            </div>
            <div class="w-1/2">
                <img src="{{ asset('images/fotogajah097.jpg') }}" alt="fotogajah097.jpg" 
                class="mb-4 mx-auto rounded-lg shadow-lg">
                <p class="text-center">Foto Gajah</p>
            </div>
        </div>
        <h3 class="text-center mt-8">Muhammad Adib Fakhri Siregar <br> 3312301097</h3>
    </div>
</body>
</html>
