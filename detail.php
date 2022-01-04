<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang chủ | Tìm kiếm khách sạn | Khách sạn | Hahalolo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/BTL/detail.css  ">
</head>

<body>
  <header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <img class="img" style="width:3% " src="Image/Logo.jpg">
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
      <i class="fab fa-facebook-messenger" style="color: rgb(82, 168, 248)"></i>
      <i class="fas fa-user-circle" id="login-btn"></i>
    </div>

  </header>
  <!-- Quay lại  -->
  <div class="menu contain row">
    <div class="row" style="padding-left: 43px;">
      <button class="col-md-2">
        <i class="bi bi-chevron-double-left" style="color: blue;"></i>
        Quay Lại</button>
    </div>
    <!-- main left -->
    <div class="main-left col-md-3" style="padding-left: 43px;">
      <div class="shadow-sm p-3 mb-5" style="background-color: rgb(24, 197, 219);">
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
      </div>
      <div class="shadow-sm p-3 mb-5 bg-body rounded" style="background-color: blue;">
        <h6>Gợi ý tuyệt vời dành cho bạn tại HAMPTON INN UTICA</h6>
        <b>Phòng Deluxe, 1 King size bed</b>
        <div class="card" style="width: 18rem;">
          <img src="image/Hanoi/Little Anh House/4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="color: blue;">Chi tiết phòng</h5>
            <p class="card-text">Chỗ tốt cho 1 người lớn
              1 King size
              Giá mỗi đêm </p>
            <p style="color: red;">3.191.440 ₫</p>
            <a href="#" class="btn btn-primary">Đặt ngay</a>
            <p style="color: blue;">Xem thêm phòng khác </p>
          </div>
        </div>
      </div>
    </div>
    <!-- main right -->
    <div class="main-right col-md-9">
      <!--  -->
      <div class="header1">
        <h1 class="">HAMPTON INN UTICA</h1>
        <div class="stars">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>
        <div class="col-md">
          <button type="button" class="btn btn-warning" style="color: white;"><i class="bi bi-geo-alt"></i>xem trên bản đồ </button>
        </div>
      </div>
      <div class="map">
        <h6 <i class="bi bi-geo-alt">172 - 180 North Genesee Str. Utica NY 13502. US.</i>></h6>
      </div>
      <div class="header2 fluid" style="text-align: center;">
        <button type="button" class="btn btn-outline-primary">Tổng Quan</button>
        <button type="button" class="btn btn-outline-secondary">Thông Tin Phòng Và Giá </button>
        <button type="button" class="btn btn-outline-secondary">Tiện Nghi</button>
        <button type="button" class="btn btn-outline-secondary">Quy Tắc Chung</button>
      </div>
      <!-- section image-->
      <section class="container">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="image/Hanoi/Hana stay/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="image/Hanoi/Hana stay/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/Hanoi/Hana stay/3.jpg" class="d-block w-100" alt="...">
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
              <!-- <span class="visually-hidden">Previous</span> -->
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
              <!-- <span class="visually-hidden">Next</span> -->
            </button>
          </div>
      </section>
      <div class="main-featured row">
        <div class="col-md">
          <figure class="figure">
            <img src="./Image/Hanoi/HOMEY Hotel Apartment 2/1.jpg" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-md">
          <figure class="figure">
            <img src="./Image/Hanoi/HOMEY Hotel Apartment 2/2.jpg" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-md">
          <figure class="figure">
            <img src="./Image/Hanoi/HOMEY Hotel Apartment 2/3.jpg" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
          </figure>
        </div>
        <div class="col-md">
          <figure class="figure">
            <img src="./Image/Hanoi/HOMEY Hotel Apartment 2/4.jpg" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption">A caption for the above image.</figcaption>
          </figure>
        </div>
      </div>
      <div class="shadow p-3 mb-5 bg-body rounded">- Located off Exit 31 on NYS I-90. Less than 1 mile from downtown Utica which is home to the Nexus Center and the new MVHS Hospital. Great walkable restaurants. We are minutes away from Cree Inc Danfoss and SUNY Polytechnic Institute for stress free commutes. Convenient access to all colleges. Enjoy our newly renovated modern rooms with 49 quot TVS Digital Key pull out sleeper sofas. Newly expanded fitness center to be completed by end of summer. NYS Canal Trail is located right next door to enjoy the outdoors for serious runners or just an enjoyable walk. Start your day recharged with Hampton apos s expanded hot breakfast buffet .</div>
      <div class="shadow p-3 mb-5 bg-body rounded" style="display: flex;">
        <h6>Phòng Deluxe, 1 King size bed</h6>
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
          </div>
        </div>
        <hr>
        tác nhân
        <hr>
        <h6>Tiện ích
          Miễn phí bữa sáng</h6>
        <hr>
        <h6>Giá mỗi đêm</h6>
        <hr>
        <h6>Đặt 1 phòng </h6>
      </div>
      <div class="shadow p-3 mb-5 bg-body rounded" style="display: flex;">
        <h6>Phòng Deluxe, 1 King size bed</h6>
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
          </div>
        </div>
        <hr>
        tác nhân
        <hr>
        <h6>Tiện ích
          Miễn phí bữa sáng</h6>
        <hr>
        <h6>Giá mỗi đêm</h6>
        <hr>
        <h6>Đặt 1 phòng </h6>
      </div>
      <div class="shadow p-3 mb-5 bg-body rounded" style="display: flex;">
        <h6>Phòng Deluxe, 1 King size bed</h6>
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
          </div>
        </div>
        <hr>
        tác nhân
        <hr>
        <h6>Tiện ích
          Miễn phí bữa sáng</h6>
        <hr>
        <h6>Giá mỗi đêm</h6>
        <hr>
        <h6>Đặt 1 phòng </h6>
      </div>
      <div class="shadow p-3 mb-5 bg-body rounded" style="display: flex;">
        <h6>Phòng Deluxe, 1 King size bed</h6>
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
          </div>
        </div>
        <hr>
        tác nhân
        <hr>
        <h6>Tiện ích
          Miễn phí bữa sáng</h6>
        <hr>
        <h6>Giá mỗi đêm</h6>
        <hr>
        <h6>Đặt 1 phòng </h6>
      </div>
      <h5 class="display-6 mb-3 ">Các tiện nghi của HAMPTON INN UTICA</h5>
      <h6 class="display-6 mb-3 ">Các tiện nghi được khách ưa chuộng</h6>
      <div class="shadow-none p-3 mb-5 bg-light rounded">
        các tiện nghi
      </div>
    </div>
    <!-- footer -->
    <div class="shadow-sm p-3 mb-5 bg-body rounded">
      <h6>Những chỗ nghỉ phổ biến và tương tự với khách sạn HAMPTON INN UTICA</h6>
      <div class="footer">
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
            <a href="#" class="btn">giá một đêm </a>
            <div class="price"> 1.540.680 ₫ </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>