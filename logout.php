
<?php
session_start();
session_destroy();
header('refresh:0;url=https://placementsystem.herokuapp.com/main.php');
?>
