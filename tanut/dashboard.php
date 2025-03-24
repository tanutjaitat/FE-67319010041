<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
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
            width: 500px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .nav {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }
        
        .nav a {
            margin-left: 15px;
            text-decoration: none;
            color: #333;
        }
        
        .welcome-content {
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            border-radius: 5px;
        }
        
        .welcome-content h1 {
            margin-top: 0;
            color: #333;
            font-size: 32px;
        }
        
        .welcome-content p {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .btn-get-started {
            background-color: #4e54cb;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        </div>
        
        <div class="welcome-content">
            <h1>Hello there</h1>
            <p>Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            <a href="#" class="btn-get-started">Get Started</a>
        </div>
    </div>
</body>
</html>