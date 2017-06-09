<?php
session_start();
session_destroy();
header('Location: welcome_admin.php');
?>