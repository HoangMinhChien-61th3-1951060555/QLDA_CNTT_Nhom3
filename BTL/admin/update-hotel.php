<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:loginadmin.php");
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $MaKS = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btl');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM khachsan WHERE MaKS = '$MaKS'";

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
        <h5 class="text-center text-primary mt-5">Cập nhật thông tin Khách sạn</h5>
        
        <form action="process-update-hotel.php" method="post">
            <div class="form-group">
                <label for="txtMaKS">Mã khách sạn</label>
                <input type="text" class="form-control" readonly id="txtMaKS" name="txtMaKS" placeholder="Mã khách sạn" value="<?php echo $row['MaKS']; ?>">
                

            <div class="form-group">
                <label for="txtTenKS">Tên khách sạn</label>
                <input type="text" class="form-control" id="txtTenKS" name="txtTenKS" placeholder="Tên khách sạn" value="<?php echo $row['TenKS']; ?>">
                
            </div>
            
            <div class="form-group">
                <label for="txtDiaChi">Địa chỉ</label>
                <input type="text" class="form-control" id="txtDiaChi" name="txtDiaChi" placeholder="Địa chỉ" value="<?php echo $row['DiaChi']; ?>">
                
            </div>

            <div class="form-group">
                <label for="txtKhuVuc">Thành phố</label>
                <input type="text" class="form-control" id="txtKhuVuc" name="txtKhuVuc" placeholder="Khu vực" value="<?php echo $row['KhuVuc']; ?>">
              
            </div>

            <div class="form-group">
                <label for="txtMoTa">Mô tả</label>
                <input type="text" class="form-control" id="txtMoTa" name="txtSLdat" placeholder="Mô tả" value="<?php echo $row['MoTa']; ?>">
              
            </div>

            <div class="form-group">
                <label for="txtAnh">Ảnh</label>
                <input type="text" class="form-control" id="txtAnh" name="txtAnh" placeholder="Ảnh" value="<?php echo $row['Anh']; ?>">
              
            </div>
            
            
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>
<?php
    include("template/footer.php");
?>