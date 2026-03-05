<!DOCTYPE html>
<html>
<head>
    <title>Styled Login</title>

    <style>
        /* 1️⃣ This styles the whole page */
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* 2️⃣ This is the login box */
        .login-box {
            background: white;
            padding: 30px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* 3️⃣ Title style */
        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        /* 4️⃣ Input fields */
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* 5️⃣ Button style */
        button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        /* 6️⃣ Button hover effect */
        button:hover {
            background: #45a049;
        }

        /* 7️⃣ Message styling */
        .success {
            color: green;
            text-align: center;
        }

        .error {
            color: red;
            text-align: center;
        }

    </style>
</head>
<body>

<div class="login-box">

    <h2>Login</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit">Login</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "admin" && $password == "1234"){
            echo "<p class='success'>Login Successful!</p>";
        } else {
            echo "<p class='error'>Wrong Username or Password!</p>";
        }
    }
    ?>

</div>

</body>
</html>