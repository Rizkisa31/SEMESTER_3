<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    <style>
        body {
            background: linear-gradient(to right, #000000, #ffffff);
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 300px;
            border-radius: 1px solid #000000;
        }

        label {
            margin-top: 10px;
        }

        input {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
            border: 2px solid #ffffff;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
        }

        input[type="submit"] {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            cursor: pointer;
            margin-top: 30px;
        }

        input[type="submit"]:hover {
            background-color: #ffffff;
            color: #000000;
        }

        a {
            text-decoration: none;
            margin-top: 10px;
        }

        button {
            padding: 8px 130px;
            border: 2px solid #ffffff;
            color: #ffffff;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.1);
            cursor: pointer;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #ffffff;
            color: #000000;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Login">
    </form>
    <a href="register.php"><button>Daftar</button></a>
</body>
</html>
