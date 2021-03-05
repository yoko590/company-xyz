<?php
include_once "../classes/user.php";
session_start();

if(!$_SESSION['id']){ 
   header("location: loginRedirect.php");
   exit;
}

$user = new User;
$user_id = $_GET['user_id'];
$user->deleteUser($user_id);