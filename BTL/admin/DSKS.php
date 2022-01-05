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
            <h5 class="text-center text-primary mt-5">Danh sách Khách sạn</h5>
            <div>
                <a class="btn btn-primary" href="add-hotel.php">Thêm khách sạn</a>
            </div>
            <table class="table" >
                <thead>
                    <tr>
                        <th scope="col">Mã khách sạn</th>
                        <th scope="col">Tên khách sạn</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Khu vực</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Ảnh</th>
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
                        $sql = "SELECT * FROM khachsan";
                        $result = mysqli_query($conn, $sql);
                        // Bước 03: Xử lý kết quả truy vấn 
                        
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['MaKS']; ?></th>
                                    <td><?php echo $row['TenKS']; ?></td>
                                    <td><?php echo $row['DiaChi']; ?></td>
                                    <td><?php echo $row['KhuVuc']; ?></td>
                                    <td><?php echo $row['MoTa']; ?></td>
                                    <td><?php echo $row['Anh']; ?></td>
                                    <td><a href="update-hotel.php?id=<?php echo $row['MaKS']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete-hotel.php?id=<?php echo $row['MaKS']; ?>"><i class="bi bi-trash"></i></a></td>
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