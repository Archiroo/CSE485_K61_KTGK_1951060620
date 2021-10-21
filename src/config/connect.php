<?php 
    define('SITEURL', 'http://localhost/CSE485_K61_KTGK_1951060620/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'kiemtra');

    $con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($con)
    {
        mysqli_query($con, "SET NAMES 'UTF8'");
    }
    else
    {
        echo "Kết nối thất bại";
    }
?>