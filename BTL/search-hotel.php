<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ | Tìm kiếm khách sạn | Hahalolo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="./search.css" />
</head>

<body>
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <img class="img" style="width:3% " src="Image/Logo.jpg">
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
            <a href=""><i class="bi bi-wallet" style="color:black"></i></a>
            <a href=""><i class="bi bi-messenger" style="color: rgb(82, 168, 248)"></i></a>
            <a href=""><i class="bi bi-person-circle" style="color: rgb(82, 168, 248)"></i></a>
        </div>

    </header>
    <div class="main" style="margin: 80px 26px 0px 26px;padding: 0px 26px;">
        <!-- Quay lại  -->
        <div class="menu row">
            <button class="col-md-2"><i class="bi bi-chevron-double-left"></i>Quay Lại</button>
        </div>
        <!-- main  -->
        <div class="contain row" style="margin-top: 8px;">
            <!-- main left -->
            <div class="main-left col-md-3" style="padding-left: 8px;">
                <div class="shadow-sm p-3 mb-5" style="background-color: rgb(24, 197, 219);border: radius 20px;">
                    <div class="row">
                        <div class="image">
                            <img src="Image/pichotel.png" alt="">
                        </div>
                        <form action="fr.search" style="padding: 8px 20px 8px 20px;">
                            <div class="search">
                                <div class="inputBox">
                                    <h4>Bạn muốn ở đâu ?</h4>
                                    <input type="text" placeholder="Nhập nơi bạn muốn đến">
                                </div>
                                <div class="inputBox">
                                    <h4>Số người</h4>
                                    <input type="number" placeholder="Nhập số thành viên">
                                </div>
                                <div class="inputBox">
                                    <h4>Ngày nhận phòng</h4>
                                    <input type="date">
                                </div>
                                <div class="inputBox">
                                    <h4>Ngày trả phòng</h4>
                                    <input type="date">
                                </div>
                            </div>
                            <button class="btsearch">
                                <input type="submit" class="btn" value="Tìm kiếm">
                            </button>

                        </form>
                    </div>
                </div>
                <button class="btsearch.name" style="width: 250px">
                    <input type="text" placeholder="Tìm kiếm theo tên lưu trú ">
                    <i class="bi bi-search"></i>
                </button>
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <h4>Xếp hạng sao</h4>
                    <hr>
                    <div class="rank">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <label class="form-check-label" for="disabledFieldsetCheck">
                            1 sao
                        </label>
                    </div>
                    <div class="rank">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <label class="form-check-label" for="disabledFieldsetCheck">
                            2 sao
                        </label>
                    </div>
                    <div class="rank">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <label class="form-check-label" for="disabledFieldsetCheck">
                            3 sao
                        </label>
                    </div>
                    <div class="rank">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <label class="form-check-label" for="disabledFieldsetCheck">
                            4 sao
                        </label>
                    </div>
                    <div class="rank">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <label class="form-check-label" for="disabledFieldsetCheck">
                            5 sao
                        </label>
                    </div>
                    <div class="rank">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <label class="form-check-label" for="disabledFieldsetCheck">
                            Không đánh giá
                        </label>
                    </div>
                </div>
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <h4>Tiện Nghi </h4>
                    <hr>
                    <div class="convenient">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <span>Hồ bơi</span>
                    </div>
                    <div class="convenient">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <span>Cho phép mang theo vật nuôi</span>
                    </div>
                    <div class="convenient">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <span>Máy điều hòa</span>
                    </div>
                    <div class="convenient">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <span>TV</span>
                    </div>
                    <div class="convenient">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <span>Phòng tắm riêng</span>
                    </div>
                    <div class="convenient">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <span>Phòng bếp</span>
                    </div>
                    <div class="convenient">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <span>Trẻ em ở miễn phí </span>
                    </div>
                    <div class="convenient">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <span>Internet tốc độ cao</span>
                    </div>
                    <div class="convenient">
                        <input class="form-check-input" type="checkbox" id="" disabled>
                        <span>Có bãi đậu xe</span>
                    </div>
                </div>
                <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <h4>Khách Sạn vừa xem</h4>
                    <hr>
                    <div class="box">
                        <img src="Image/Hana.jpg" alt="" style="width: 250px;">
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
                            <div class="price" style="color: red;">1.300.000 ₫</div>
                            <button type="button" class="btn btn-primary">Đặt ngay</button>
                        </div>
                    </div>
                    <hr>
                    <div class="box">
                        <img src="Image/Hana.jpg" alt="" style="width: 250px;">
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
                            <div class="price" style="color: red;">1.700.000 ₫</div>
                            <button type="button" class="btn btn-primary">Đặt ngay</button>
                        </div>
                    </div>
                    <hr>
                    <div class="box">
                        <img src="Image/Hana.jpg" alt="" style="width: 250px;">
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
                            <div class="price" style="color: red;">1.300.000 ₫</div>
                            <button type="button" class="btn btn-primary">Đặt ngay</button>
                        </div>
                    </div>
                    <hr>
                </div>

            </div>
            <!-- main right -->
            <div class="main-right col-md-9">
                <!--  -->
                <div class="header1">
                    <h1 class="">Những chỗ nghỉ phù hợp được tìm thấy ở địa điểm </h1>
                    <div class="col-md">
                        <button type="button" class="btn btn-warning" style="color: white;"><i class="bi bi-geo-alt"></i>xem trên bản đồ </button>
                    </div>
                </div>
                <hr>
                <div class="header2-row">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            Giá
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><button class="dropdown-item" type="button">giá tăng đần</button></li>
                            <li><button class="dropdown-item" type="button">giá giảm dần </button></li>
                            <li><button class="dropdown-item" type="button">hủy</button></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-primary"><i class="bi bi-list-task"></i></button>
                    <button type="button" class="btn btn-light"><i class="bi bi-grid"></i> </button>
                </div>
                <div class="shadow p-3 mb-5 bg-body rounded" style="display: flex;">
                    <div class="box" style="width:33,33%;padding-right:8px">
                        <img src="./Image/Hanoi/Hana stay/1.jpg" alt="ảnh khách sạn " style="width:285px">
                    </div>
                    <div class="content" style="width:33,33%;padding:0px 8px 0px 8px">
                        <h4> <i class="fas fa-map-marker-alt"></i> SOMERSET HO CHI MINH CITY </h4>
                        <h6 style="color: blue;">8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN</h6>
                    </div>
                    <div class="money" style="width:33,33%;padding-left:8px">
                        <h6>Giá mỗi đêm</h6>
                        <h6 style="color:red;">1.500.000</h6>
                        <button type="button" class="btn btn-primary">Chọn Phòng </button>
                    </div>
                </div>
                <div class="shadow p-3 mb-5 bg-body rounded" style="display: flex;">
                    <div class="box" style="width:33,33%;padding-right:8px">
                        <img src="./Image/Hanoi/Hana stay/2.jpg" alt="ảnh khách sạn " style="width:285px">
                    </div>
                    <div class="content" style="width:33,33%;padding:0px 8px 0px 8px">
                        <h4> <i class="fas fa-map-marker-alt"></i> SOMERSET HO CHI MINH CITY </h4>
                        <h6 style="color: blue;">8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN</h6>
                    </div>
                    <div class="money" style="width:33,33%;padding-left:8px">
                        <h6>Giá mỗi đêm</h6>
                        <h6 style="color:red;">2.500.000</h6>
                        <button type="button" class="btn btn-primary">Chọn Phòng </button>
                    </div>
                </div>
                <div class="shadow p-3 mb-5 bg-body rounded" style="display: flex;">
                    <div class="box" style="width:33,33%;padding-right:8px">
                        <img src="./Image/Hanoi/Hana stay/3.jpg" alt="ảnh khách sạn " style="width:285px">
                    </div>
                    <div class="content" style="width:33,33%;padding:0px 8px 0px 8px">
                        <h4> <i class="fas fa-map-marker-alt"></i> SOMERSET HO CHI MINH CITY </h4>
                        <h6 style="color: blue;">8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN</h6>
                    </div>
                    <div class="money" style="width:33,33%;padding-left:8px">
                        <h6>Giá mỗi đêm</h6>
                        <h6 style="color:red;">2.000.000</h6>
                        <button type="button" class="btn btn-primary">Chọn Phòng </button>
                    </div>
                </div>
                <div class="shadow p-3 mb-5 bg-body rounded" style="display: flex;">
                    <div class="box" style="width:33,33%;padding-right:8px">
                        <img src="Image/Somerset.jpg" alt="ảnh khách sạn " style="width:285px">
                    </div>
                    <div class="content" style="width:33,33%;padding:0px 8px 0px 8px">
                        <h4> <i class="fas fa-map-marker-alt"></i> SOMERSET HO CHI MINH CITY </h4>
                        <h6 style="color: blue;">8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN</h6>
                    </div>
                    <div class="money" style="width:33,33%;padding-left:8px">
                        <h6>Giá mỗi đêm</h6>
                        <h6 style="color:red;">1.500.000</h6>
                        <button type="button" class="btn btn-primary">Chọn Phòng </button>
                    </div>
                </div>
                <div class="shadow p-3 mb-5 bg-body rounded" style="display: flex;">
                    <div class="box" style="width:33,33%;padding-right:8px">
                        <img src="Image/Somerset.jpg" alt="ảnh khách sạn " style="width:285px">
                    </div>
                    <div class="content" style="width:33,33%;padding:0px 8px 0px 8px">
                        <h4> <i class="fas fa-map-marker-alt"></i> SOMERSET HO CHI MINH CITY </h4>
                        <h6 style="color: blue;">8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN</h6>
                    </div>
                    <div class="money" style="width:33,33%;padding-left:8px">
                        <h6>Giá mỗi đêm</h6>
                        <h6 style="color:red;">1.800.000</h6>
                        <button type="button" class="btn btn-primary">Chọn Phòng </button>
                    </div>
                </div>
                <div class="shadow p-3 mb-5 bg-body rounded" style="display: flex;">
                    <div class="box" style="width:33,33%;padding-right:8px">
                        <img src="Image/Somerset.jpg" alt="ảnh khách sạn " style="width:285px">
                    </div>
                    <div class="content" style="width:33,33%;padding:0px 8px 0px 8px">
                        <h4> <i class="fas fa-map-marker-alt"></i> SOMERSET HO CHI MINH CITY </h4>
                        <h6 style="color: blue;">8A Nguyen Binh Khiem St Ho Chi Minh City 70000 VN</h6>
                    </div>
                    <div class="money" style="width:33,33%;padding-left:8px">
                        <h6>Giá mỗi đêm</h6>
                        <h6 style="color:red;">2.500.000</h6>
                        <button type="button" class="btn btn-primary">Chọn Phòng </button>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-primary text-center">Xem thêm</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>