<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtMaKS'])){
        $MaKS = $_POST['txtMaKS'];
    }

    $TenKS = $_POST['txtTenKS'];
    $Diachi = $_POST['txtDiachi'];
    $Khuvuc = $_POST['txtKhuvuv'];
    $Mota = $_POST['txtMota'];
    $Sdt = $_POST['txtSdt'];


    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btl');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO db_khachsan (MaKS, TenKS, Diachi, Khuvuc, Mota,Sdt) VALUES ('$MaKS','$TenKS','$Diachi','$Mota','$Sdt')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: admin.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>