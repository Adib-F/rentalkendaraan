<!DOCTYPE html>
<html>
<head>
    <title>rentcang - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100">
    <div class="bg-yellow-50 w-1/3 mx-auto mt-24 p-8 bg-white border rounded shadow">
        <h1 class="text-2xl font-bold text-center">Rentcang</h1>
        <form action="" method="post" class="mt-8">
            @csrf
            <div class="mb-4">
                <label for="username" class="block">Username:</label>
                <input type="text" id="username" name="username" required
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block">Password:</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white 
                        rounded py-2 px-4 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Login
            </button>
        </form>
    </div>
</body>
</html>
