<?php
// Bắt đầu session
session_start();
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE tai_khoan = '$username' AND mat_khau = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            session_start();
            $row = mysqli_fetch_assoc($result);

            $_SESSION['user'] = $username;
            $_SESSION['role'] = $row['role'];

            if ($_SESSION['role'] == 'admin') {
                header('Location: layout.php');
            } else {
                header('Location: dashboard.php');
            }
            exit();
        } else {
            echo "<script>alert('Thông tin tài khoản mật khẩu không chính xác!');</script>";
        }
    } else {
        echo "<script>alert('Không được để trống tài khoản và mật khẩu');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - "Ăn Vặt No Say"</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f4ec;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background-color: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .login-container h1 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #333;
    }

    .login-container .form-group {
        margin-bottom: 1rem;
    }

    .login-container .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }

    .login-container .form-group input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
    }

    .login-container .form-group input:focus {
        border-color: #ff9800;
        outline: none;
        box-shadow: 0 0 4px rgba(255, 152, 0, 0.5);
    }

    .login-container .login-button {
        width: 100%;
        padding: 0.75rem;
        background-color: #ff9800;
        border: none;
        border-radius: 4px;
        color: #fff;
        font-size: 1rem;
        cursor: pointer;
        font-weight: bold;
    }

    .login-container .login-button:hover {
        background-color: #e68900;
    }

    .login-container .signup-link {
        text-align: center;
        margin-top: 1rem;
    }

    .login-container .signup-link a {
        color: #ff9800;
        text-decoration: none;
    }

    .login-container .signup-link a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>"Ăn Vặt No Say" Login</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="text">Tài khoản: </label>
                <input type="text" id="username" name="username" placeholder="Vui lòng nhập tài khoản ..." required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu: </label>
                <input type="password" id="password" name="password" placeholder="Vui lòng nhập mật khẩu ..." required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <div class="signup-link">
            <p>Bạn có có tài khoản ? <a href="/signup">Sign up here</a></p>
        </div>
    </div>
</body>

</html>