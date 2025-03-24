<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            width: 700px;
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
            margin-bottom: 20px;
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
        
        .btn-login {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 25px auto 15px;
        }
        
        .text-center {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
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
        
        <form method="post" action="welcome.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Type here">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Type here">
            </div>
            
            <button type="submit" class="btn-login">Login</button>
        </form>
        
        <div class="text-center">
            Or <a href="register.php">Register Here</a>
        </div>
    </div>
</body>
</html>