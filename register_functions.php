<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $mobile_no = $_POST['contact'];
    
    if ($_POST['password'] == $_POST['c_password']) {
        $password = $_POST['password'];
    } else {
        echo "<script>alert('Password and Confirm Password does not match!')</script>";
        echo "<script>window.location.href='register.php'</script>";
        die;
    }
    //check if mobile number already exists
    $sql = "SELECT * FROM users WHERE mobile_no = '$mobile_no'";
    $result2 = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result2) > 0) {
        echo "<script>alert('Mobile Number already exists!')</script>";
        echo "<script>window.location.href='register.php'</script>";
        die;
    } else {
        $sql = "INSERT INTO users (`user_name`, `password`,`role`,`contact`,`email`) VALUES ('$user_name', '$password','user','$mobile_no','$email')";
        $result = mysqli_query($conn, $sql);
        $id = mysqli_insert_id($conn);
        if (!$result) {
            echo "<script>alert('Something went wrong!')</script>";
            echo "<script>window.location.href='register.php'</script>";
            die;
        } else {
            echo "<script>alert('User registered successfully!')</script>";
            echo "<script>window.location.href='login.php'</script>";
        }
    }
}
