<?php
     $servername = "localhost";
     $username   = "root";      
     $password   = "123456789";
     $dbname     = "my_database";
     // إنشاء الاتصال
     $conn = new mysqli($servername, $username, $password, $dbname);
     // التحقق من الاتصال
     if ($conn->connect_error)
     {
        die("Connection failed: " . $conn->connect_error);
     }
?>