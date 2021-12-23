<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="search.css">

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
<section class="search">
<div class="menuback contain-fluid row" >
    <div class="row">
      <button class="col-md-1">
        <i class="bi bi-chevron-double-left"></i>Back</button>
    </div>
    <div class="main-left col-md-3">
      <div class="shadow-sm p-3 mb-5" >  
          <form class="box">
            <div class="inputBox">
              <h3>Bạn muốn ở đâu ?</h3>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root MuiSvgIcon-colorPrimary" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 28319"><path data-name="Rectangle 4402" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 27850"><g data-name="Path 20062"><path data-name="Path 20115" d="M11.637 21.995a1.234 1.234 0 01-.846-.333 2.31 2.31 0 01-.07-.07C8.7 19.429 3.991 13.914 4 9.564a7.64 7.64 0 017.718-7.563 7.683 7.683 0 017.559 7.56h0c0 4.323-4.7 9.855-6.728 12.031a1.232 1.232 0 01-.866.4zm0-19.2A6.841 6.841 0 004.8 9.569c-.008 4.175 4.981 9.846 6.511 11.485a.481.481 0 00.344.142.443.443 0 00.309-.142c1.529-1.644 6.513-7.333 6.515-11.485A6.878 6.878 0 0011.71 2.8z" stroke="currentColor" stroke-width="0.2"></path></g><g data-name="Ellipse 773"><path data-name="Path 20116" d="M11.638 13.461a3.788 3.788 0 113.788-3.788 3.793 3.793 0 01-3.788 3.788zm0-6.781a2.992 2.992 0 102.992 2.992 3 3 0 00-2.992-2.991z" stroke="currentColor" stroke-width="0.2"></path></g></g></g></svg>

               <input type="text" placeholder="Nhập nơi bạn muốn đến" color="white" >
            </div>
            <hr width="100%" color="white">
            <div class="inputBox">
              <h3>Số người</h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root MuiSvgIcon-colorPrimary" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 28011"><path data-name="Rectangle 4480" fill="none" d="M0 0h24v24H0z"></path><g data-name="Vector Smart Object21"><g data-name="Group 21" transform="translate(2 4)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path data-name="Path 44" d="M15.605 4.332a2.62 2.62 0 11-5.232 0V2.757a2.62 2.62 0 115.232 0z"></path><ellipse data-name="Ellipse 9" cx="2.18" cy="2.216" rx="2.18" ry="2.216" transform="translate(3.84 .443)"></ellipse><path data-name="Path 45" d="M8.805 10.302a5.085 5.085 0 00-3.653-1.45 5.261 5.261 0 00-5.136 4.3.872.872 0 00.863 1.019h5"></path><path data-name="Path 46" d="M12.984 9.734h0a7.015 7.015 0 00-6.907 6.082.886.886 0 00.871 1.007H19.02a.886.886 0 00.871-1.007 7.015 7.015 0 00-6.907-6.082z"></path></g></g></g></svg>
              <input type="number" placeholder="Nhập số thành viên" color="white">
            </div>
            <hr width="100%" color="white">
            <div class="inputBox">
              <h3>Ngày nhận phòng</h3>
              <input type="date">
            </div>
            <hr width="100%" color="white">
            <div class="inputBox">
              <h3>Ngày trả phòng</h3>
              <input type="date">
            </div>
            <hr width="100%" color="white">
            <input type="submit" class="btn" value="Tìm kiếm">
          </form>
          
<div class="container-search">
    <div class="root-unline">
<input aria-invalid="false" placeholder="Search by property name" type="text" class="MuiInputBase-input MuiInput-input" value="" color="white">  
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 28003"><path data-name="Rectangle 4474" fill="none" d="M0 0h24v24H0z"></path><g data-name="Group 28211"><g data-name="4"><g data-name="Group 28210"><path data-name="Path 20260" d="M20.83 20.021l-4.647-4.573a7.351 7.351 0 001.965-5A7.514 7.514 0 0010.573 3 7.513 7.513 0 003 10.453a7.513 7.513 0 007.573 7.453 7.616 7.616 0 004.767-1.664l4.665 4.591a.589.589 0 00.824 0 .567.567 0 00.001-.812zm-10.257-3.262a6.358 6.358 0 01-6.408-6.306 6.358 6.358 0 016.408-6.306 6.358 6.358 0 016.408 6.306 6.358 6.358 0 01-6.408 6.306z"></path></g></g></g></g></svg>
</div>
</div>
<div class="Star-rating">

<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
   Star rating
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">
    <span class="check-box">
    <input class="jss60" name="value1" type="checkbox" data-indeterminate="false" value="">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
    </a></li>
    <li><a class="dropdown-item" href="#">
   <input class="jss60" name="value1" type="checkbox" data-indeterminate="false" value="">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
   </a></li>
    <li><a class="dropdown-item" href="#">
    <input class="jss60" name="value1" type="checkbox" data-indeterminate="false" value="">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
    </a></li>
    <li><a class="dropdown-item" href="#">
    <input class="jss60" name="value1" type="checkbox" data-indeterminate="false" value="">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
    </a></li>
    <li><a class="dropdown-item" href="#">
    <input class="jss60" name="value1" type="checkbox" data-indeterminate="false" value="">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>
    </a></li>
<div class="no-rating">
<li><a class="dropdown-item" href="#">
<input class="jss60" name="value1" type="checkbox" data-indeterminate="false" value="">
<p>Unrated</p></a></li>
</ul>
</div>
<div class="row">
  <label for="">Amenities</label>
  <hr width="100%" color="white">
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Pool
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
 Non-smoking room
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Pet are allowed
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Air conditioning
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Television
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Private bathroom
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Kitchen
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Children stay free
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  High speed internet
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Breakfast
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Free parking
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Bathtub
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Laundry
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  Multilingual
  </label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Free shuttle service
  </label>
</div>
<div class="scroll-bar">
 <span class="bt-label">
   <span>Hide</span>
   <span class="down">
   <svg data-name="Group 29042" xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M11.743 9.098l-5.66 5.66a.345.345 0 00.03.48.348.348 0 00.45 0l5.42-5.42 5.42 5.42a.344.344 0 00.48 0 .349.349 0 00.1-.24.349.349 0 00-.1-.24l-5.66-5.66a.344.344 0 00-.48 0z"></path></svg>
   </span>
 </span>
 <span class="cursor-down"></span>
</div>  
</div>
<div class="shadow-sm p-3 mb-5 bg-body rounded" >
        <h6>Recently viewed hotels</h6>
        <hr width="100%" color="white">
        <div class="card" style="width: 18rem;">
          <img src="Image/Hamton.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">HAMPTON INN UTICA</h5>
            <p class="card-text">Price per night</p>
            <p style="color: red;">3.191.440 ₫</p>
          </div>
        </div>
        <hr width="100%" color="white">
        <div class="card" style="width: 18rem;">
          <img src="Image/Homewood.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"> HOMEWOOD SUITES BY HILTON SYRACUSE</h5>
            <p class="card-text">Price per night</p>
            <p style="color: red;">7.540.680 ₫</p>
          </div>
        </div>
        <hr width="100%" color="white">
        <div class="card" style="width: 18rem;">
          <img src="Image/The reverie.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">THE REVERIE SAIGON</h5>
            <p class="card-text">Price per night</p>
            <p style="color: red;">5.500.800 ₫</p>
          </div>
        </div>
        <hr width="100%" color="white">
        <div class="card" style="width: 18rem;">
          <img src="Image/Somerset.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SOMERSET HO CHI MINH CITY</h5>
            <p class="card-text">Price per night</p>
            <p style="color: red;">1.820.000 ₫</p>
          </div>
        </div>
      </div>


</setion>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>