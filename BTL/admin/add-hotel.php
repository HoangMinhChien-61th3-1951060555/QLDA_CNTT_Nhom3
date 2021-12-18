<?php
    // // Trước khi cho người dùng xâm nhập vào bên trong
    // // Phải kiểm tra THẺ LÀM VIỆC
    // session_start();
    // if(!isset($_SESSION['isLoginOK'])){
    //     header("location:login.php");
    // }
    include("template/header.php");
?>

<main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm mới Thông tin Khách sạn</h5>
        <!-- Form thêm Dữ liệu khách sạn -->
        <form action="process-add-hotel.php" method="post">
            <div class="form-group">
                <label for="txtMaKS">Tên khách sạn</label>
                <input type="text" class="form-control" id="txtMaKS" name="txtMaKS" placeholder="Nhập mã khách sạn">          
            </div>
            <div class="form-group">
                <label for="txtTenKS">Tên khách sạn</label>
                <input type="text" class="form-control" id="txtTenKS" name="txtTenKS" placeholder="Nhập tên khách sạn">          
            </div>
            <div class="form-group">
                <label for="txtDiachi">Địa chỉ</label>
                <input type="tel" class="form-control" id="txtDiachi" name="txtDiachi" placeholder="Nhập địa chỉ">
            </div>
            <div class="form-group">
                <label for="txtKhuvuc">Thành phố</label>
                <input type="text" class="form-control" id="txtKhuvuc" name="txtKhuvuc" placeholder="Nhập thành phố">
            </div>
            <div class="form-group">
                <label for="txtMota">Mô tả</label>
                <input type="tel" class="form-control" id=txtMota" name="txtMota" placeholder="Mô tả">          
            </div>
            <div class="form-group">
                <label for="txtSdt">Số điện thoại</label>
                <input type="tel" class="form-control" id=txSdt" name="txtSdt" placeholder="Số điện thoại">          
            </div>
            <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                 <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Tải lên</button>
            </div>

                    <?php 
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','btl');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM db_khachsan";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <option value="<?php echo $row['MaKS']; ?>"><?php echo $row['TenKS']; ?></option>
                    <?php
                            }
                        }

                        // Bước 03: Đóng kết nối
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>

<?php
    include("template/footer.php");
?>