<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ | Tìm kiếm khách sạn | Hahalolo</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="cssforindex.css"/>

</head>
<body>

<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <img class="img" style = "width:3% "src="Image/Logo.jpg">
    <a href="#" class="logo"><span>H</span>ahalolo</a>
    <nav class="navbar">
        
        <a class="a" href="#Bangtin"><span class="material-icons-outlined">article</span>
            Bảng tin</a>
        <a class="a" href="#Experience"><span class="material-icons-outlined">travel_explore</span>
            Trải nghiệm</a>
        <a class="a" href="#Tour"><span class="material-icons-outlined">location_on</span>
            Tour</a>
        <a class="a" href="index.php"><span class="material-icons-outlined">business</span>
            Khách sạn</a>
        <a class="a" href="#flight"><span class="material-icons-outlined">flight_takeoff</span>
            Vé máy bay</a>
        <a class="a" href="#car"><span class="material-icons-outlined">directions_car</span>
            Cho thuê xe</a>
        <a class="a" href="#shopping"><span class="material-icons-outlined">shopping_bag</span>
            Mua sắm</a>
    </nav>
    <div class="icons">
    <i class="fas fa-wallet"></i>
    <i class="fab fa-facebook-messenger" style="color: rgb(82, 168, 248"></i>
    <i class="fas fa-user-circle" id="login-btn"></i>
    </div>
    
</header>

<!-- view section  -->
<section class="home" >

    <div class="content">
        <h3>Tìm nơi dừng chân hoàn hảo cùng Hahalolo!</h3>
        <p>Từ những khu nghỉ dưỡng thanh bình đến những căn hộ sang trọng hiện đại</p>
        <a href="detail.php" class="btn">Khám phá ngay</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="Image/vid-1.mp4"></span>
        <span class="vid-btn" data-src="Image/vid-2.mp4"></span>
        <span class="vid-btn" data-src="Image/vid-3.mp4"></span>
        <span class="vid-btn" data-src="Image/vid-4.mp4"></span>
        <span class="vid-btn" data-src="Image/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="Image/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>
</section>

<!-- Booking section  -->
<section class="book">
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

            <input type="submit" class="btn" value="Tra cứu đặt phòng" style="margin-left:9rem;">
        </form>
    </div>
</section>

<!-- hotel section  -->
<section class="packages">

    <h1 class="heading">
        <span>C</span>
        <span>H</span>
        <span>Ỗ</span>
        <span class="space"></span>
        <span>N</span>
        <span>G</span>
        <span>H</span>
        <span>Ỉ</span>
        <span class="space"></span>
        <span>N</span>
        <span>Ổ</span>
        <span>I</span>
        <span class="space"></span>
        <span>B</span>
        <span>Ậ</span>
        <span>T</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="Image/Hana.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Hana Stay </h3>
                <p>Số 148 Phan Kế Bính, Cống Vị Quận Ba Đình, Hà Nội</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">1.300.000 ₫</div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Homey.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> HOMEY Hotel Apartment 2 </h3>
                <p> 156A ngõ 154 Đình Thôn. Mỹ Đình 1, Nam Từ Liêm, Hà Nội</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 1.000.000 ₫ </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Little.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Little Anh House </h3>
                <p>6A Ngõ 67 Lý Thường Kiệt, Trần Hưng Đạo Quận Hoàn Kiếm, Hà Nội</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">1.100.000 ₫</span> </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Hamorny.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Harmony Homestay </h3>
                <p>152/21 Phan Thanh, Thạc Gián Quận Thanh Khê, Đà Nẵng</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 1.300.000 ₫ </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Maximilan.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Khách Sạn Maximilan Đà Nẵng </h3>
                <p>222 Võ Nguyên Giáp, Phước Mỹ, Sơn Trà, Đà Nẵng</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 1.000.000 ₫ </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Roliva.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Roliva Hotel & Apartment Đà Nẵng </h3>
                <p>13 Phạm Văn Đồng, An Hải Bắc, Sơn Trà, Đà Nẵng</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">1.100.000 ₫</span> </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Aladdin.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Aladdin Hotel & Apartment </h3>
                <p>397 Huỳnh Văn Bánh, Quận Phú Nhuận, Hồ Chí Minh</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 2.000.000 ₫ </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Saigon.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Saigon Cactus Apartment </h3>
                <p>251/8 Nguyễn Văn Trỗi, Phường 10, Phú Nhuận, Hồ Chí Minh </p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 1.500.000 ₫ </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/TamSen.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Tâm Sen Hotel </h3>
                <p>57A Lê Văn Thịnh, Hồ Chí Minh</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">1.300.000 ₫</span> </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>
    </div>
</section>

<!-- Experience section  -->
<section class="review">

    <h1 class="heading">
        <span>T</span>
        <span>R</span>
        <span>Ả</span>
        <span>I</span>
        <span class="space"></span>
        <span>N</span>
        <span>G</span>
        <span>H</span>
        <span>I</span>
        <span>Ệ</span>
        <span>M</span>
    </h1>

    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box">
                    <img src="Image/a1.jpeg.webp" alt="">
                    <h3>Note ngay 4 Resort siêu ưu đãi cho kỳ du lịch cuối năm</h3>
                    <p>🔜Khuyến mãi cuối năm resort với giá tốt bất ngờ . Điểm danh ngay những cái tên sang xịn dưới đây để chớp liền tay cho kỳ du lịch sắp tới nhé.
✳AVANI Quy Nhơn Resort & Spa – Giá chỉ từ 2.793.285 vnđ/đêm
👉Thông tin đặt phòng: https://bit.ly/3pKWVpy
AVANI Quy Nhơn Resort & Spa nằm cách trung tâm thành phố Quy Nhơn khoảng 25 phút lái xe, là địa chỉ nghỉ dưỡng lý tưởng cho những ai muốn có một kỳ nghỉ bình yên và thư giãn tại thành phố biển mộng mơ này. Nằm tại khu du lịch Ghềnh Ráng Tiên Sa nổi tiếng tại Quy Nhơn, nghỉ ngơi tại đây bạn có thể chiêm ngưỡng trọn vẹn vẻ đẹp của khu du lịch nổi tiếng này một cách một cách yên bình nhất.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3>Mới lạ địa điểm check in vườn cam Mộc Châu đẹp ‘hút hồn’ team mê sống ảo</h3>
                    <p>Những mô hình vườn cây trải nghiệm không chỉ mang lại nguồn thu nhập cho hộ gia đình mà nó còn góp phần vào việc phát triển ngành du lịch của địa phương. Nắm bắt được xu hướng này thì vườn cam Mộc Châu cũng đã xuất hiện và thu hút rất đông lượng du khách hàng năm.</p>   
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="Image/a3.jpeg.webp.png" alt="">
                    <h3>Đón Giáng sinh tại quán cà phê kiểu Âu ở Đà Lạt</h3>
                    <p>🎅Với tiết trời se lạnh và khung cảnh lãng mạn, Đà Lạt là nơi hẹn hò lý tưởng cho các cặp đôi vào dịp lễ cuối năm.
Đà Lạt (Lâm Đồng) níu chân du khách không chỉ bởi thức ăn ngon, điểm vui chơi hấp dẫn, không khí dễ chịu mà còn sở hữu nhiều tiệm cà phê đa dạng phong cách.
🎅Một không gian hẹn hò với lối thiết kế mang phong cách phương Tây là địa điểm phù hợp cho cuộc gặp gỡ riêng tư dịp Giáng sinh. Đây cũng là những nơi có nhiều
 background đẹp để giới trẻ thỏa sức check-in.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="Image/a4.jpeg.webp" alt="">
                    <h3>Check-in & chill tại Sitooterie - Tiệm cà phê có không gian độc đáo tựa phim trường Ký Sinh Trùng</h3>
                    <p>Mỗi người ghé đến tiệm cà phê này đều có thể tìm cho mình một góc rất riêng và không kém phần thú vị.</p> 
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer section  -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Về chúng tôi</h3>
            <p> Nguyễn Đình Ân</p>
            <p> Hoàng Minh Chiến</p>
            <p> Trình Đức Hải</p>
        </div>  
        <div class="box">
            <h3>Theo dõi tại</h3>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Youtube</a>
            <a href="#">Zalo</a>
        </div>
    </div>
    <h1 class="credit"> Nhóm 3 lớp 61TH3  |  Đại Học Thủy Lợi  |  12 / 2021 </h1>
</section>

<script></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>