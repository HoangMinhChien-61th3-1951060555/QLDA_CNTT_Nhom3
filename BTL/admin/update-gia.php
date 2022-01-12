<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:loginadmin.php");
    }
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','btl');
        $maks = $_GET['maks'];
        $loai = $_GET['loai'];
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        $sql = "SELECT khachsan.MaKS, TenKS, Loai, Gia FROM  khachsan, khachsan_loaiphong where khachsan.MaKS = khachsan_loaiphong.MaKS and khachsan.MaKS = $maks and Loai like '$loai' ";
            $result = mysqli_query($conn,$sql);
            // Bước 03: Xử lý kết quả truy vấn
            
            if(mysqli_num_rows($result) > 0){
            while($rows = mysqli_fetch_assoc($result)){
            
            $row = $rows;  
                          
            }
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