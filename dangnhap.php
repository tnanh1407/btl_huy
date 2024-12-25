<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="post">
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" name="username" placeholder="Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="password" placeholder="Mật khẩu">
        </div>
        <div>
            <input type="submit" value="Đăng nhập">
        </div>
    </form>
    <?php
    include('connect.php');
    // $_POST['username'];
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $userName = $_POST['username'];
        $passWord = $_POST['password'];
        $sql = "select * from user where ten_dang_nhap = '$userName' and mat_Khau = '$passWord'";
        $result = mysqli_query($conn, $sql);
        if ($result > 0) {
            session_start();
            $_SESSION['user'] = $userName;
            header('location: home.php');
        } else {
            echo "Tên đăng nhập hoặc mật khẩu không chính xác!";
        }
    }
    ?>
</body>

</html>