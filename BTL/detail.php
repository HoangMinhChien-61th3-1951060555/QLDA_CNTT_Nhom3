<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ | Tìm kiếm khách sạn | Hahalolo</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="cssforindex.css"/>

</head>
<body>

<header>
    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>H</span>ahalolo</a>
    <nav class="navbar">
        <a href="#Bangtin">Bảng tin</a>
        <a href="#Experience">Trải nghiệm</a>
        <a href="#Tour">Tour</a>
        <a href="index.php">Khách sạn</a>
        <a href="#flight">Vé máy bay</a>
        <a href="#car">Cho thuê xe</a>
        <a href="#shopping">Mua sắm</a>
    </nav>
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>
    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>
</header>



<!-- Booking section  -->
<section class="book" id="book">
    <h1 class="heading">
        <span>Đ</span>
        <span>Ặ</span>
        <span>T</span>
        <span class="space"></span>
        <span>N</span>
        <span>G</span>
        <span>A</span>
        <span>Y</span>
    </h1>

    <div class="row">
        <div class="image">
            <img src="Image/graphic.png" alt="">
        </div>
        <form action="">
            <div class="inputBox">
                <h3>Bạn muốn ở đâu ?</h3>
                <input type="text" placeholder="Place you want">
            </div>
            <div class="inputBox">
                <h3>Ngày nhận phòng</h3>
                <input type="date" placeholder="Check in">
            </div>
            <div class="inputBox">
                <h3>Ngày trả phòng</h3>
                <input type="date" placeholder="Check out">
            </div>
            <div class="inputBox">
                <h3>Số lượng người</h3>
                <input type="number" placeholder="Number of guests">
            </div>
            <input type="submit" class="btn" value="Tìm kiếm">
        </form>
    </div>
</section>