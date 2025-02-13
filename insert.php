<?php
require 'connect_DB.php';

// إضافة مستخدم جديد
if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', '$age')";

    if ($conn->query($sql) === TRUE) {
        echo "تم إضافة المستخدم بنجاح!";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close(); // إغلاق الاتصال بقاعدة البيانات بعد الانتهاء
?>