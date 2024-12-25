<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: login.php');
}
include('connect.php');

if (isset($_GET['page']) && $_GET['page'] === "dangxuat") {
    session_destroy();
    session_unset();
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CDN fontware -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link css Bootraps -->
    <link rel="stylesheet" href="assets/bootrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>

<body>

    <div class="header">
        <div class="header-top">
            <div class="container-fluid">
                <ul class="menu">
                    <li><a class="d-flex align-items-center" href=""><i class="fa-solid fa-user-pen"></i> HỒ SƠ CÁ
                            NHÂN</a></li>
                    <li><a class="d-flex align-items-center" href=""><i class="fa-solid fa-cart-arrow-down"></i>GIỎ
                            HÀNG</a></li>
                    <li><a class="d-flex align-items-center" href="layout.php?page=dangxuat"><i
                                class="fa-solid fa-user"></i>ĐĂNG XUẤT</a></li>
                </ul>
            </div>
        </div>
        <div class="nav-list row">
            <div class="nav-list-one item-box col-xl-3 ">
                <a href="layout.php?page=trangchu"> <img src="assets/image/header/ananas_logo.svg"
                        alt="ananas_logo"></a>
            </div>
            <div class="nav-list-two item-box col-xl-6 ">
                <div class="drop-down-list">
                    <a href="layout.php?page=sanpham" class="product">SẢN PHẨM <i
                            class="fa-solid fa-angle-down"></i></a>
                </div>
                <div class="drop-down-list">
                    <a href="layout.php?page=shoe" class=" product-shoe">GIÀY <i class="fa-solid fa-angle-down"></i></a>
                </div>
                <div class="drop-down-list">
                    <a href="layout.php?page=phukien" class="product-female">PHỤ KIỆN <i
                            class="fa-solid fa-angle-down"></i></a>
                </div>
                <a href="layout.php?page=saleoff" class="product-saleOff">SALE OFF</a>
                <a href="layout.php?page=discover" class="product-img"><img src="assets/image/header/DiscoverYOU.svg"
                        alt="loi_"></a>
            </div>
            <div class="nav-list-three item-box col-xl-3">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" class="header__input" placeholder="Tìm kiếm">
            </div>
        </div>
    </div>

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="logo">
                    <img src="Imagine/Logo_1.png" alt="">
                </div>
                <ul class="menu">
                    <li><a href="layout.php?page=trangchu">TRANG CHỦ</a></li>
                    <li><a href="">SẢN PHẨM</a></li>
                    <li><a href="">ĐỒ ĂN</a></li>
                    <li><a href="">ĐỒ UỐNG</a></li>
                </ul>
                <ul class="login">
                    <li><a href="">GIỎ HÀNG</a></li>
                    <li><a href="layout.php?page=dangxuat">ĐĂNG XUẤT</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case "trangchu":
                include('trangchu.php');
                break;
            case "sanpham":
                include('sanpham.php');
                break;
        }
    } else {
        include('trangchu.php');
    }

    include('footer.php');
    ?>
    <!-- Link JS Bootraps -->
</body>

</html>