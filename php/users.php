<<<<<<< HEAD
<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= 'Chưa có người bạn nào, hãy kết bạn để bắt đầu chat.';
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
=======
<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= 'Chưa có người bạn nào, hãy kết bạn để bắt đầu chat.';
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
>>>>>>> master
?>