<?php
    require 'update_processing.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Data</title>
</head>
<body>
    <h1>Update Data</h1>
    <form method="post" action="">
        <label>Name</label> 
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <br>
        <label>E_mail</label> 
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <br>
        <label>Age</label>
        <input type="number" name="age" value="<?php echo $row['age']; ?>">
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>