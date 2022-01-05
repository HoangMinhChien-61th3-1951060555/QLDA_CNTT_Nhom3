<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:loginadmin.php");
    }
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtMaKS'])){
        $MaKS = $_POST['txtMaKS'];
    }
    if(isset($_POST['txtLoai'])){
        $Loai   = $_POST['txtLoai'];
    }

    $Gia         = $_POST['txtGia'];
 
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btl');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE khachsan_loaiphong SET Gia = '$Gia' where MaKS='$MaKS' and Loai ='$Loai'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: giaphong.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>