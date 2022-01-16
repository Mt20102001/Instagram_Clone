<?php

    session_start();
    require "config.php";
     //index.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ index.php gửi sang
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($fullname) && !empty($username) && !empty($email) && !empty($password)){ //Kiểm tra người dùng đã nhập chưa?
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){//Kiểm tra dữ liệu đã tồn tại hay chưa
                echo "$email - Email này đã tồn tại!"; //Báo dữ liệu đã tồn tại mời đăng kí tên tk khác
            }else{
                //Xử lý việc up ảnh
                if(isset($_FILES['image'])){ 

                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                                $ran_id = rand(time(), 100000000);
                                $status = "Active now";
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fullname, username, email, password, img, status)
                                VALUES ({$ran_id}, '{$fullname}','{$username}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['unique_id'] = $result['unique_id'];
                                        echo "success";
                                    }else{
                                        echo "Email này không tồn tại!";
                                    }
                                }else{
                                    echo "Có lỗi xảy ra. Vui lòng thử lại!";
                                }
                            }
                        }else{
                            echo "Chỉ hỗ trợ các file có dạng - jpeg, png, jpg";
                        }
                    }else{
                        echo "Chọn một file ảnh có định dạng - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "$email không đúng định dạng email!"; //Báo lỗi sai định dạng email
        }
    }else{
        echo "Vui lòng điền đầy đủ thông tin!"; //Báo lỗi chưa điền đầy đủ
    }
    
?>