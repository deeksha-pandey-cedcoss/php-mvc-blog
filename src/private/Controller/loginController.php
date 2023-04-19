<?php
// login checker
include_once '../assets/dp.php';
include_once BASE_PATH . '/assets/db/config.php';

// login controller
if (isset($_GET)) {
    $result = User::find_by_email_and_password($_GET['email'], $_GET['password']);
    if ($result->email) {
       setcookie ("login", $result->id, time()+84000, "/");
        header('location:../View/home.php');
      
    }
}
?>
