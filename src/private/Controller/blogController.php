<?php
include_once '../assets/dp.php';
include_once BASE_PATH . '/assets/db/config.php';

//pushing in database of blog

if (isset($_POST['submit'])) {
    $topic=$_POST['topic'];
    $desc=$_POST['description'];
    $url=$_POST['image'];
}

$id=$_COOKIE['login'];
$attributes = array('topic' => "$topic",'user_id'=>$id, 'image' => "$url", 'data' => "$desc");
$result = Details::create($attributes);
header('location: ../View/home.php');
?>
