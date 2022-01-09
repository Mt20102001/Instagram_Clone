<?php
include("./php/config.php");
session_start();
if (!isset($_SESSION['unique_id'])){
header('location:login.php');
}

$id = $_SESSION['unique_id'];

$query=mysqli_query ($conn,"SELECT * FROM users WHERE user_id ='$id'");
$row=mysqli_fetch_array($query);
$profile_picture=$row['img'];
$fullname=$row['fullname'];
$username=$row['username'];
?>