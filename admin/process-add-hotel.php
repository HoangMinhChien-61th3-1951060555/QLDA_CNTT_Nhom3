<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtTenKS'])){
        $TenKS = $_POST['txtTenKS'];
    }

    $DiaChi = $_POST['txtDiaChi'];
    $KhuVuc = $_POST['txtKhuVuc'];
    $MoTa = $_POST['txtMoTa'];
    $Anh = $_POST['txtAnh'];


    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btl');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO khachsan ( TenKS, DiaChi, KhuVuc,MoTa, Anh) VALUES ('$TenKS','$DiaChi','$KhuVuc','$MoTa','$Anh')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: DSKS.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>