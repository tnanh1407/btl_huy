<!-- <?php
        include('connect.php');

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_2 = $_POST['password_2'];

            // kiểm tra nếu tài khoản còn tồn tại

            $sql_check = "SELECT * FROM user WHERE tai_khoan= '$username' ";
            $result = mysqli_query($conn, $sql_check);

            if (mysqli_num_rows($result) > 0) {
                echo "<script>alert('Tài khoản này đã tồn tại!');</script>";
            } elseif ($password != $password_2) {
                echo "<script>alert('Mật khẩu không khớp nhau!');</script>";
            } else {
                $sql = "INSERT INTO user(tai_khoan , mat_khau , ho_ten) VALUES('$fullname' , '$password' , '$username')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>
                alert('Đăng ký thành công!');
                window.location.href = 'login.php';
            </script>";
                } else {
                    echo "<script>alert('Đăng kí không thành công!');</script>";
                }
            }
        }
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - "Ăn Vặt No Say" Shop</title>
    <link rel="stylesheet" href="style.css">
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

    .signup-container {
        background-color: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .signup-container h1 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #333;
    }

    .signup-container .form-group {
        margin-bottom: 1rem;
    }

    .signup-container .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }

    .signup-container .form-group input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
    }

    .signup-container .form-group input:focus {
        border-color: #ff9800;
        outline: none;
        box-shadow: 0 0 4px rgba(255, 152, 0, 0.5);
    }

    .signup-container .login-button {
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

    .signup-container .login-button:hover {
        background-color: #e68900;
    }

    .signup-container .signup-link {
        text-align: center;
        margin-top: 1rem;
    }

    .signup-container .signup-link a {
        color: #ff9800;
        text-decoration: none;
    }

    .signup-container .signup-link a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="signup-container">
        <h1>Sign Up "Ăn Vặt No Say"</h1>
        <form action="/signup" method="POST">
            <div class="form-group">
                <label for="fullname">Họ tên:</label>
                <input type="text" id="fullname" name="fullname" placeholder="Vui lòng nhập họ tên ..." required>
            </div>
            <div class="form-group">
                <label for="taikhoan">Tài khoản :</label>
                <input type="taikhoan" id="taikhoan" name="tai_khoan" placeholder="Vui lòng nhập tài khoản ..."
                    required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Vui lòng nhập mật khẩu" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="password-2" placeholder="Xác nhận lại mật khẩu"
                    required>
            </div>
            <button type="submit" class="signup-button">Sign Up</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="/login">Login here</a></p>
        </div>
    </div>
</body>

</html>