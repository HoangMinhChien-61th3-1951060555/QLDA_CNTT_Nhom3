<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí ngay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>


<main>
<div class="container" id ="content">
  
  <div class="row">
    <div class="col-8" id="text">
        <img class="img" src ="Image/Logo.jpg">
        <span> Hahalolo </span>
        <h3> Bạn thích </h3>
        <h1> đi du lịch ? </h1>
        <h3> Bạn muốn tìm hiểu thông tin về những điểm đến? </h3>
        <h3> Chỉ với vài thao tác, hãy nhanh chóng đăng nhập để trải nghiệm và cảm nhận các tiện ích tuyệt vời của chúng tôi. </h3>
        
    </div>
    <div class="col-4" id="login">
    <div class="container">
        <form class="form-signin" action="process-login.php" method="post">
            
            <h1 class="h3 mb-5 font-weight-normal">Đăng ký</h1>
            <label for="inputuser" class="sr-only">Họ và tên</label>
            <input type="text" id="inputten" name="txtten" class="form-control" placeholder="Name" required autofocus>
            <label for="inputuser" class="sr-only">Email hoặc số điện thoại</label>
            <input type="text" id="inputuser" name="txtuser" class="form-control" placeholder="Email or phone number" required autofocus>
            <label for="inputPassword" class="sr-only">Mật khẩu</label>
            <input type="password" id="inputPassword" name="txtPass" class="form-control" placeholder="Password" required>
            <label for="inputRetypePassword" class="sr-only">Nhập lại mật khẩu</label>
            <input type="password" id="inputRetypePassword" name="txtPass2" class="form-control" placeholder="Retype Password" required>
            <div class="checkbox mb-3">
                
                <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }

                ?>
            </div>
            
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" name="btnSignUp">Đăng ký</button>
        
            </div>
            <p class="mt-5 mb-3 text-muted">Bạn đã có tài khoản ? <a style="text-decoration:none;" href ="login.php"> Đăng nhập </p>
        </form>
        </div>
    </div>
  </div>
</div>
            
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>