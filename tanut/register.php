<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #4a4a4a;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            background-color: white;
            border-radius: 20px;
            padding: 30px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .nav {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 30px;
        }
        
        .nav a {
            margin-left: 15px;
            text-decoration: none;
            color: #333;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }
        
        .btn-register {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 25px auto 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="dashboard.php">Dashboard</a>
            <a href="login.php">Login</a>
        </div>
        
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Type here">
            </div>
            
            <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" id="fullname" name="fullname" placeholder="Type here">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Type here">
            </div>
            
            <div class="form-group">
                <label for="re-password">Re-Password</label>
                <input type="password" id="re-password" name="re-password" placeholder="Type here">
            </div>
            
            <button type="submit" class="btn-register">Register</button>
        </form>
    </div>
</body>
</html>