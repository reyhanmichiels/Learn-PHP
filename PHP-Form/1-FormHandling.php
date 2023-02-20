<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="1-FormHandling.php" method="post">
        <input type="text" name="name">
        <input type="submit">
    </form>
    <?php 
        if (!empty($_POST)) {
            echo "<p> Hello " . $_POST['name'] . "</p>";
        }
    ?>
    
</body>
</html>