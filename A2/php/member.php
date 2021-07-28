<?php
    session_start();
?>

<h1>Hello <?php echo  $_SESSION["username"]; ?></h1>
<h3>Successful Login</h3>