<?php
$submitted = !empty($_POST);
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Request Access Handler Page</title>
    </head>
    <body>
        <p>Form submitted? <?php echo (int) $submitted; ?></p>
        <p>Your request info was submitted</p>
        <ul>
            <li><b>username: </b> <?php echo $_POST['firstname']; ?></li>
            <li><b>password: </b> <?php echo $_POST['lastname']; ?></li>
            <li><b>project involvement: </b> <?php echo $_POST['involvement']; ?></li>
            <li><b>drive's car: </b> <?php echo $_POST['drives_car']; ?></li>
            <li><b>comments: </b> <?php echo $_POST['comments']; ?></li>
        </ul>
    </body>
</html>