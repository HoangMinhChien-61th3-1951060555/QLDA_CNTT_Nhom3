<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:loginadmin.php");
    }
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtMaKH'])){
        $MaKH = $_POST['txtMaKH'];
    }
    if(isset($_POST['txtTenKH'])){
        $TenKH      = $_POST['txtTenKH'];
    }

    $TenDangNhap         = $_POST['txtTenDangNhap'];
    $MatKhau         = $_POST['txtMatKhau'];
    $Sdt          = $_POST['txtSdt'];
    
    
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btl');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE nguoidung SET TenKH='$TenKH', TenDangNhap = '$TenDangNhap', MatKhau = '$MatKhau', Sdt = '$Sdt' where MaKH='$MaKH'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: nguoidung.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>