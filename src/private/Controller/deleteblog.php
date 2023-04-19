<?php
include_once '../assets/dp.php';
include_once BASE_PATH . '/assets/db/config.php';

// deletion of blog by user

if (isset($_GET)) {
    $result = Details::find_by_id($_GET['id']);
    $result->delete();
   
}
header('location: ../View/myblog.php');
