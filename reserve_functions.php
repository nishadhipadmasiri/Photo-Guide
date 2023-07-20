<?php
include 'config.php';
//send mail using phpmailer
require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$email = $_SESSION['email'];
$prices = [
    '2.5x3.5' => '50',
    '3.5x5' => '50',
    '4x6' => '50',
    '5x7' => '100',
    '6x8' => '100',
    '8x10' => '100',
    '8.5x11' => '100',
    '11x14' => '150',
    '11x17' => '150',
    '16x20' => '180',
    '18x24' => '180',
    '20x24' => '200',
    '20x30' => '250',
    '24x30' => '250',
    '24x36' => '250',
    'A4' => '180',
    'A3' => '220',
    'A2' => '400',
    'A1' => '800',
    'A0' => '1000',
];
if (isset($_POST['submit'])) {
    $branch_id = $_POST['branch_id'] ?? '';
    $user_id = $_POST['user_id'] ?? '';
    $user_name = $_POST['user_name'] ?? '';
    $branch_name = $_POST['branch_name'] ?? '';
    $size = $_POST['size'] ?? '';
    $qty = $_POST['qty'] ?? '';
    $laminate = $_POST['laminate'] ?? '';

    $tot = $prices[$size] * $qty;
    if ($laminate == 'yes'){
        $tot = $tot * 1.10;
    }
    $advance = $tot * 0.5;

    $sql = "INSERT INTO resevation (`user_id`, `branch_id`,`size`,`qty`,`laminate`, `total`, `advanced`) VALUES ('$user_id', '$branch_id','$size','$qty','$laminate', '$tot', '$advance')";
    $result = mysqli_query($conn, $sql);
    $id = mysqli_insert_id($conn);
    if (!$result) {
        echo "<script>alert('Something went wrong!')</script>";
        echo "<script>window.location.href='appointment.php'</script>";
        die;
    } else {
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 465;
        $phpmailer->Username = 'nirajpramixit@gmail.com';
        $phpmailer->Password = 'ctumfjhmdrsziqii';
        //set from email
        $phpmailer->setFrom('nirajpramixit@gmail.com', 'Photo Guide');
        $phpmailer->addAddress($email);
        $phpmailer->Subject = 'Payment';
        //create html cover page
        $phpmailer->isHTML(true);
        $phpmailer->Body = '<h1>Photo Guide Payment</h1><p>Click the link below to pay</p><a href="http://localhost/photo/dashboard.php">Pay</a>';
        $phpmailer->AltBody = 'Please pay the photo bill';
        if (!$phpmailer->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $phpmailer->ErrorInfo;
            echo '<br><a href="dashboard.php">go back</a>';
        } else {
                echo "<script>alert('Payment Mail sent successfully')</script>";
                echo "<script>window.location.href='dashboard.php'</script>";

        }
    }
}