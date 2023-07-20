<?php
//db connection
session_start();
$conn = new mysqli('localhost', 'root', '', 'photoguide');
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
