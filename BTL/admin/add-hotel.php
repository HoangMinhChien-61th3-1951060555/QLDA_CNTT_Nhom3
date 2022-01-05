<?php
    // // Trước khi cho người dùng xâm nhập vào bên trong
    // // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    include("template/header.php");
?>

<main>
    
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm mới Thông tin Khách sạn</h5>
        <!-- Form thêm Dữ liệu khách sạn -->
        
        <form action="process-add-hotel.php" method="post">
            <div class="form-group">
                <label for="txtTenKS">Tên khách sạn</label>
                <input type="text" class="form-control" id="txtTenKS" name="txtTenKS" placeholder="Nhập tên khách sạn">          
            </div>
            <div class="form-group">
                <label for="txtDiaChi">Địa chỉ</label>
                <input type="tel" class="form-control" id="txtDiaChi" name="txtDiachi" placeholder="Nhập địa chỉ">
            </div>
            <div class="form-group">
                <label for="txtKhuVuc">Thành phố</label>
                <input type="text" class="form-control" id="txtKhuVuc" name="txtKhuVuc" placeholder="Nhập thành phố">
            </div>
            <div class="form-group">
                <label for="txtMoTa">Mô tả</label>
                <input type="text" class="form-control" id="txtMoTa" name="txtMoTa" placeholder="Khách sạn có gì">
            </div>
            <div class="form-group">
                <label for="txtAnh">Ảnh</label>
                <input type="text" class="form-control" id="txtAnh" name="txtAnh" placeholder="Ảnh">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>

<?php
    include("template/footer.php");
?>