<?php
    @$conn=mysqli_connect("10.100.151.250","testx","testx","data_mj");
    @mysqli_set_charset($conn,"utf8");
    if(!$conn){
        die("Database connection error");
    }


