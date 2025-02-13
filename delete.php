<?php
require 'connect_DB.php';

if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) 
    {
        echo "تم حذف المستخدم بنجاح!";
    }
    else
    {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
    // header("Location: form.php");      option 2 : لكن مش هتلحق تشوف نتيجة العملية
    header("refresh:1; url=form.php"); // option 1 :
}

$conn->close();
?>