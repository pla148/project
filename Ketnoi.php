<?php
    $conn = mysqli_connect("localhost" , "root" , "" , "quizz");
    if (!$conn) {
        die("Lỗi kết nối: " . mysqli_connect_error());
    }
?>