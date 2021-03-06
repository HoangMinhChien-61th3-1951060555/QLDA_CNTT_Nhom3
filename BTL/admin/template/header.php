<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị</title>
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
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<header>
      <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="admin.php">Admin</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="DSKS.php">Danh sách khách sạn</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="giaphong.php">Danh sách giá phòng</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="DSDP.php">Danh sách đặt phòng</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="nguoidung.php">Danh sách khách hàng</a>
                  </li>
                  <?php
                                  if(isset($_SESSION['isLoginOK']))
                                  {
                                      echo '<li class="nav-item">';
                                      echo "<a class='nav-link'>Xin chào: ".$_SESSION['isLoginOK']."</a>";
                                      echo '</li>';
                                      echo '<li class="nav-item">';
                                      echo "<a class='nav-link text-danger' href='logout.php'>Logout</a>";
                                      echo '</li>';
                                  }

                              ?>
                </ul>
              </div>
            </div>
          </nav>
          </div>
    </header>