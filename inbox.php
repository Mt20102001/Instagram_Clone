<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inbox</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>

<body>
    <?php
    include './partials/header-inbox.php';
    ?>

    <main class="mainbox">
        <div class="box">
            <?php
            include './partials/list-friend.php';
            ?>

            <div class="box-chat-none-select">
                <div class="text-none">
                    <div class="logo">
                        <object data="./images/SVG/eb3017b9402e92376a5f38a75d98ee39.svg" width="96" height="96">
                        </object>
                    </div>
                    <div class="mess">
                        <h1>Tin nhắn của bạn</h1>
                        <p>Gửi ảnh và tin nhắn riêng tư cho bạn bè hoặc nhóm.</p>
                    </div>
                    <button type="button">Gửi tin nhắn</button>
                </div>
            </div>
        </div>
    </main>

    <script src="JS/users.js"></script>

</body>

</html>