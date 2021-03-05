<?php
require_once "../classes/user.php";
session_start();

if(!$_SESSION['id']){ 
   header("location: loginRedirect.php");
   exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

$user = new User;
$user->login($username,$password);