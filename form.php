<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management System</title>
</head>
<body>
    <h1>Add a New User</h1>
    <form method="post" action="">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br><br>
        <label>E_mail:</label>    
        <input type="email" name="email" required>
        <br><br>
        <label>Age:</label> 
        <input type="number" name="age" required>
        <br><br>
        <input type="submit" name="submit" value="Add">
    </form>

    <?php
    require 'insert.php';  
    require 'Read.php';
    ?>
</body>
</html>