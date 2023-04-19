<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" /
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" /
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,600&display=swap" /
     rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/editor.css">
</head>
<body>
<!-- create your blog -->
<body>
<form method="POST" action="../Controller/blogController.php" enctype="multipart/form-data">
    <div class="banner"><span class="text">Start your Blogging journey..........</span>
        <label for="banner-upload" class="banner-upload-btn"><img src="../assets/images/upload.png" alt=""></label>
    </div>
    
    <div class="blog">
        <textarea type="text" name="topic" class="title" placeholder="Blog title..."></textarea>
        <textarea type="url" name="image"  class="imageurl" accept="image/*" id="banner-upload"
        placeholder="Enter image url here" ></textarea>
        <textarea type="text" name="description" class="article" placeholder="Start writing here..."></textarea>
    
    </div>

    <div class="blog-options">
        <button class="btn dark publish-btn" type="submit" name="submit">publish</button>
        
    </div>
    </form>
    

</body>
</html>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

  
</html>