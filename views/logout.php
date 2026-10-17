<?php
session_name('TRIREC_SESSION');
session_start();
session_destroy();
header('Location: login.php');
exit;
?>
