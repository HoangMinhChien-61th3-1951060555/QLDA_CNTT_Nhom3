<?php
    // // Trước khi cho người dùng xâm nhập vào bên trong
    // // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    include("template/header.php");
?>

<main>
    
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm mới Thông tin Khách hàng</h5>
        <!-- Form thêm Dữ liệu khách hàng -->
        
        <form action="process-add-khach.php" method="post">
            <div class="form-group">
                <label for="txtTenKH">Tên khách hàng</label>
                <input type="text" class="form-control" id="txtTenKH" name="txtTenKH" placeholder="Nhập tên khách hàng">          
            </div>
            <div class="form-group">
                <label for="txtTenDangNhap">Tên đăng nhập</label>
                <input type="text" class="form-control" id="txTenDangNhap" name="txtTenDangNhap" placeholder="Nhập tài khoản đăng nhập">
            </div>
            <div class="form-group">
                <label for="txtMatKhau">Mật khẩu</label>
                <input type="password" class="form-control" id="txtMatKhau" name="txtMatKhau" placeholder="Nhập mật khẩu">
            </div>
            <div class="form-group">
                <label for="txtSdt">Số điện thoại</label>
                <input type="text" class="form-control" id="txtMoTa" name="txtSdt" placeholder="Liên hệ">
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>

<?php
    include("template/footer.php");
?>