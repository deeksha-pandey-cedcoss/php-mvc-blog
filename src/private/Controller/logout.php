<?php

// logout of cookie
setcookie ("login", "", time() - 84000, "/");
header('location:../View/home.php');
