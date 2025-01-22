<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - ToolMart</title>
    <link rel="stylesheet" href="home/css/bootstrap.css" />
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), 
                        url('images/admin-bg.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 450px;
        }

        .admin-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .admin-logo img {
            width: 180px;
        }

        .login-title {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-control {
            height: 50px;
            padding: 10px 20px;
            border-radius: 8px;
            border: 2px solid #e9ecef;
        }

        .form-control:focus {
            border-color: #f7444e;
            box-shadow: none;
        }

        .login-btn {
            background: #f7444e;
            color: white;
            padding: 12px 0;
            border: none;
            border-radius: 8px;
            width: 100%;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            background: #e12d35;
            transform: translateY(-2px);
        }

        .back-to-site {
            text-align: center;
            margin-top: 20px;
        }

        .back-to-site a {
            color: #2c3e50;
            text-decoration: none;
        }

        .back-to-site a:hover {
            color: #f7444e;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="admin-logo">
            <img src="images/toolmart.png" alt="ToolMart Admin">
        </div>
        <h2 class="login-title">Admin Login</h2>
        
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Admin Email" required>
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            
            <button type="submit" class="login-btn">Login to Dashboard</button>
        </form>
        
        <div class="back-to-site">
            <a href="{{ url('/') }}"><i class="fa fa-arrow-left"></i> Back to Website</a>
        </div>
    </div>
</body>
</html> 