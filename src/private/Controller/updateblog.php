<?php
session_start();
include_once '../assets/dp.php';
include_once BASE_PATH . '/assets/db/config.php';

// update blogs
if (isset($_GET)) {
    $id=$_GET['id'];
    $topic=$_GET['topic'];
    $image=$_GET['image'];
    $data=$_GET['description'];

}
$result=Details::find_by_id($id);
$result->topic=$topic;
$result->image=$image;
$result->data=$data;
$result->save();
header('location: ../View/myblog.php');

?>