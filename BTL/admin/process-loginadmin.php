<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24 phút
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ loginadmin.php gửi sang
    if(isset($_POST['btnSignIn1'])){
        $admin = $_POST['txtadmin'];
        $adminpass = $_POST['txtadminpass'];

        // Bước 01: Kết nối Database Server 
        $conn = mysqli_connect('localhost','root','','btl');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM admin WHERE tk like '$admin' AND pass like '$adminpass'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0)
        {
            // CẤP THẺ LÀM VIỆC
            $_SESSION['isLoginOK'] = $admin;
            header("location: admin.php"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Mật khẩu không chính xác !";
            header("location: loginadmin.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:loginadmin.php");
    }
?>