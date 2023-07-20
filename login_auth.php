<?php
include 'config.php';
$mobile_no = $_POST['mobile_no'];
$password = $_POST['password'];
$remember = $_POST['remember'];
$sql = "SELECT * FROM users WHERE `contact` = '$mobile_no' AND `password` = '$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['role'] == 'admin') {
        $_SESSION['login'] = true;
        $_SESSION['admin'] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['mobile_no'] = $row['mobile_no'];
        $_SESSION['role'] = $row['role'];
        header("Location: admin.php");
    } elseif ($row['role'] == 'user') {
        $_SESSION['login'] = true;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['mobile_no'] = $row['mobile_no'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        header("location:dashboard.php");
    } 
    
    if ($remember == 'on') {
        setcookie('user_id', $row['id'], time() + (86400 * 30), "/");
        setcookie('user_name', $row['user_name'], time() + (86400 * 30), "/");
        setcookie('user_role', $row['role'], time() + (86400 * 30), "/");
        setcookie('mobile_no', $row['mobile_no'], time() + (86400 * 30), "/");
        setcookie('email', $row['email'], time() + (86400 * 30), "/");
    }
} else {
    echo "<script>alert('Invalid username or password!')</script>";
    echo "<script>window.location.href='login.php'</script>";
    die;
}
