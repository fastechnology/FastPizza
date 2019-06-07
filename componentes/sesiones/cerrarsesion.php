<?php
session_start();
session_destroy();
$_SESSION['user']=="";
header("Location: http://app-26e39479-bc52-47d9-bd0f-14ddb6d466c3.cleverapps.io/index.php");
?>