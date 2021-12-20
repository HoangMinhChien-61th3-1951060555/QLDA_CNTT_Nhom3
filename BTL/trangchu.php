<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ | Tìm kiếm khách sạn | Khách sạn | Hahalolo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <section class="header">
      <!-- Phần navigation chia làm 3 layout: 1 chứa logo, phần category và phần chức năng user    -->
      <div class="row container-fluid bg-light">
        <!-- Phần logo -->
        <div class="col-3 header-left">
          <img src="Image/Logo.jpg" style="width: 42px; margin-left: 10px; margin-top: 10px; margin-right:30px;"> 
        </div>

        <!-- Phần category -->
        <div class="col-7 header-center">
          <ul class="navbar-nav">
            <liv class="nav-item">
              <a class="a" href="#bangtin">
                <span class="material-icons-outlined">article</span>
                Bảng tin 
              </a>
              <a class="a " href="#trainghiem">
                <span class="material-icons-outlined">travel_explore</span>
                Trải nghiệm 
              </a>
              <a class="a" href="#tour">
                <span class="material-icons-outlined">location_on</span>
                Tour
              </a>
              <a class="a" href="#khachsan" aria-current="page">
                <span class="material-icons-outlined">business</span>
                Khách sạn</a
              >
              <a class="a" href="#vemaybay">
                <span class="material-icons-outlined">flight_takeoff</span>
                Vé máy bay
              </a>
              <a class="a" href="#chothuexe">
                <span class="material-icons-outlined">directions_car</span>
                Cho thuê xe
              </a>
              <a class="a" href="#muasam">
                <span class="material-icons-outlined">shopping_bag</span>
                Mua sắm
              </a>
            </liv>
          </ul>
        </div>

        <!-- Phần chức năng user -->
        <div class="col-2 header-right">
          <div class="row mt-3">
            <div class="col-3">
              <span class="material-icons-outlined">
                account_balance_wallet
                </span>
            </div>
            <div class="col-3">
              <span class="material-icons-outlined">
                chat
                </span>
            </div>
            <div class="col-3">
              <span style="font-size: 30px;" class="material-icons-outlined">
                account_circle
                </span>
            </div>
            <div class="col-3">
            <a class="nav-link" href="login.php">Login</a>
            </div>
            
          </div>
        </div>
      </div>
    </section>

<section class="home" id="home">

  <div class="content">
    <h1>Tìm nơi dừng chân hoàn hảo cùng Hahalolo !</h1>
    <p>Từ những khu nghỉ dưỡng thanh bình đến những căn hộ sang trọng hiện đại</p>
    <a href="detail.php" class="btn">Khám phá ngay</a>
  </div>

  <div class="controls">
    <span class="vid-btn active" data-src="Image/vid-1.mp4"></span>
    <span class="vid-btn" data-src="Image/vid-2.mp4"></span>
    <span class="vid-btn" data-src="Image/vid-3.mp4"></span>
    <span class="vid-btn" data-src="Image/vid-4.mp4"></span>
    <span class="vid-btn" data-src="image/vid-5.mp4"></span>
  </div>

  <div class="video-container">
    <video src="Image/vid-1.mp4" id="video-slider" loop autoplay muted></video>
  </div>

</section>


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
        <img src="Image/pichotel.png" alt="">
    </div>

    <form action="">
        <div class="inputBox">
            <h3>Bạn muốn ở đâu ?</h3>
            <input type="text" placeholder="Nhập nơi bạn muốn đến">
        </div>
        <div class="inputBox">
            <h3>Số người</h3>
            <input type="number" placeholder="Nhập số thành viên">
        </div>
        <div class="inputBox">
            <h3>Ngày nhận phòng</h3>
            <input type="date">
        </div>
        <div class="inputBox">
            <h3>Ngày trả phòng</h3>
            <input type="date">
        </div>
        <input type="submit" class="btn" value="Tìm kiếm">
    </form>

  </div>

</section>
      
      <main class="container mt-5">
        <h6 class="display-6 mb-3">Chỗ nghỉ nổi bật</h6>
        <div class="row">
            <div class="col-md-3 col-6 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="Image/Hamton.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">HAMPTON INN UTICA NY</h5>
                      <span class="card-text">172 - 180 North Genesee StrUtica NY 13502 US<br>Giá mỗi đêm<br>3.223.057 ₫</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="Image/Homewood.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">HOMEWOOD SUITES BY HILTON SYRACUSE</h5>
                      <span class="card-text">6006 Fair Lakes Road East Syracuse NY 13057 US<br>Giá mỗi đêm<br>7.578.515 ₫</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="Image/The reverie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">THE REVERIE SAIGON</h5>
                     <span class="card-text">22 to 36 Nguyen Hue Blvd Ho Chi Minh City 70000 VN<br>Giá mỗi đêm<br>5.528.400 ₫</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="Image/Somerset.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                     <h5 class="card-title">SOMERSET HO CHI MINH CITY</h5>
                      <span class="card-text">8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN<br>Giá mỗi đêm<br>1.820.000 ₫</span>
                    </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-6 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="Image/Rex.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">REX HOTEL</h5>
                  <span class="card-text">141 Nguyen Hue Boulevard DHO CHI MINH CITY 70000 VN<br>Giá mỗi đêm<br>1.940.468 ₫</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="Image/Citadines.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">CITADINES REGENCY SAIGON</h5>
                  <span class="card-text">20 and 22 Pham Ngoc Thach SHo Chi Minh City 700000 VN<br>Giá mỗi đêm<br>1.260.000 ₫</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="Image/Vissai.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">VISSAI SAIGON HOTEL</h5>
                 <span class="card-text">144 Nguyen Van Troi StreetHo Chi Minh City 70000 VN<br>Giá mỗi đêm<br>2.107.241 ₫</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="Image/Sherwood.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                 <h5 class="card-title">SHERWOOD SUITES LIF</h5>
                  <span class="card-text">192 Nam Ky Khoi Nghia Ho Chi Minh City 700000 VN<br>Giá mỗi đêm<br>2.720.000 ₫</span>
                </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-6 mb-3">
          <div class="card" style="width: 18rem;">
              <img src="Image/Lotte.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">LOTTE HOTEL SAIGON</h5>
                <span class="card-text">2A 4A Ton Duc Thang Street Ho Chi Minh 700000 VN<br>Giá mỗi đêm<br>2.201.500 ₫</span>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-6 mb-3">
          <div class="card" style="width: 18rem;">
              <img src="Image/The reverie.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">THE REVERIE RESIDENTIAL SUITES</h5>
                <span class="card-text">22 Nguyen Hue Boulevard Ho Chi Minh City 70000 VN<br>Giá mỗi đêm<br>7.152.367 ₫</span>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-6 mb-3">
          <div class="card" style="width: 18rem;">
              <img src="Image/Sedona.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">SEDONA SUITES HO CHI MINH CITY</h5>
               <span class="card-text">67 Le Loi Boulevard Ho Chi Minh City VN<br>Giá mỗi đêm<br>2.790.154 ₫</span>
              </div>
          </div>
      </div>
      <div class="col-md-3 col-6 mb-3">
          <div class="card" style="width: 18rem;">
              <img src="Image/Intercontinental.jpg" class="card-img-top" alt="...">
              <div class="card-body">
               <h5 class="card-title">INTERCONTINENTAL SAIGON RESIDENCES</h5>
                <span class="card-text">CORNER NGUYEN DU ST. HAIHO CHI MINH CITY VN<br>Giá mỗi đêm<br>3.328.557 ₫</span>
              </div>
        </div>
    </div>          
    </main>
    
    <main class="container">
      <h6 class="display-6 mb-3">Trải nghiệm du lịch cùng Hahalolo</h6>
      <div class="row">
        <div class="col-6">
          <img src="Image/a1.jpeg.webp">
          <p>Note ngay 4 Resort siêu ưu đãi cho kỳ du lịch cuối năm</p>
          <p>Khuyến mãi cuối năm resort với giá tốt bất ngờ . Điểm danh ngay những cái tên sang xịn dưới đây để chớp liền tay cho kỳ du lịch
             sắp tới nhé. ✳AVANI Quy Nhơn Resort & Spa – Giá chỉ từ 2.793.285 vnđ/đêm 👉Thông tin đặt phòng: 
             https://bit.ly/3pKWVpy AVANI Quy Nhơn Resort & Spa nằm cách trung tâm thành phố Quy Nhơn khoảng 25 phút lái xe, là địa chỉ...
            <a style="text-decoration: none; color: black;" href="xemthem">xem thêm</a>
          </p>
            </div>

        <div class="col-6">
          <div class="row">
            <div class="col-6">
              <img src="Image/a2.jpeg.webp">
            </div>
            <div class="col-6">
              <p>Đóng Giáng sinh tại quán cà phê kiểu Âu ở Đà Lạt
                🎅Với tiết trời se lạnh và khung cảnh lãng mạn, Đà Lạt là nơi hẹn hò lý tưởng cho các cặp đôi vào dịp lễ cuối năm. Đà Lạt (Lâm Đồng) níu chân du khách...
                Xem thêm</p>
            </div>
          </div>
        </div>
        

        
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
