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

<!-- view section  -->
<section class="home" id="home">

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

<!-- hotel section  -->
<section class="packages" id="packages">

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
            <img src="Image/Hamton.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> HAMPTON INN UTICA NY </h3>
                <p>172 - 180 North Genesee StrUtica NY 13502 US</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">3.206.966 ₫</div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Homewood.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> HOMEWOOD SUITES BY HILTON SYRACUSE </h3>
                <p>6006 Fair Lakes Road East Syracuse NY 13057 US</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 7.540.680 ₫ </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/The reverie.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> THE REVERIE SAIGON </h3>
                <p>22 to 36 Nguyen Hue Blvd Ho Chi Minh City 70000 VN</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">5.500.800 ₫</span> </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Somerset.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> SOMERSET HO CHI MINH CITY </h3>
                <p>8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 1.820.000 ₫ </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Rex.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> REX HOTEL </h3>
                <p>141 Nguyen Hue Boulevard DHO CHI MINH CITY 70000 VN</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 1.930.780 ₫ </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Citadines.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> CITADINES REGENCY SAIGON </h3>
                <p>20 and 22 Pham Ngoc Thach SHo Chi Minh City 700000 VN</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">1.260.000 ₫</span> </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Sherwood.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> SHERWOOD SUITES LIF </h3>
                <p>2A 4A Ton Duc Thang Street Ho Chi Minh 700000 VN</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 2.201.500 ₫ </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Sedona.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> SEDONA SUITES HO CHI MINH CITY </h3>
                <p>67 Le Loi Boulevard Ho Chi Minh City VN</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> 2.790.154 ₫ </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>

        <div class="box">
            <img src="Image/Intercontinental.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> INTERCONTINENTAL SAIGON RESIDENCES </h3>
                <p>CORNER NGUYEN DU ST. HAIHO CHI MINH CITY VN</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price">3.311.940 ₫</span> </div>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>
    </div>
</section>

<!-- Experience section  -->
<section class="review" id="review">

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

</body>
</html>