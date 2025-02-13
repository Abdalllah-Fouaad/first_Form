<?php
require 'connect_DB.php'; // تضمين ملف الاتصال بقاعدة البيانات

if (isset($_GET['id']))
    {
        $id = $_GET['id'];

        if (isset($_POST['submit']))
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $age = $_POST['age'];

                $sql = "UPDATE users SET name='$name', email='$email', age='$age' WHERE id=$id";

                if ($conn->query($sql) === TRUE) 
                {
                    echo "تم تحديث المستخدم بنجاح!";
                    header("refresh:1; url=form.php"); //ممكن تشلها لو عايز مترجعش للصفحة تاني
                }
                else 
                {
                    echo "خطأ: " . $sql . "<br>" . $conn->error;
                }
            }
            

        $sql = "SELECT * FROM users WHERE id=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }
$conn->close(); // إغلاق الاتصال بقاعدة البيانات بعد الانتهاء

?>