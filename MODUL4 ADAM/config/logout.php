<?php
session_start();
session_destroy();
session_unset();

header("Location: ../pages/home-adam.php");
exit;


?>