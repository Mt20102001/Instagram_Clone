<?php 
    session_start();
    include_once "config.php"; //Kết nối database
    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){ //Kiểm tra người dùng đã nhập thông tin chưa
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");//Truy vẫn dữ liệu sql
        if(mysqli_num_rows($sql) > 0){ //Nếu tồn tại dữ liệu trong sql
            $row = mysqli_fetch_assoc($sql); 
            //Băm mật khẩu và lưu vào database
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id']; 
                    echo "success";
                }else{
                    echo "Có lỗi xảy ra, vui lòng thử lại";
                }
            }else{
                echo "Email hoặc Mật khẩu không chính xác!";
            }
        }else{
            echo "$email - Email không tồn tại"; //báo lỗi không tồn tại dữ liệu
        }
    }else{
        echo "Hãy điền đầy đủ thông tin!";
    }
?>