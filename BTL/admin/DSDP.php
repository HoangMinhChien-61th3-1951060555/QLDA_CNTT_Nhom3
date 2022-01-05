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
            <h5 class="text-center text-primary mt-5">Lịch sử  Đặt phòng</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã đặt phòng</th>
                        <th scope="col">Mã khách hàng</th>
                        <th scope="col">Mã khách sạn</th>
                        <th scope="col">Ngày đặt </th>
                        <th scope="col">Ngày trả</th>
                        <th scope="col">Số lư</th>
                        <th scope="col">Giá tiền</th>
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
                        $sql = "SELECT * FROM  datphong";
                        $result = mysqli_query($conn,$sql);
                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['MaDat']; ?></th>
                                    <td><?php echo $row['MaKH']; ?></td>
                                    <td><?php echo $row['MaKS']; ?></td>
                                    <td><?php echo $row['NgayDat']; ?></td>
                                    <td><?php echo $row['NgayTra']; ?></td>
                                    <td><?php echo $row['SL']; ?></td>
                                    <td><?php echo $row['Tien']; ?></td>
                                    <td><a href="update-hotel.php?id=<?php echo $row['MaDat']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="delete-hotel.php?id=<?php echo $row['MaDat']; ?>"><i class="bi bi-trash"></i></a></td>
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