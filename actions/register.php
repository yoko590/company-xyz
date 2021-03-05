<?php
require_once "../classes/user.php";
session_start();

if(!$_SESSION['id']){ 
   header("location: loginRedirect.php");
   exit;
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// PASSWORD_DEFAULT will use the strongest algorithm available

$origin = $_POST['btn_register']; # $origin = "dashboard"/ "register"
$user = new User;
$user->createUser($first_name,$last_name,$username,$password, $origin);
