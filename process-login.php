<?php
//Tạo SEESION: mặc định mỗi phiên làm việc có thời hạn 24 phút
session_start ();
//index.php sẽ truyền dữ liệu sang, process-login.php sẽ nhận dữ liệu
if (isset($_POST['loginBtn'])){ //nếu ấn nút login thì chuyển hướng sang process-login.php
    $username = $_POST['txtUsername'];
    $pass = $_POST['txtPassword'];
    //Ở đây cần kiểm tra xem người dùng đã nhập chưa, nếu chưa thì đưa ra thông báo

    // Bước 01: Kết nối Database Server
    $conn=mysqli_connect('localhost','root','','instagram_taikhoan');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn đến sql
    $sql = "SELECT * FROM db_nguoidung WHERE Tendangnhap = '$username' AND Matkhau='$pass'";
     // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
    // Nghiêm trọng: lỗi SQL Injection

    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0){
        //Cấp thẻ làm việc
        $_SESSION['WorkCard'] =  $username; //Cấp thẻ làm việc WorkCard, thẻ có giá trị = Username
        header("location: feed.php");//Chuyển hướng vào trang chủ IG
    } else {
        $error = "Rất tiếc, tên đăng nhập hoặc mật khẩu của bạn không đúng. Vui lòng kiểm tra lại";
        header("location:index.php?error=$error");//Chuyển hướng, hiển thị thông báo lỗi vì nhập sai tk, mk
    }

    //Bước 03: Đóng kết nối
    mysqli_close($conn);
} else { //nếu không nhấn nút, mà thông qua việc biết đường dẫn thì sẽ không được truy cập tiếp
    header("location:index.php");
}