<?php
include './config.php';
session_start();

$user_id = $_SESSION['unique_id'];//Lấy id người dùng đang làm việc
$new_password = trim($_POST['new_password']); //Lấy pass từ input
$new_password_2 = trim($_POST['new_password_2']); //Lấy pass2 từ input

//nếu 2 mật khẩu nhập trùng nhau
if($new_password == $new_password_2){
    //mã hóa mật khẩu rồi lưu lên database
    $passwd_hash = md5($new_password);

    $sql_change_pass = mysqli_query($conn, "update users set password='$passwd_hash' where unique_id='$user_id'" );
    if($sql_change_pass == true){
        // tạo session gửi thông báo cho người dùng
        $_SESSION['message_password'] = 'Thay đổi mật khẩu thành công';
        header('Location: ../feed.php');
    }
    else{
        $_SESSION['message_password'] = 'Lỗi server, vui lòng quay lại sau';
    }
}
else{
    $_SESSION['message_password'] = 'Mật khẩu nhập không trùng nhau';
}


