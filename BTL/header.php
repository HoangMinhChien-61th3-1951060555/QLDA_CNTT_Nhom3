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
    <link rel="stylesheet" href="styles.css"/>
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