<?php

include "php/config.php";

$get_id =$_GET['id'];
	
	// sending query
	mysqli_query($conn,"DELETE FROM post WHERE post_id = '$get_id'");
	mysqli_query($conn, "DELETE FROM photos WHERE photo_id = '$get_id'");
	header("Location: feed.php");

?>
