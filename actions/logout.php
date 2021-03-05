<?php

session_start();
// $_SESSION['id'] = id;
session_unset();
// $_SESSION['id'];
session_destroy();
// 

header("location: ../views"); #go to idex.php /login page
exit;

// // Create
// $_SESSION = ['id' => 5, 'username' => 'john'];

// // Unset
// $_SESSION = ['id' => NULL, 'username' => NULL];

// // Destroy
// $_SESSION = [];