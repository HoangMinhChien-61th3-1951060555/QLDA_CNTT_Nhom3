<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:loginadmin.php");
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $MaKH = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btl');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM nguoidung WHERE MaKH = '$MaKH'";

    $result = mysqli_query($conn,$sql);

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);
?>

<?php
    include("template/header.php");
?>
<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Cập nhật thông tin Khách hàng</h5>
        
        <form action="process-update-khach.php" method="post">
            <div class="form-group">
                <label for="txtMaKH">Mã khách hàng</label>
                <input type="text" class="form-control" readonly id="txtMaKH" name="txtMaKH" placeholder="Mã khách hàng" value="<?php echo $row['MaKH']; ?>">
                

            <div class="form-group">
                <label for="txtTenKH">Tên khách hàng</label>
                <input type="text" class="form-control" id="txtTenKH" name="txtTenKH" placeholder="Tên khách hàng" value="<?php echo $row['TenKH']; ?>">
                
            </div>
            
            <div class="form-group">
                <label for="txtTenDangNhap">Tên đăng nhập</label>
                <input type="text" class="form-control" id="txtTenDangNhap" name="txtTenDangNhap" placeholder="TenDangNhap" value="<?php echo $row['TenDangNhap']; ?>">
                
            </div>

            <div class="form-group">
                <label for="txtMatKhau">Mật khẩu</label>
                <input type="passwword" class="form-control" id="txtMatKhau" name="txtMatKhau" placeholder="Mật khẩu" value="<?php echo $row['MatKhau']; ?>">
              
            </div>

            <div class="form-group">
                <label for="txtSdt">Số điện thoại</label>
                <input type="text" class="form-control" id="txtSdt" name="txtSdt" placeholder="Số điện thoại" value="<?php echo $row['Sdt']; ?>">
              
            </div>
    
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>
<?php
    include("template/footer.php");
?>