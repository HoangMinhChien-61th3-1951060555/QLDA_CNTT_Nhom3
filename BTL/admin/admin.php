<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location: loginadmin.php");
    }
    require("template/header.php");
?>

<main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">Quản lí hệ thống </h5>
            
        </div>    
    </main>

<?php
    include("template/footer.php");
?>