<?php
//destroy session
session_destroy();
//clear cookies
setcookie('user_id', '', time() - 3600, "/");
setcookie('user_name', '', time() - 3600, "/");
setcookie('user_type', '', time() - 3600, "/");
setcookie('mobile_no', '', time() - 3600, "/");
setcookie('PHPSESSID', '', time() - 3600, "/");

//redirect to login page
header("location:login.php");
