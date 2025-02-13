<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title></title>    ملهاش لازمة -->
</head>
<body>
<br><hr>
<h1>Table: Users</h1>
<table border="5">
    <tr>
        <th>User_id</th>
        <th>Name</th>
        <th>E_mail</th>
        <th>Age</th>
        <th>Editing</th>
    </tr>
    <?php
    require'connect_DB.php';
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    // this is arrtibuites name of tabel in DB take care!....
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
        {echo"<tr>
                    <td> ".$row["id"]."    </td>
                    <td> ".$row["name"]."  </td>
                    <td> ".$row["email"]." </td>
                    <td> ".$row["age"]."   </td>
                    <td>
                        <a href='update.php?id=".$row["id"]."'>Change</a> |
                        <a href='delete.php?id=".$row["id"]."'>Delete</a>
                    </td>
              </tr>";
        }
    }
     else 
    {
        echo "<tr><td colspan='5'>لا يوجد مستخدمين</td></tr>";
    }
    $conn->close(); // إغلاق الاتصال بقاعدة البيانات بعد الانتهاء
    ?>
</table>
</body>
</html>