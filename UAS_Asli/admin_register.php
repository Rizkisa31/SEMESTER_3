<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pengguna</title>
</head>
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

.container-6 a {
    text-decoration: none;
    padding: 10px 20px;
    border: 2px solid #ffffff;
    color: #ffffff;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

.container-6 a:hover {
    background-color: #ffffff;
    color: #000000;
}

h2 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 300px;
}

label {
    margin-top: 10px;
}

input {
    padding: 8px;
    margin: 5px 0;
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #ffffff;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
}

input[type="submit"] {
    background-color: #ffffff;
    color: #000000;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #000000;
    color: #ffffff;
}

</style>
<body>

        <div class="container-6">
            <a href="login.php">Kembali</a>
        </div>

    <h2>Formulir Registrasi Admin</h2>
    <form action="register_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <input type="submit" value="Daftar">
    </form>
</body>
</html>
