<?php
session_start();
include_once '../assets/dp.php';
include_once BASE_PATH . '/assets/db/config.php';

if(isset($_SESSION['blog'])){
$_SESSION['blog']=array();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog : Homepage</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <nav class="navbar">
        <img src="../assets/images/logo.png" class="logo" alt="">
        <ul class="links-container">
            <li class="link-item"><a href="../View/signup.php" class="link">Logout</a></li>
            <li class="link-item"><a href="/" class="link">Home</a></li>
            <li class="link-item"><a href="" class="link">My Blogs</a></li>
            <li class="link-item"><a href="../View/admin.php" class="link">Admin</a></li>
        </ul>
    </nav>


    <!-- slideshow -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="../assets/images/pexels-karolina-grabowska-4476376.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="../assets/images/header.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/pexels-karolina-grabowska-4476376.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end slideshow -->
    <!-- blog section -->
    <?php
    $result = Details::find('all');
    echo " <section class='blogs-section'>";
    foreach ($result as $key => $value) {
        
        if ($result[$key]->user_id == $_COOKIE['login']) {
        echo "<div class='blog-card'>";
        echo " <img src='" . $result[$key]->image . "' class='blog-image alt=''/>";
        echo " <h1 class='blog-title'>" . $result[$key]->topic . "</h1>";
        echo "<p class='blog-overview'>" . $result[$key]->data . "</p>";
        echo "<a href='fullblog.php?id=".$result[$key]->id."' class='btn dark'>read</a>&nbsp&nbsp";
      echo "<a href='../Controller/like.php?blog_id=".$result[$key]->id."& user_id=".$_COOKIE['login']." class='btn dark''><i class='fa-solid fa-heart'></i></a>";
        echo "  <a href='../Controller/editblog.php?id=".$result[$key]->id."' class='btn dark'>Edit</a>
          <a href='../Controller/deleteblog.php?id=".$result[$key]->id."' class='btn dark'>Delete</a>";
        }
        echo " </div>";
       
       
        
    
    }
    $_SESSION['blog']['image']=$result[$key]->image;
    $_SESSION['blog']['id']=$result[$key]->id;
    $_SESSION['blog']['topic']=$result[$key]->topic;
    $_SESSION['blog']['data']=$result[$key]->data;
    
    echo "</section>";
    
    ?>
    </section>
</body>
<script src="../assets/js/script.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-firestore.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>