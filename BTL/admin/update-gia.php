<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:loginadmin.php");
    }
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $MaKS = $_GET['id'];
    $TenKS = $_GET['id'];
    $Loai = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btl');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM khachsan_loaiphong WHERE MaKS = '$MaKS' and Loai = '$Loai'";

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
        <h5 class="text-center text-primary mt-5">Cập nhật giá Khách sạn</h5>
        
        <form action="process-update-gia.php" method="post">
            <div class="form-group">
                <label for="txtMaKS">Mã khách sạn</label>
                <input type="text" class="form-control" readonly id="txtMaKS" name="txtMaKS" placeholder="Mã khách sạn" value="<?php echo $row['MaKS']; ?>">
            </div>   

            <div class="form-group">
                <label for="txtTenKS">Tên khách sạn</label>
                <input type="text" class="form-control" readonly id="txtTenKS" name="txtTenKS" placeholder="Tên khách sạn" value="<?php echo $row['TenKS']; ?>">
            </div>

            <div class="form-group">
                <label for="txtLoai">Loại phòng</label>
                <input type="text" class="form-control" readonly id="txtLoai" name="txtLoai" placeholder="Loại phòng" value="<?php echo $row['Loai']; ?>">
                
            </div>
            
            <div class="form-group">
                <label for="txtGia">Giá (đêm)</label>
                <input type="text" class="form-control" id="txtGia" name="txtGia" placeholder="Giá mới" value="<?php echo $row['Gia']; ?>">
                
            </div>
            
            
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>
<?php
    include("template/footer.php");
?>