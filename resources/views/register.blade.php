<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image" href="/images/login.png">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: "Poppins", sans-serif;
        }
        .logo-container {
            position: absolute;
            top: 20px; /* Adjust as needed */
            left: 20px; /* Adjust as needed */
            z-index: 10; /* Ensure the logo appears above other content */
        }
        .registration-column {
            width: 80%; /* Adjust the width as needed */
        }
    </style>
</head>
<body class="bg-gray-100 h-screen">
    <div class="container flex h-screen">
        <div class="w-1/2 flex justify-center items-center p-4 registration-column">
            <div class="bg-gray-100 p-4 rounded-lg w-full">
                <form action="#" method="POST">
                    <div class="text-4xl font-extrabold mb-2 text-black">REGISTER</div>
                    <div class="text-xl mt-2 text-black font-bold">Already have an account? <a href="#" class="text-blue-500 hover:text-blue-700">Sign in</a></div>
                    <br>
                    <div class="mb-2">
                        <label for="name" class="text-black font-semibold mb-1">Name</label>
                        <input type="text" id="name" name="name" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-1 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="text-black font-semibold mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-1 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <div class="mb-2">
                        <label for="phone" class="text-black font-semibold mb-1">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-1 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="text-black font-semibold mb-1">Password</label>
                        <input type="password" id="password" name="password" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-1 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <div class="mb-2">
                        <label for="confirm_password" class="text-black font-semibold mb-1">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="w-full bg-gray-300 border-gray-700 hover:bg-gray-400 rounded-md p-1 focus:outline-none focus:border-gray-700 text-black" required>
                    </div>
                    <button type="submit" class="bg-yellow-600 text-black font-semibold py-1 px-3 rounded-md hover:bg-yellow-500 font-poppins">Submit</button>
                </form>
            </div>
        </div>
        <div class="logo-container">
            <img src="/images/logo.png" class="w-20 h-8"> 
        </div>
        <div class="image-section w-6/12 bg-cover bg-right" style="background-image: url('images/rubicon 1.png')"></div>
    </div>
</body>
