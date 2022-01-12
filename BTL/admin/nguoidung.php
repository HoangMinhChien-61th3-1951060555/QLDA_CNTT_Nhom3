<?php
    // // Trước khi cho người dùng xâm nhập vào bên trong
    // // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:loginadmin.php");
    }
    include("template/header.php");
?>
<main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">Danh sách Người dùng</h5>
            <div>
                <a class="btn btn-primary" href="add-khach.php">Thêm khách hàng</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã khách hàng</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Tên đăng nhập</th>
                        <th scope="col">Sdt</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                    <?php
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','btl');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT MaKH, TenKH, TenDangNhap, Sdt FROM nguoidung";
                        $result = mysqli_query($conn, $sql);
                        // Bước 03: Xử lý kết quả truy vấn 
                        
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['MaKH']; ?></th>
                                    <td><?php echo $row['TenKH']; ?></td>
                                    <td><?php echo $row['TenDangNhap']; ?></td>
                                    <td><?php echo $row['Sdt']; ?></td>
                                    <td><a href="update-khach.php?id=<?php echo $row['MaKH']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete-khach.php?id=<?php echo $row['MaKH']; ?>"><i class="bi bi-trash"></i></a></td>
                                </tr>
                    <?php
                            }
                        }   
                        // Bước 04: Đóng kết nối Database Server
                        mysqli_close($conn);
                    ?>
                    
                    
                </tbody>
                </table>
        </div>    
    </main>
<?php
    include("template/footer.php");
?>