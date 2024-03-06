<!DOCTYPE html>
<html>
<head>
    <title>rentcang - Login</title>
</head>
<body>
    <div style="width: 300px; margin: 100px auto; padding: 20px; 
    background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 5px;">
        <h1 style="text-align: center;">Rentcang</h1>
        <form action="" method="post">
            @csrf
            <div style="margin-bottom: 10px;">
                <label for="username" style="display: block;">Username:</label>
                <input type="text" id="username" name="username" 
                required style="width: 100%; padding: 8px; border: 1px solid #ccc;
                 border-radius: 3px;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="password" style="display: block;">Password:</label>
                <input type="password" id="password" name="password" 
                required style="width: 100%; padding: 8px; border: 1px solid #ccc;
                 border-radius: 3px;">
            </div>
            <button type="submit" style="background-color: #007bff; 
            color: #fff; border: none; border-radius: 3px; padding: 8px 12px; cursor: 
            pointer; width: 100%;">Login</button>
        </form>
    </div>
</body>
</html>
