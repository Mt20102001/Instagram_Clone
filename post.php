<?php
include("./php/config.php");
include("session.php");

if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
} else {
	$file = $_FILES['image']['tmp_name'];
	$image = $_FILES["image"]["name"];
	$image_name = addslashes($_FILES['image']['name']);
	$size = $_FILES["image"]["size"];
	$error = $_FILES["image"]["error"];

	if ($error > 0) {
		die("Lỗi tải file! Code $error.");
	} else {
		if ($size > 10000000) //conditions for the file
		{
			die("Định dạng không được hỗ trợ hoặc kích thước file quá lớn!");
		} else {

			move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
			$location = "upload/" . $_FILES["image"]["name"];
			$content = $_POST['content'];
			$time = time();

			$update = mysqli_query($conn, " INSERT INTO post (user_id,post_image,content,created)
									VALUES ('$id','$location','$content','$time') ");

			$update_photo = mysqli_query($conn, " INSERT INTO photos (location,user_id,date_added)
									VALUES ('$location','$id',NOW()) ");
		}
		header("location: feed.php");
	}
}
?>
