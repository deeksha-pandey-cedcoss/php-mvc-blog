<?php

include_once '../assets/dp.php';
include_once BASE_PATH . '/assets/db/config.php';

// blog like 
$user_id = $_COOKIE['login'];
$blog_id = $_GET['blog_id'];

$result = Like::find_by_user_id_and_blog_id($user_id, $blog_id);
$result = $result->id;
if (isset($_COOKIE['login'])) {
      if ($result != "") {
            $res = Like::find_by_id($result);
            $res->delete();
            header('location: ../View/home.php');
      } else {
            $attributes = array('user_id' => $user_id, 'blog_id' => $blog_id);
            $result = Like::create($attributes);
            header('location: ../View/home.php');
      }
}
