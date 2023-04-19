<?php
include_once '../assets/dp.php';
include_once BASE_PATH . '/assets/db/config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog : Homepage</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,600&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<!-- admin panel -->
<body>
    <nav class="navbar">
        <img src="../assets/images/logo.png" class="logo" alt="">
        <ul class="links-container">
            <li class="link-item"><a href="../View/signup.php" class="link">Logout</a></li>
            <li class="link-item"><a href="/" class="link">Home</a></li>
            <li class="link-item"><a href="../View/admin.php" class="link">Admin</a></li>
        </ul>
    </nav>

    <hr>
    <h1 class="text-center">Top 5 Blogs</h1>

    <table class="table text-center" id='details'>
        <thead class="text-center   ">
            <tr>
                <th>ID</th>
                <th>USER</th>
                <th>LIKES</th>
                <th>TOPICS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = Details::find('all');
            $count = Like::find_by_sql('SELECT user_id,count(blog_id)as count  FROM likes GROUP BY user_id');
            foreach ($result as $key => $value) {
                if ($count[0]->user_id == $result[$key]->user_id) {
                    echo "<tr><td>" . $result[$key]->id . "</td>";
                    echo "<td>" . $result[$key]->user_id . "</td>";
                    echo "<td>" . $count[0]->count . "</td>";
                    echo "<td>" . $result[$key]->topic . "</td></tr>";
                }
            }


            ?>
        </tbody>
    </table>
    </div>

    <hr>
    <h1>
        <center>All Blogs</center>
    </h1>
    <section class='blogs-section-center'>"
        <?php

        $result = Details::find('all');
        foreach ($result as $key => $value) {
            echo "<div class='blog-card'>";
            echo " <img src='" . $result[$key]->image . "' class='blog-image alt=''/>";
            echo " <h1 class=' text-center  blog-title'>" . $result[$key]->topic . "</h1>";
            echo "<p class='blog-overview'>" . $result[$key]->data . "</p>";
            echo " <a href='fullblog.php?id=" . $result[$key]->id . "' class='btn dark'>read</a>&nbsp";
            echo "<a href='../View/admin.php?id=" . $result[$key]->id . "' class='btn dark'>Delete</a>";
        }
        echo " </div>"

        ?>
    </section>
</body>
<script src="./jS/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</html>