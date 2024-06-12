<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            background: linear-gradient(to bottom, blue , purple);;
        }

        .login-container {
            background-color: whitesmoke;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        .register-container {
            display: none;
            background-color: orange;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-button, .register-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            outline: none;
            border: none;
            border-radius: 5px;
            color: #fff;
            background-color: #3498db;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s;
        }

        .login-button:hover, .register-button:hover {
            background-color: #2980b9;
        }

        .toggle-link {
            margin-top: 10px;
            color: #3498db;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            transition: color 0.3s;
        }

        .toggle-link:hover {
            color: black;
        }
    </style>
</head>
<body>
    <div class="login-container">@if(session()->has('LoginError'))
    <script>
        alert("Registration Error");
        </script>
    @endif

        <h2>Registration</h2>
        <form id="login-form" action="/register" method="post">
            @csrf
            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="#" class="btn btn-primary"><button type="submit">Sign Up</button></a>
        </form>
        <a href="/register" class="toggle-link">Don't Have An Account ? Login Here</a>
    </div>
</body>
</html>

